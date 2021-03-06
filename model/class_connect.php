<?php

namespace Models;
use PDO;
use PDOException;

abstract class Conexao
{

    protected function connectDB()
    {
        try {
            $con = new PDO("mysql:host=localhost;dbname=list", "root", "");
            return $con;
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }
    }
}
