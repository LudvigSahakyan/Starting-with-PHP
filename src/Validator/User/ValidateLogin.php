<?php


namespace PHPInitiation\Validator\User;


use PHPInitiation\Validator\Validator;

class ValidateLogin extends Validator
{

    public function valid(): array
    {
        $this->post();
        $error = [];

        if (!$this->post("email", FILTER_VALIDATE_EMAIL)) {
            $error["email"] = "A valid email is required!";
        }

        if (!$this->post("password")) {
            $error["password"] = "Choose a password!";
        } elseif (
            $this->post("password") !== $this->post("confirm")) {
            $error["password"] = "Confirm with the same password";
        }
        return $error;
    }


}