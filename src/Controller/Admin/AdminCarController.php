<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AbstractAdminController;
use App\Repository\CarRepository;

class AdminCarController  extends AbstractAdminController
{
    public function index()
    {
        $repository = new CarRepository();
        $cars =  $repository->getAllCars();

        $this->render('dashboard-car', ['cars' => $cars]);
    }

    public function addCar()
    {
        $this->render('car-create-form');
    }
}
