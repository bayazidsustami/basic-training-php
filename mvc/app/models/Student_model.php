<?php

class Student_model{
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        $dataSourceName = "mysql:host=localhost;dbname=learn_mvc_db";

        try{
            $this->dbh = new PDO($dataSourceName, "root", "");
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllStudent(): array
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM student");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}