<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Core\Session;
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
            $session = new Session();

            if (!isset($_POST['email']) || !isset($_POST['pswd']) || empty($_POST['email']) || empty($_POST['pswd'])) {
                $session->setFlashMessage('Veuillez remplir tous les champs', 'danger');
                header('Location: ' . SITE_NAME . '/connexion');
                exit;
            }

            $email = trim($_POST['email']);
            $pswd = trim($_POST['pswd']);

            $userRepository = new UserRepository;
            $user = $userRepository->getUserByEmail($email);

            if ($user == false) {
                $session->setFlashMessage('Veuillez verifier vos identifiants', 'warning');
                header('Location: ' . SITE_NAME . '/connexion');
                exit;
            }

            if ($user['mot_de_passe']  !== $pswd) {
                $session->setFlashMessage('Veuillez verifier vos identifiants', 'warning');
                header('Location: ' . SITE_NAME . '/connexion');
                exit;
            }

            $session->setFlashMessage('Vous êtes connecté', 'primary');
            header('Location: ' . SITE_NAME . '/');
            exit;
        } else {
            header('Location: ' . SITE_NAME . '/connexion');
            exit;
        }
    }
}
