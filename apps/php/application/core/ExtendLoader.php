<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final class ExtendLoader extends \CI_Loader
{
	private Environment $twig;

	public function __construct()
	{
		$this->twig = new Environment(new FilesystemLoader([APPPATH . 'views/']), [
			'cache' => isProduction() ? APPPATH . 'cache' : false
		]);
	}

	public function view($view, $data = [], $return = false)
	{
		$view = str_ends_with($view, '.twig') ? $view : $view . '.twig';
		$output = $this->twig->render($view, $data);

		if ($return) {
			return $output;
		}

		echo $output;
	}
}
