<?php

class Router {

    public $handled = false;

    function __construct()
    {
        
    }

    public function get($route,$view){
       
        if($_SERVER['REQUEST_METHOD'] !== 'GET'){
            return false;
        }

        $uri = $_SERVER['REQUEST_URI'];
        $route = "/uj-accommodation-api" . $route;
    

        if($uri === $route){
            $this->handled = true;
          return include_once($view);  
        }
    }

    public function post($route,$view){
       
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            return false;
        }

        $uri = $_SERVER['REQUEST_URI'];
        $route = "/uj-accommodation-api" . $route;
        if($uri === $route){
            $this->handled = true;
          return include_once($view);  
        }
    }

    function __destruct(){
        if(!$this->handled){
            return include_once('404.php');
        }
    }

}

?>