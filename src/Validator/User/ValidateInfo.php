<?php


namespace PHPInitiation\Validator\User;


use PHPInitiation\Validator\Validator;

class ValidateInfo extends Validator
{

    public function valid(): array
    {

        $error = [];

        if ($this->post("firstname")
            && false === $this->post(
                "firstname",
                FILTER_VALIDATE_REGEXP,
                "/^[A-Z]{1}[a-z\\xe0-\\xff]{2,31}$/u")) {
            $error["firstname"] = "Please provide a proper name!";
        }

        if ($this->post("lastname")
            && false === $this->post(
                "lastname",
                FILTER_VALIDATE_REGEXP,
                "/^[A-Z]{1}[a-z\\xe0-\\xff]{2,31}$/u")) {
            $error["lastname"] = "Please provide a proper name!";
        }

        if ($this->post("phone")
            && false === $this->post(
                "phone",
                FILTER_VALIDATE_REGEXP,
                "/^(0|\\+33|0033)[1-9][0-9]{10,13}$/")) {
            $error["phone"] = "Please provide a proper phone number!";
        }
        return $error;
    }


}