<?php

use mindplay\vite\Manifest;
use mindplay\vite\Tags;

/**
 * @var Tags $spaTags
 */


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter 3 + Vue 3 + Vite</title>

  <?= $spaTags->preload ?>
  <?= $spaTags->css ?>

</head>

<body>
  <div id="app">
  </div>

  <?= $spaTags->js ?>
</body>

</html>
