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

        $this->render('dashboard-user', ['users'=> $users]);
    }
}
