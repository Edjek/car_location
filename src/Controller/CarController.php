<?php

namespace App\Controller;

class CarController
{
    public function showReservationDetails($param)
    {
        $id = $param['id'];
        require_once DIR_PATH . '/templates/reservation.php';
    }
}
