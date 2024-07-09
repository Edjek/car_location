<?php

require_once '../src/Core/Autoloader.php';
require_once '../config/env.php';

use App\Core\Autoloader;
use App\Core\Router;

Autoloader::autoload();

$router = new Router();
$router->execute();
