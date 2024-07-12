<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Core\Session;
use App\Repository\CarRepository;

class AdminCarController  extends AbstractAdminController
{
    public function index()
    {
        $repository = new CarRepository();
        $cars =  $repository->getAllCars();

        $this->render('dashboard-car', ['cars' => $cars]);
    }

    public function showCarCreateForm()
    {
        $this->render('car-create-form');
    }

    public function processCarCreateForm()
    {
        $session = new Session();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
        } else {
            header('Location: /car-location/dashboard');
            exit;
        }
    }
}
