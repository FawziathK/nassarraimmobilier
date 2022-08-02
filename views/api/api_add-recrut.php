<?php

use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Recrutement;

$db_Recrutement = (new Recrutement);

if(Http::methods("POST")){
    
    $data = Json::input();
    $data_add = [
        'titre' => $data['titre'],
        'text' => $data['text'],
    ];

    $insert='INSERT INTO recrutement(titre,text) VALUES (:titre,:text)';
    $resp = $db_Recrutement->add($insert,$data_add);

    if ($resp == true) {
        $val = array(
            "error"=>false,
            "msg"=>"Ajouté avec succès",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Ereur lors de l'ajout",
        );
        echo Json::to($val);
        exit;
    }
} else if(Http::methods("DELETE")){
    
    $data = Json::input();

    $insert='INSERT INTO recrutement(titre,text) VALUES (:titre,:text)';
    $resp = $db_Recrutement->del($data['id']);

    if ($resp == true) {
        $val = array(
            "error"=>false,
            "msg"=>"Supprimer avec succès",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Ereur lors de la suppression",
        );
        echo Json::to($val);
        exit;
    }
} else if(Http::methods("PATCH")){ 
    
    $data = Json::input();

    $updt='UPDATE recrutement SET titre = :titre ,text = :text WHERE id = :id';
    $resp = $db_Recrutement->updt($updt,$data);

    if ($resp == true) {
        $val = array(
            "error"=>false,
            "msg"=>"Modifier avec succès",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Ereur lors de la modification",
        );
        echo Json::to($val);
        exit;
    }
} 