<?php

namespace App\Controller\Front;

use App\Controller\Front\AbstractController;
use App\Core\Session;
use App\Repository\UserRepository;

class UserController extends AbstractController
{
    public function showConnexionForm()
    {
        $this->render('connexion');
    }

    public function deconnexion()
    {
        // Supprime toutes les variables de session
        session_unset();

        // Détruit la session
        session_destroy();

        // Supprime toutes les variables de session résiduelles
        $_SESSION = [];

        // Redirige vers la page d'accueil
        header('Location: ' . SITE_NAME . '/');
        exit;
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

            $session->createSession($user);
            $session->setFlashMessage('Vous êtes connecté', 'primary');
            header('Location: ' . SITE_NAME . '/');
            exit;
        } else {
            header('Location: ' . SITE_NAME . '/connexion');
            exit;
        }
    }
}
