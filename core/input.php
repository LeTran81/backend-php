<?php

namespace system;

class input {
    public function get($name)
    {
        if(isset($_GET[$name])){
            return $_GET[$name];
        }
        return null;
    }
    public function post($name)
    {
        if(isset($_POST[$name])){
            return $_POST[$name];
        }
        return null;
    }
}