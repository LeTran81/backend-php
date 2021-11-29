<?php
namespace system;

class baseController{
    public $session = null;
    public $input = null;
    public function __construct()
    {
        $this->session = new session;
        $this->input = new input;
    }

    public function response($view,$data=[]){
        extract($data);
        require ("views/$view.php");
    }

    public function loadModel($modelName){
        require "models/$modelName.php";
        $model = new $modelName;
        return $model;
    }
    public function redirect($url){
        header("location: $url");
    }
}