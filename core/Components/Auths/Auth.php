<?php
namespace Synext\Components\Auths;

use Exception;
use Synext\Requests\Json;
use Synext\Routers\Router;
use Synext\Components\Databases\Database;
use Synext\Requests\Redirect;
use Synext\Sessions\Session;

class Auth
{
    private $db;


    public function __construct(DataBase  $db = null)
    {
       if(is_null($db)){
           $this->db = new Database();
       }else{$this->db = $db;}
        
    }
        /**
     * Function using to generate random Token for account activation .
     *
     *
     * @param int $length
     *
     * @return string token
     */
    public  function token(int $length): string
    {
        $keys = '0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';

        return substr(str_shuffle(str_repeat($keys, $length)), 0, $length);
    }
    
    public function is_login(Router $router){
        if(!Session::checkSessionVariable('Auth')){
            return Redirect::to($router->url('Admin#Login'));
        }
        return true;
    }

    public function is_already_login(Router $router){
        if(Session::checkSessionVariable('Auth')){
            $rolelevel = 4;
            switch($rolelevel){
                case 4:
                    return Redirect::to($router->url('Admin#Home'));
                break;
                default:
                    return false;
                break;
            }
        }
        return Redirect::to($router->url('Login#Home'));
    }

    /**
     * ROLES admin

     *
     * @param Router $router
     * @param array $roles
     * @return bool
     */

    public function allow($router,array $roles)
    {
        if($this->is_login($router)){
            $role = "admin";
            return in_array($role,$roles);         
        }
    }
    public function register()
    {
        //redirect if is alredy login
        $username = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);
        $passwd = htmlentities($_POST['password']);
        $terms_c = htmlentities($_POST['terms-conditions']);
        if (empty($passwd && $terms_c && $username)) {
            return Json::to([
                'error' => true,
                'message'=> 'Fill in the fields !'
            ]);
        }
        if(strlen($username) < 8 ){
            return Json::to([
                'error' => true,
                'message'=>'Invalid username'
            ]);
        }
        if (!in_array(explode('@', $email)[1], ['gmail.com','yahoo.com','hotmail.com','protonmail.com'])) {
            return Json::to([
                'error' => true,
                'message'=>'Use valide email !'
            ]);
        }

        $passwd = password_hash($passwd,PASSWORD_BCRYPT) ;
        $query = 'SELECT * FROM users WHERE mail = ?';
        $check_user = $this->db->select($query,false,[$email]);
        if(!is_bool($check_user)){
            return Json::to([
                'error' => true,
                'message'=>'User already exist !'
            ]);
        }else{
            $newuser = $this->db->insert('INSERT INTO `users` (`username`, `email`,`password`) VALUES (?, ?,?)', [ $username,$email, $passwd ]);
            if($newuser){
                return Json::to([
                    'error' => false,
                    'account'=>true,
                    'message'=>'Account created You can now login !',
                ]);
            }else{
                return Json::to([
                    'error' => true,
                    'message'=>"Check your registration information"
                ]);
            }
        }

    }

    private function loginData(Router $router,$user,string $ui){
        Session::push(['Auth'=>(int)$user->id]);
        return Redirect::to($router->url("Admin#Home"));
    }

    public function login(Router $router,$email,$passwd)
    {

        if (empty($email && $passwd)) {
            return [
                "error" => true,
                'message'=> 'Fill in the fields !'
            ];
        }
        $query = 'SELECT * FROM users WHERE mail = ?';
        $user = $this->db->select($query,false,[$email]);
        if(is_bool($user)){
            return [
                'error' => true,
                'message'=>'Your account cannot be found !'
            ];
        }
        
        if(!password_verify($passwd,$user->pass)){
            return [
                "error" => true,
                "message"=>"incorrect password"
            ];
        }
        return $this->loginData($router,$user,'Admin#Home');
        
    }
}