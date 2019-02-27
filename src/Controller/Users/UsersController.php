<?php

namespace PHPInitiation\Controller\Users;

use PHPInitiation\Model\User\User;
use PHPInitiation\Model\User\UserAvatar;
use PHPInitiation\Model\User\UserInfo;
use PHPInitiation\Model\User\UserLogin;
use PHPInitiation\Validator\User\ValidateInfo;
use PHPInitiation\Validator\User\ValidateLogin;


class UsersController
{

    /**
     * Create users
     */
    public function new()
    {

        $error = [];

        if (filter_input(INPUT_POST, "signin")) {

            $validateLogin = new ValidateLogin();
            $validateInfo = new ValidateInfo();
            $error =  $validateLogin->valid() + $validateInfo->valid();

        }

        $title = "Sign In";
        include __DIR__ . "/../../../template/users/users_new.html.php";
        include __DIR__ . "/../../../template/users/form_new.html.php";


    }

    /**
     * Read users
     */
    public function read()
    {
        $avatar = new UserAvatar();
        $login = new UserLogIn();

        $user1 = new User();
        $info1 = new UserInfo();
        $user1->setInfo($info1);
        $info1->setFirstname("jim");

        $info2 = new UserInfo();
        $user2 = new User();
        $user2->setInfo($info2);
        $info2->setFirstname("john");

        $user3 = new User();
        $info3 = new UserInfo();
        $user3->setInfo($info3);
        $info3->setFirstname("carrey");

        $users = [
            $user1,
            $user2,
            $user3
        ];

        $title = "Users";
        include __DIR__ . "/../../../template/users/users.html.php";
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





