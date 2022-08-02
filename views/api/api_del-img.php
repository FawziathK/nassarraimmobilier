<?php

use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Immo;

$db_Immo = (new Immo);

if(Http::methods("DELETE")){
    
    $data = Json::input();

    $imgss = $db_Immo->imgss($data['id_photo_article']);
    $fichier = dirname(__DIR__,2).'/public_html/storages/immos/'.$imgss->photo;
        if(file_exists($fichier))
        {
            unlink($fichier) ; 
        }
    $del = $db_Immo->del($data['id_photo_article']);

    if ($del == true) { 
        $val = array(
            "error"=>false,
            "msg"=>"Image supprimer !",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=> "Erreur lors de la suppression ...",
        );
        echo Json::to($val);
        exit;
    }
}