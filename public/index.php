<?php

require_once '../src/Core/Autoloader.php';

use App\Core\Autoloader;
use App\Core\Router;

Autoloader::autoload();

$router = new Router();
