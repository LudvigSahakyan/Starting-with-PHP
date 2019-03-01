<?php

namespace PHPInitiation\Controller\Users;

use PHPInitiation\Controller\Controller;
use PHPInitiation\Model\User\User;
use PHPInitiation\Model\User\UserAvatar;
use PHPInitiation\Model\User\UserInfo;
use PHPInitiation\Model\User\UserLogin;
use PHPInitiation\Validator\User\ValidateInfo;
use PHPInitiation\Validator\User\ValidateLogin;
use PHPInitiation\Validator\User\ValidateSignIn;


class UsersController extends Controller
{

    /**
     * Create users
     */
    public function new()
    {




        $error = [];

        if (filter_input(INPUT_POST, "signin")) {
            $validateSignIn = new ValidateSignIn();
            $validateInfo = new ValidateInfo();
            $error = $validateSignIn->valid() + $validateInfo->valid();

            if (0 === count($error)) {

                $email = filter_input(INPUT_POST, "email");
                $password = password_hash(filter_input(INPUT_POST, "password"), PASSWORD_DEFAULT);

                try {
                    $dbh = $this->getConnection();
                    $sql = "INSERT INTO `user_login`(`email`, `password`)"
                        . "VALUES (:email, :password)";
                    $sth = $dbh->prepare($sql);
                    $sth->bindValue(":email", $email);
                    $sth->bindValue(":password", $password);
                    $sth->execute();
                    //redirection sur login
                    header("location: login");
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
            $dbh = $this->getConnection();
            $sql ="SELECT `email` FROM `user_login`";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $sth->setFetchMode(\PDO::FETCH_CLASS, UserLogIn::class);
            $users = $sth->fetchAll();

        } catch (\PDOException $e) {

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





