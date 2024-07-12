<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Core\Session;
use App\Repository\UserRepository;

class AdminUserController extends AbstractAdminController
{
    public function index()
    {
        $repository = new UserRepository();
        $users =  $repository->getAllUsers();

        $this->render('dashboard-user', ['users' => $users]);
    }

    public function showUserUpdateForm($param)
    {
        $repository = new UserRepository();
        $user = $repository->getUserById($param['id']);
        $this->render('user-update-form', ['user' => $user]);
    }

    public function processUpdateUser()
    {
        $session = new Session();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (
                !isset($_POST['user_id']) || empty($_POST['user_id']) ||
                !isset($_POST['user_pseudo']) || empty($_POST['user_pseudo']) ||
                !isset($_POST['user_email']) || empty($_POST['user_email']) ||
                !isset($_POST['user_statut']) || empty($_POST['user_statut'])
            ) {
                $session->setFlashMessage('Veuillez remplir tous les champs', 'warning');
                header('Location: /car-location/dashboard/users/modifier/' . $_POST['user_id']);
                exit;
            }

            $id = $_POST['user_id'];
            $pseudo = trim($_POST['user_pseudo']);
            $email = trim($_POST['user_email']);
            $statut = $_POST['user_statut'];

            $statut = ($statut == "true") ? true : false;

            $repository = new UserRepository();
            $isSuccedRequest = $repository->updateUserById($id, $pseudo, $email, $statut);

            if ($isSuccedRequest) {
                $session->setFlashMessage('Modification réussi');
                header('Location: ' . SITE_NAME . '/dashboard/users');
                exit;
            } else {
                $session->setFlashMessage('la requete a rencontré un problème', 'danger');
                header('Location: /car-location/dashboard/users/modifier/' . $_POST['user_id']);
                exit;
            }
        } else {
            header('Location: /car-location/dashboard');
            exit;
        }
    }
}
