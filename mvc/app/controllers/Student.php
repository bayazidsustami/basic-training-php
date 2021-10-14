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
}