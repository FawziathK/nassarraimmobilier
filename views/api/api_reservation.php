<?php 

use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Utilisateurs;
use Synext\APP\Immo;

$db_Utilisateurs = (new Utilisateurs); 
$db_Immo = (new Immo); 

if(Http::methods("POST")){
    $data= Json::input();
   $get_user = $db_Utilisateurs->get($data['mail_user']);
    //dd($get_user);exit();
    if($get_user == true) {
        $id_users = $get_user->id_users; 
    } else { 
        $data_user = [ 
            'mail' => $data['mail_user'],
            'tel' => $data['tel_user'], 
            'nom' => $data['nom_user'], 
        ]; 
        $add_user='INSERT INTO users(mail,tel,nom) VALUES (:mail,:tel,:nom)'; 
        $resp_user = $db_Immo->add($add_user,$data_user);

        $get_user = $db_Utilisateurs->get($data['mail_user']);
        if($get_user == true) {
            $id_users = $get_user->id_users; 
        } else {
            $val = array(
                "error"=>true,
                "msg"=>"toto",
            );
            echo Json::to($val);
            exit;
        }
    }
       
    

    $data_reservation = [
        'date_reservation' => strtotime($data['aaaa'].'-'.$data['mm'].'-'.$data['jj'].' '.$data['hh'].':'.$data['min'].':00'),
        'id_users' => $id_users, 
        'id_article' => $data['id_article'], 
    ];
    $add_reser='INSERT INTO reservation(date_reservation,id_users,id_article) VALUES (:date_reservation,:id_users,:id_article)'; 
    $resp_reser = $db_Immo->add($add_reser,$data_reservation);

    if($resp_reser == true) {
        $val = array(
            "error"=>false,
            "msg"=>"Visite Effectuer",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"toto",
        );
        echo Json::to($val);
        exit;
    }
}