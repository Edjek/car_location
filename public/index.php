<?php

require_once '../src/Core/Autoloader.php';

use App\Entity\Test;
use App\Core\Autoloader;

Autoloader::autoload();

$test = new Test();
echo $test->display();