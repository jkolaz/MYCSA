<?php
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}
require 'application/config/config.php';
require 'application/libs/application.php';
require 'application/libs/controller.php';
require 'application/libs/function.php';
$app = new Application();
?>
