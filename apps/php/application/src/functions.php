<?php

/**
 * 
 * @method log_message 
 * @return bool 
 */

/**
 * Checks if the current environment is set to production.
 *
 * @return bool Returns TRUE if the environment is 'production', FALSE otherwise.
 */
function isProduction(): bool
{
	return ENVIRONMENT === 'production';
}

/**
 * Checks if the current environment is set to development.
 *
 * @return bool Returns TRUE if the environment is 'development', FALSE otherwise.
 */
function isDevelopment(): bool
{
	return ENVIRONMENT === 'development';
}

/**
 * Logs a message with a specific severity level and context.
 *
 * This function utilizes the global logging system to log messages
 * with an associated severity level and additional contextual data.
 *
 * @param Level|string $level The severity level of the log (e.g., 'error', 'debug', or 'info').
 * @param string|\Stringable $message The log message to be recorded.
 * @param array $context [optional] Additional contextual information for the log message.
 * @return void
 */
function logExt($level, string|\Stringable $message, array $context = []): void
{
	/** @var ExtendLog */
	global $_log;

	$_log[0]->getLogger()->log($level, $message, $context);
}
