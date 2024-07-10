<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Repository\UserRepository;

class UserController extends AbstractController
{
    public function showConnexionForm()
    {
        $this->render('connexion');
    }

    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_POST['email']) || !isset($_POST['pswd']) || empty($_POST['email']) || empty($_POST['pswd'])) {
                echo 'erreur';
            }

            $email = trim($_POST['email']);
            $pswd = trim($_POST['pswd']);

            $userRepository = new UserRepository;
            $user = $userRepository->getUserByEmail($email);

            if ($user == false) {
                echo 'cet utilisateur';
            }

            if ($user['mot_de_passe']  !== $pswd) {
                echo 'y a erreur';
            }

            
        }
    }
}
