<?php

class Student extends Controller {
    public function index(){

        $data["title"] = "Student Data";
        $data["student"] = $this->model("Student_model")->getAllStudent();

        $this->view("templates/header", $data);
        $this->view("student/index", $data);
        $this->view("templates/footer");
    }
}