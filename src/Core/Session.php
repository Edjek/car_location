<?php

namespace App\Core;

class Session
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function addFlashMessage(string $content, string $alertType = 'primary')
    {
        $_SESSION['flashMessage'] = '
        <div class="w-50 m-auto alert alert-' . $alertType . ' alert-dismissible fade show" role="alert">' . $content . '

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    public function displayFlashMessage()
    {
        if (isset($_SESSION['flashMessage'])) {
            echo $_SESSION['flashMessage'];
            unset($_SESSION['flashMessage']);
        }
    }
}
