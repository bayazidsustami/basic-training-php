<?php

class Student extends Controller {
    public function index()
    {

        $data["title"] = "Student Data";
        $data["student"] = $this->model("Student_model")->getAllStudent();

        $this->view("templates/header", $data);
        $this->view("student/index", $data);
        $this->view("templates/footer");
    }

    public function detail(int $id)
    {

        $data["title"] = "Detail Student";
        $data["student"] = $this->model("Student_model")->getStudentById($id);

        $this->view("templates/header", $data);
        $this->view("student/detail", $data);
        $this->view("templates/footer");
    }

    public function add()
    {
        if($this->model("Student_model")->addNewStudent($_POST) > 0){
            Flasher::setFlash(
                message: "Success",
                action: "Added",
                type: "success",
            );
            
            header("Location: " . BASE_URL . "/student");
            exit;
        }else{
            Flasher::setFlash(
                message: "Failed added",
                action: "Added",
                type: "danger",
            );
            header("Location: " . BASE_URL . "/student");
            exit;
        }
    }

    public function delete(int $id)
    {
        if($this->model("Student_model")->deleteById($id) > 0){
            Flasher::setFlash(
                message: "Success",
                action: "Deleted",
                type: "success",
            );
            
            header("Location: " . BASE_URL . "/student");
            exit;
        }else{
            Flasher::setFlash(
                message: "Failed deleted",
                action: "Deleted",
                type: "danger",
            );
            header("Location: " . BASE_URL . "/student");
            exit;
        }
    }

    public function getData(){
        echo json_encode($this->model("Student_model")->getStudentById($_POST["id"]));
    }

    public function update(){
        if($this->model("Student_model")->updateStudent($_POST) > 0){
            Flasher::setFlash(
                message: "Success",
                action: "Updated",
                type: "success",
            );
            
            header("Location: " . BASE_URL . "/student");
            exit;
        }else{
            Flasher::setFlash(
                message: "Failed updated",
                action: "Updated",
                type: "danger",
            );
            header("Location: " . BASE_URL . "/student");
            exit;
        }
    }

    public function search()
    { 
        $data["title"] = "Student Data";
        $data["student"] = $this->model("Student_model")->searchStudent();

        $this->view("templates/header", $data);
        $this->view("student/index", $data);
        $this->view("templates/footer");
    }
}