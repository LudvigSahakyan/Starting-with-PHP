<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 04/03/2019
 * Time: 11:55
 */

namespace PHPInitiation\Repository\User;

use PHPInitiation\Connection\Connection;
use PHPInitiation\Model\User\UserLogIn;


class UserLoginRepository
{

    public function persist($email, $password)
    {

        $dbh = Connection::getConnection();
        $sql = "INSERT INTO `user_login`(`email`, `password`)"
            . "VALUES (:email, :password)";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(":email", $email);
        $sth->bindValue(":password", $password);
        $sth->execute();

    }

    public function findAll(): array
    {
        $dbh = Connection::getConnection();
        $sql = "SELECT `email` FROM `user_login`";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $sth->setFetchMode(\PDO::FETCH_CLASS, UserLogIn::class);
        $users = $sth->fetchAll();
        return $users;

    }

    public function findByEmail ($email): array
    {
        $dbh = Connection::getConnection();
        $sql = "SELECT `id`,`password` FROM `user_login`" .
            " WHERE `email` = :email";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(":email", $email);
        $sth->execute();
        $users = $sth->fetchAll(\PDO::FETCH_CLASS, UserLogin::class);
        return $users;
    }


}

