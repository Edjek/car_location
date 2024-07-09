<?php

namespace App\Controller;

class ContactController
{
    public function showContactForm()
    {
        require_once DIR_PATH . '/templates/contact.php';
    }
}
