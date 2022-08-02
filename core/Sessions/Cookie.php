<?php 
namespace Synext\Sessions;

class Cookie{

    public static function set_cookie($key,$val){
        setcookie($key, $val, time() + 365*24*3600);
    }

    public static function get_cookie($key = null){
        if($key){
            return $_COOKIE[$key];
        }else{
            return $_COOKIE;
        }
    }

    public static function check_cookie($key = null){
        if(isset($_COOKIE[$key])){
            return true;
        }      
        return false;
    }
        
}