<?php

use App\Core\BaseController;
use mindplay\vite\Manifest;

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends BaseController
{
	public function index()
	{
		$isDev = isDevelopment();
		$entryName = "src/main.ts";
		$manifestPath = FCPATH . 'dist/.vite/manifest.json';
		$basePath = $isDev ? 'http://localhost:4173/' : '/dist/';

		$vite = new Manifest($isDev, $manifestPath, $basePath);
		$spaTags = $vite->createTags($entryName);

		$this->load->view('index', ['spaTags' => $spaTags]);
	}
}
