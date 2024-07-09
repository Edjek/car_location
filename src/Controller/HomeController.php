<?php

namespace App\Controller;

class HomeController
{
    public function index()
    {
        require_once DIR_PATH . '/templates/home.php';
    }
}
