<?php


namespace PHPInitiation\Validator\User;


use PHPInitiation\Validator\Validator;

class ValidateLogin extends Validator
{

    public function valid(): array
    {

        $error = [];

        if (!$this->post("email", FILTER_VALIDATE_EMAIL)) {
            $error["email"] = "An email is required!";
        }

        if (!$this->post("password")) {
            $error["password"] = "A password is required!";
        }
        return $error;
    }


}