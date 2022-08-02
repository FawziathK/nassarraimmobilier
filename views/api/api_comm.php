<?php

use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Commentaires;

$db_Commentaires = (new Commentaires);

if(Http::methods("PATCH")){
    
    $data = Json::input();

    $insert="UPDATE commentaire SET statut = :statut WHERE id_commentaire = :id_commentaire"; 
    $updt_pass = $db_Commentaires->updt($insert,$data); 
    if ($updt_pass == true) { 
        $val = array(
            "error"=>false,
            "msg"=>"Commentaire valider avec succès",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Ereur lors de la validation",
        );
        echo Json::to($val);
        exit;
    }
} else if(Http::methods("DELETE")){
    
    $data = Json::input();

    $insert="DELETE FROM commentaire WHERE id_commentaire = :id_commentaire"; 
    $updt_pass = $db_Commentaires->updt($insert,$data); 
    if ($updt_pass == true) { 
        $val = array(
            "error"=>false,
            "msg"=>"Commentaire supprimer avec succès",
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
}