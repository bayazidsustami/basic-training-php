<?php

class About extends Controller{

    //ensure controller have default method index
    public function index(string $name = "bay", string $job = "programmer"):void
    {
        $data["name"] = $name;
        $data["job"] = $job;
        $data["title"] = "About";
        $this->view("templates/header", $data);
        $this->view(view :"about/index", data : $data);
        $this->view("templates/footer");
    }

    public function page(): void
    {
        $data["title"] = "Pages";
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}