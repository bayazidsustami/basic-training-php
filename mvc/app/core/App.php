<?php

class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct(){
        $url = $this->parseUrl();

        //$urlController = isset($url[0]) ? count($url[0]) : 0;

        //check if controller has set
        if(isset($url[0])){
            //controller check
            if(file_exists("../app/controllers/" . $url[0] . ".php")){
                $this->controller = $url[0]; //set controller by url in index 0
                unset($url[0]); // remove controller from array
            }
    
            require_once("../app/controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller; //instantiate controller
    
            //method check
            if(isset($url[1])){
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1]; //init method from controller
                    unset($url[1]);
                }
            }
    
            //params
            if(!empty($url)){
                $this->params = array_values($url);
            }
    
            //run controller and method
            call_user_func_array(
                callback: [$this->controller, $this->method], //named argument
                args: $this->params,
            );
        }else{
            //run default
            require_once("../app/controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller; //instantiate controller
            call_user_func_array(
                callback: [$this->controller, $this->method],
                args: $this->params,
            );
        }

    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], "/"); //delete last slash
            $url = filter_var($url, FILTER_SANITIZE_URL); //filter url
            $url = explode("/", $url); // split url by "/" delimeter
            return $url;
        }
    }
}