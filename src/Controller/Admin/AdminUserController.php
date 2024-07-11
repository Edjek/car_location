<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
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
    }
}
