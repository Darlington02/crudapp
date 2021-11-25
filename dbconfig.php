<?php

class Dbconfig{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "08163584317";
    private $dbname = "nps";

    protected function connect(){
        $dns = "mysql:host=$this->host; dbname=$this->dbname";
        $pdo = new PDO($dns, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}