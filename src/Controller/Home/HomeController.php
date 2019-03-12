<?php

namespace PHPInitiation\Controller\Home;

use PHPInitiation\Controller\Controller;

class HomeController extends Controller
{



    /**
     * Read users
     */
    public function read()
    {
        $title = "Home";
        include __DIR__ . "/../../../template/home/home.html.php";
    }



}





