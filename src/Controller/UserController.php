<?php

namespace App\Controller;

use App\Controller\AbstractController;

class UserController extends AbstractController
{
    public function showConnexionForm()
    {
        $this->render('connexion');
    }
}
