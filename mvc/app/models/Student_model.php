<?php

class Student_model{

    private string $tableName = "student";
    private Database $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllStudent(): array
    {
        $this->db->query("SELECT * FROM " . $this->tableName);
        return $this->db->resultSet();
    }

    public function getStudentById(int $id)
    {
        $this->db->query("SELECT * FROM " . $this->tableName . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function addNewStudent($data): int
    {
        $query = "INSERT INTO $this->tableName 
                    VALUES 
                ('', :name, :nrp, :email, :jurusan)";

        $this->db->query($query);

        $this->db->bind("name", $data["name"]);
        $this->db->bind("nrp", $data["nrp"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("jurusan", $data["jurusan"]);

        $this->db->execute();

        return $this->db->rowCount();
    }
}