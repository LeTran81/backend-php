<?php
use system\session;

class user{
    protected $session = null;

    public function __construct()
    {
        $this->session = new session;
    }
    public function login($username,$password){
        if($username=='nguyen'&&$password=='123'){
            $this->session->set('logged',true);
            return true;
        }
        return false;
    }
    public function logout(){
        $this->session->remove('logged');
    }
    public function loggedIn(){
        return $this->session->has('logged');
    }

}