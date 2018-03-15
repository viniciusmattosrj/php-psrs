<?php

require_once '../vendor/autoload.php';

use  App\Controllers\HomeController as Home;

$home = new Home;
echo $home->index();