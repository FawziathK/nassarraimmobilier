<?php

use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Immo;

$db_Immo = (new Immo);

function getToken(){
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijkmnlopqrstuvwxyz";

    $time=time();
    $nbrtime=strlen($time);
    $length = 20-$nbrtime;
    $token = "";
    
    $max = strlen($codeAlphabet); // edited
   for ($i=0; $i < $length; $i++) {
       $token .= $codeAlphabet[random_int(0, $max-1)];
   }
$token=$time.''.$token;
   return $token;
}

if(Http::methods("POST")){
    
    $data = Json::input();
    $id_article=getToken();
    $data_add_1 = [
        'ville' => $data['ville'],
        'prix' => $data['prix'],
        'titre' => $data['titre'],
        'pays' => $data['pays'],
        'quartier' => $data['quartier'],
        'descript' => $data['descript'],
        'nbrSalbain' => $data['nbrSalbain'],
        'nbrrchambre' => $data['nbrrchambre'],
        'nbr_cuisine' => $data['nbr_cuisine'],
        'nbr_salon' => $data['nbr_salon'],
        'type_art' => $data['type_art'],
        'id_article' => $id_article
    ];
    $data_add_2 = [
        'piscine' => $data['piscine'],
        'jardin' => $data['jardin'],
        'type_log' => $data['type_log'],
        'id_article' => $id_article
    ];

    $insert_1='INSERT INTO articles(id_article,ville,prix,titre,pays,quartier,descript,nbrSalbain,nbrrchambre,nbr_cuisine,nbr_salon,type_art) VALUES (:id_article,:ville,:prix,:titre,:pays,:quartier,:descript,:nbrSalbain,:nbrrchambre,:nbr_cuisine,:nbr_salon,:type_art)'; 
    $resp_1 = $db_Immo->add($insert_1,$data_add_1);

    $insert_2='INSERT INTO  maison_louer(piscine,jardin,id_article,type_log) VALUES(:piscine,:jardin,:id_article,:type_log)'; 
    $resp_2 = $db_Immo->add($insert_2,$data_add_2);

    if ($resp_1 == true AND $resp_2 == true) {
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

    $resp_1 = $db_Immo->del_immo("articles",$data['id_article']);
    $resp_2 = $db_Immo->del_immo("maison_louer",$data['id_article']);
    $resp_3 = $db_Immo->del_immo("reservation",$data['id_article']);
    $resp_4 = $db_Immo->imgs($data['id_article']);
    foreach ($resp_4 as $key => $value):
        $fichier = dirname(__DIR__,2).'/public_html/storages/immos/'.$value->photo;
        if(file_exists($fichier))
        {
            unlink($fichier) ; 
        }
    endforeach;
    $resp_5 = $db_Immo->del_immo("photo_article",$data['id_article']);

    if ($resp_1 == true AND $resp_2 == true AND $resp_3 == true AND $resp_5 == true) {
        $val = array(
            "error"=>false,
            "msg"=>"Supprimer avec succès",
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Erreur lors de la supression",
        );
        echo Json::to($val);
        exit;
    }
} else if(Http::methods("PATCH")){
    
    $data = Json::input();
    $data_add_1 = [
        'ville' => $data['ville'],
        'prix' => $data['prix'],
        'titre' => $data['titre'],
        'pays' => $data['pays'],
        'quartier' => $data['quartier'],
        'descript' => $data['descript'],
        'nbrSalbain' => $data['nbrSalbain'],
        'nbrrchambre' => $data['nbrrchambre'],
        'nbr_cuisine' => $data['nbr_cuisine'],
        'nbr_salon' => $data['nbr_salon'],
        'id_article' => $data['id_article']
    ];
    $data_add_2 = [
        'piscine' => $data['piscine'],
        'jardin' => $data['jardin'],
        'type_log' => $data['type_log'],
        'id_article' => $data['id_article']
    ];

    $updt_1='UPDATE articles SET ville = :ville, prix = :prix, titre = :titre, pays = :pays, quartier = :quartier, descript = :descript, nbrSalbain = :nbrSalbain, nbrrchambre = :nbrrchambre, nbr_cuisine = :nbr_cuisine, nbr_salon = :nbr_salon WHERE id_article = :id_article'; 
    $resp_1 = $db_Immo->updt($updt_1,$data_add_1);

    $updt_2='UPDATE maison_louer SET piscine = :piscine, jardin = :jardin, type_log = :type_log WHERE id_article = :id_article'; 
    $resp_2 = $db_Immo->updt($updt_2,$data_add_2);

    if ($resp_1 == true AND $resp_2 == true) {

        $descript = nl2br($data['descript']);
        if ( $data['type_log'] == "appart") { $type_log = '<span class="text-info">Appartement</span>';} else { $type_log = '<span class="text-danger">Maison</span>'; }
        $tr = <<<HTML
            <th style="font-weight: bold; font-family:'Courier New', Courier, monospace;">
                {$type_log}
            </th>
            <td> {$data['ville']} </td>
            <td> {$data['prix']} </td>
            <td> {$data['titre']} </td>
            <td> {$data['pays']} </td>
            <td> {$data['quartier']} </td>
            <td style="min-width: 15.2rem; text-align:right;"> 
                <i data-toggle="collapse" data-target="#collapse_info{$data['id_article']}" aria-expanded="false" aria-controls="collapse_info{$data['id_article']}" class="btn btn-default fa fa-info text-info colashow" aria-hidden="true" style="cursor: pointer"></i>
                
                <i data-toggle="collapse" data-target="#collapse_info{$data['id_article']}" aria-expanded="false" aria-controls="collapse_info{$data['id_article']}" class="btn btn-default fa fa-upload text-success colashow" aria-hidden="true" style="cursor: pointer"></i>

                <i data-toggle="collapse" data-target="#collapse_info{$data['id_article']}" aria-expanded="false" aria-controls="collapse_info{$data['id_article']}" class="btn btn-default fa fa-image colashow" aria-hidden="true" style="cursor: pointer; color:#884D7A"></i>

                <i data-toggle="collapse" data-target="#collapse_edit{$data['id_article']}" aria-expanded="false" aria-controls="collapse_edit{$data['id_article']}" class="btn btn-default fa fa-edit text-primary colashow" aria-hidden="true" style="cursor: pointer"></i>
            
                <i data-toggle="collapse" data-target="#collapse_trash{$data['id_article']}" aria-expanded="false" aria-controls="collapse_trash{$data['id_article']}" class="btn btn-default fa fa-trash text-danger colashow" aria-hidden="true" style="cursor: pointer"></i>
            </td>
        HTML;

        $infos = <<<HTML
            <div class="card mb-3 border border-info rounded p-3">
                <p class="text-center h3 text-info">Informations Supplémentaires</p> <br>
                <div class="row no-gutters"> 
                <div class="col-md-4">
                    <table class="w-100">
                    <tr>
                        <td>Nombre de Salle de bain:</td>
                        <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$data['nbrSalbain']} </span></td>
                    </tr>
                    <tr>
                        <td>Nombre de Chambre:</td>
                        <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$data['nbrrchambre']} </span></td>
                    </tr>
                    <tr>
                        <td>Nombre de Cuisine:</td>
                        <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$data['nbr_cuisine']} </span></td>
                    </tr>
                    <tr>
                        <td>Nombre de Salon:</td>
                        <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$data['nbr_salon']} </span></td>
                    </tr>
                    <tr>
                        <td>Nombre de Piscine:</td>
                        <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$data['piscine']} </span></td>
                    </tr>
                    <tr>
                        <td>Nombre de Jardin:</td>
                        <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$data['jardin']} </span></td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Description:</h5>
                    <p class="card-text">
                        {$descript}
                    </p>
                    </div>
                </div>
                </div>
            </div>
HTML;

        $val = array(
            "error"=>false,
            "msg"=>"Modifier avec succès",
            "tr"=>$tr,
            "infos"=>$infos,
        );
        echo Json::to($val);
        exit;
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Erreur lors de la modification",
        );
        echo Json::to($val);
        exit;
    }
}