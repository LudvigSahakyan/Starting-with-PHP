<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 25/02/2019
 * Time: 10:28
 */

namespace PHPInitiation\Controller\NotFound;


class NotFoundController
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

        $title = "Error 404 Page Not Found! Please enter a valid page name";

        include __DIR__ . "/../../../template/not-found/not-found.html.php";

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