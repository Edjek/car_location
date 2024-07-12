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

    public function setFlashMessage(string $content, string $alertType = 'primary')
    {
        $_SESSION['message'] = '
        <div class="w-50 m-auto alert alert-' . $alertType . ' alert-dismissible fade show" role="alert">' . $content . '

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    public function displayFlashMessage()
    {
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }

    public function createSession(array $array)
    {
        $_SESSION['LOGGED_USERNAME'] = $array['pseudo'];
        $_SESSION['LOGGED_ID'] = $array['id'];
        if ($array['statut'] == true) {
            $_SESSION['LOGGED_ADMIN'] = true;
        }
    }
}
