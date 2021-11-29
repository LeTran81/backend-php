<?php

use system\baseController;
use models\user;

class auth extends baseController{
    
    public function loginForm(){
        $this->response('loginForm');
    }
    public function processLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->loadModel('user');
        if($user->login($username,$password)){
            $this->redirect('http://localhost:8080/index.php?controller=account&method=show');
        }
        
    }

    public function logout(){
        $user = $this->loadModel('user');
        $user->logout();
        $this->redirect('http://localhost:8080/index.php?controller=auth&method=loginForm');
    }
}

//1h27 25/6