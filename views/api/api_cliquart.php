<?php


use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Client;

$data_client=(new Client);
if(Http::methods("POST")){
    $data= Json::input();
    $ville=$data["ville"];
       
    $r = "";
    foreach ($data_client->onchangeq($ville) as $key) {
       $r .= '
        <option value="'.$key->quartier.'"style="font-family: Roboto;">'.$key->quartier.'</option>
        ';
    }
   
     $val = array(
         "error"=>false,
         "msg"=>$r,
     );
     echo Json::to($val);
    exit;
    
}