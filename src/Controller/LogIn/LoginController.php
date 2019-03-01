<?php


namespace PHPInitiation\Controller\LogIn;


use PHPInitiation\Controller\Controller;
use PHPInitiation\Validator\User\ValidateLogin;
use PHPInitiation\Model\User\UserLogin;


class LoginController extends Controller
{


    /**
     * Log users
     */
    public function login()
    {
        $error = [];

        if (filter_input(INPUT_POST, "login")) {

            $validateLogin = new ValidateLogin();
            $error = $validateLogin->valid();

            if (!$error) {

                try {

                    $email = filter_input(INPUT_POST, "email");
                    $password = filter_input(INPUT_POST, "password");

                    $dbh = $this->getConnection();

                    $sql = "SELECT `id`,`password` FROM `user_login`" .
                        " WHERE `email` = :email";
                    $sth = $dbh->prepare($sql);
                    $sth->bindValue(":email", $email);
                    $sth->execute();
                    $users = $sth->fetchAll(\PDO::FETCH_CLASS, UserLogin::class);

                    if ($users && password_verify($password, $users[0]->getPassword())) {
                        header("location: home");
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
}