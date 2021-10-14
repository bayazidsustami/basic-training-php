<?php

class Controller{
    public function view(string $view, array $data = []):void{
        require_once("../app/views/" . $view . ".php");
    }

    public function model($model){
        require_once("../app/models/" . $model .".php");
        
        return new $model;
    }
}