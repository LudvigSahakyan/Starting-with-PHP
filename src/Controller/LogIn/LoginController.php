<?php


namespace PHPInitiation\Controller\LogIn;


use PHPInitiation\Controller\Controller;
use PHPInitiation\Validator\User\ValidateLogin;
use PHPInitiation\Repository\User\UserLoginRepository;


class LoginController extends Controller
{

    /**
     * Log users
     */
    public function login()
    {
        $error = [];

        if ($this->session("user")) {
            header("location: home" );
            exit;
        }

        if (filter_input(INPUT_POST, "login")) {
            $validateLogin = new ValidateLogin();
            $error = $validateLogin->valid();
            if (!$error) {
                $email = filter_input(INPUT_POST, "email");
                $password = filter_input(INPUT_POST, "password");
                try {
                    $repository = new UserLoginRepository();
                    $users = $repository->findByEmail($email);
                    if ($users && password_verify($password, $users[0]->getPassword())) {
                        $this->session("user", ["id" => $users[0]->getId()]);
                        header("Location: users" );
                        exit;
                    }
                    $error["pdo"] = "User not found!";
                } catch (\PDOException $e) {
                    $error["pdo"] = "It seems we have technical problems, please try later" . $e->getMessage();
                }
            }
        }


        $this->render("login/login.html.php", [
            "title" => "Log In",
            "error" => $error
        ]);
    }

    public function logOut ()
    {


        $this->session(false);
        header("Location: login");
        exit;


    }







}