<?php

class Session{
    
    function set($name,$value){
        $_SESSION[$name]=$value;
    }
    
    function get($name){
        return $_SESSION[$name];
    }
    
    function destroy(){
        session_destroy();
    }
}

