<?php

namespace PHPInitiation\Controller\Users;

use PHPInitiation\Controller\Controller;
use PHPInitiation\Repository\User\UserLoginRepository;
use PHPInitiation\Validator\User\ValidateInfo;
use PHPInitiation\Validator\User\ValidateSignIn;


class UsersController extends Controller
{

    /**
     * Create users
     */
    public function new()
    {

        if ($this->session("user")) {
            header("location: home" );
            exit;
        }
        $error = [];

        if (filter_input(INPUT_POST, "signin")) {
            $error = (new ValidateSignIn())->valid() + (new ValidateInfo())->valid();
            if (!$error) {
                try {
                    $repository = new UserLoginRepository();
                    $repository->persist(
                        filter_input(INPUT_POST, "email"),
                        password_hash(filter_input(INPUT_POST, "password"), PASSWORD_DEFAULT)
                        );
                    header("location: login");
                    exit;
                } catch (\PDOException $e) {

                    if ("23000" === $e->getCode()) {
                        $error["email"] = "A user with this email already exists!";
                    } else {
                        $error["pdo"] = "It seems we have technical problems, please try later" . $e->getMessage();
                    }
                }
            }
        }

        $this->render("users/users_new.html.php", [
            "title" => "Sign In",
            "error" => $error
        ]);

    }

    /**
     * Read users
     */
    public function read()
    {
        try {
            $repository = new UserLoginRepository();
            $users = $repository->findAll();
        } catch (\PDOException $e) {
            $error["pdo"] = "It seems we have technical problems, please try later" . $e->getMessage();
        }

        $this->render("users/users.html.php", [
            "title" => "Users",
            "users" => $users
        ]);
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





