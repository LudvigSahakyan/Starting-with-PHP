<?php

namespace PHPInitiation\Controller\Home;

use PHPInitiation\Controller\Controller;

class HomeController extends Controller
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

        $title = "Home";
        include __DIR__ . "/../../../template/home/home.html.php";
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





