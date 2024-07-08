<?php

require_once '../src/Entity/Test.php';

use App\Entity\Test;

$test = new Test();
echo $test->display();