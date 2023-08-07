<?php
session_start();

require 'init.php';

$app = new App();
$app->loadController();
