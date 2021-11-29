<?php
namespace system;
use system\input;

class website {
    protected $input = null;

    public function __construct()
    {
        $this->input =new input;
    }
    
    public function start(){
        $controllerName = $this->input->get('controller');
        $method = $this->input->get('method');

        if(!file_exists("controllers/$controllerName.php")){
            echo 'Trang khong ton tai';
            return;
        }

        require "controllers/$controllerName.php";

        $controller = new $controllerName;

        if(!method_exists($controller, $method)){
            echo 'Trang khong ton tai';
            return;
        }
        
        call_user_func([$controller, $method]);
    }

    public function login(){
        echo 'Day la ham login';
    }
    public function register(){
        echo 'Day la ham register';
    }
}

