<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 27/02/2019
 * Time: 13:58
 */

namespace PHPInitiation\Validator\User;


class ValidateSignIn extends ValidateLogin
{

    public function valid() :array
    {

        $error = parent::valid();

        if (
            $this->post("password") !== $this->post("confirm")) {
            $error["password"] = "Confirm with the same password";
        }
        return $error;

    }



}