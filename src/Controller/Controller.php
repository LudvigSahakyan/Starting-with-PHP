<?php


namespace PHPInitiation\Controller;


class Controller
{

    protected function render (string $filename, array $data = [])
    {
        extract($data);

        include __DIR__ . "/../../template/" . $filename;



    }

    protected function getConnection()
    {

        $dbh = new \PDO(
            "mysql:host=localhost;dbname=formation_php;charset=utf8",
            "root",
            "",
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
        );
        return $dbh;
    }



}