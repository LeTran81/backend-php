<?php
namespace system;

class session {
    public function __construct()
    {
        if( session_status() === PHP_SESSION_NONE){
            session_start();
        }
    }
    public function set($name,$value){
        $_SESSION[$name]=$value;
    }
    public function has($name)
        {
            return (isset($_SESSION[$name]));
        }
    public function remove($name)
    {
        if($this->has($name)){
            unset($_SESSION[$name]);
        }
    }
    public function get($name)
    {
        if($this->has($name)){
            return ($_SESSION[$name]);
        }
        return null;
    }
}

//15p 15/6