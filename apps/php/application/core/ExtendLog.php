<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\InvalidArgumentException;
use Psr\Log\LoggerInterface;

/**
 * Extend to Monolog
 * @package 
 */
final class ExtendLog extends CI_Log
{
	const ENABLE_ERRORS = ['error', 'info', 'debug'];

	private LoggerInterface $log;

	public function __construct()
	{
		$logDir = config_item('') ?: APPPATH . 'logs/';
		$logPath = $logDir . date('Y-m-d') . '.log';
		$level = Level::fromName(config_item('log_threshold'));
		$log = new Logger('ci_application');
		$log->pushHandler(new StreamHandler($logPath, $level))
			->pushHandler(new StreamHandler('php://stdout', $level));

		$this->log = $log;
	}

	/**
	 * 
	 * @param Level|string $level error|debug|info
	 * @param string $msg 
	 * @return bool 
	 * @throws InvalidArgumentException 
	 */
	public function write_log($level, $msg)
	{
		if (in_array($level, static::ENABLE_ERRORS)) {
			$level = match ($level) {
				'error' => Level::Error,
				'info' => Level::Info,
				'debug' => Level::Debug,
				default => Level::Debug,
			};
		}

		$this->log->log($level, $msg);
	}

	public function getLogger()
	{
		return $this->log;
	}
}
