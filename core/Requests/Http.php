<?php 
namespace Synext\Requests;

class Http{
    public static function  methods(string $request_method): bool{
        if($_SERVER['REQUEST_METHOD'] === $request_method){
            return true;
        }
        return false;
    }
    
    public static function status(int $status_code=200){
        return http_response_code($status_code);
    }

    public static function validate(array $keys,array $data){

        if(count($keys) != count($data)){
            return true;
        }
        $is_set = function($key) use ($data,$keys) {
            return array_key_exists($key,$data) && !empty($data[$key]);
        };
        return in_array(false,array_map($is_set,$keys));
    }
}