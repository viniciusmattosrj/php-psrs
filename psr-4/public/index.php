<?php

require_once '../vendor/autoload.php';

$home = new \App\Controllers\HomeController;
echo $home->index();