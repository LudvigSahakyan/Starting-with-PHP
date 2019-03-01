<?php

namespace PHPInitiation\Controller\Contact;

use PHPInitiation\Controller\Controller;

class ContactController extends Controller
{

    /**
     * Create users
     */
    public function new()
    {

    }

    /**
     * Read users
     */
    public function read()
    {

        $title = "Contact";
        include __DIR__ . "/../../../template/contact/contact.html.php";

    }

    /**
     * Update users
     */
    public function update()
    {

    }

    /**
     * Delete users
     */
    public function delete()
    {

    }


}


