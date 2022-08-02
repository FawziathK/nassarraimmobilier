<?php

use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Immo;

$db_Immo = (new Immo);

function pays($pays) {
    $p = '';
    $p .= '<option';
    if($pays == "France"){ $p .= " selected "; }
        $p .= 'value="France">France</option><option';
    if($pays == "Benin"){ $p .= " selected "; }
        $p .= 'value="Benin">Benin</option><option';
    if($pays == "Togo"){ $p .= " selected "; } 
        $p .= 'value="Togo">Togo</option>';
    return $p;
}

function type($type) {
    $p = '';
    $p .= '<option';
    if($type == "home"){ $p .= " selected "; }
        $p .= 'value="home">Maison</option><option';
    if($type == "appart"){ $p .= " selected "; }
        $p .= 'value="appart">Appartement</option>';
    return $p;
}

function rech($variable) {
    $msg = "";
    foreach ($variable as $fetch => $value):
        if ($value->type_log == "appart") { $type_log_b = '<span class="text-info">Appartement</span>';} else { $type_log_b = '<span class="text-danger">Maison</span>'; }
        $descript = nl2br($value->descript);
        $pays = pays($value->pays);
        $type = type($value->type_log);
        $msg .= <<<HTML
            <tr>
                <th style="font-weight: bold; font-family:'Courier New', Courier, monospace;">
                  {$type_log_b}
                </th>
                <td>{$value->ville}</td>
                <td>{$value->prix}</td>
                <td>{$value->titre}</td>
                <td>{$value->pays}</td>
                <td>{$value->quartier}</td>
                <td style="min-width: 15.2rem; text-align:right;"> 
                  <i data-toggle="collapse" data-target="#collapse_info{$value->id_article}" aria-expanded="false" aria-controls="collapse_info{$value->id_article}" class="ml-0 btn btn-default fa fa-info text-info colashow" aria-hidden="true" style="cursor: pointer"></i>
                  
                  <a href="/nadmin/connect_admin/upload/{$value->id_article}/vente"> <i class="btn btn-default fa fa-upload text-success" style="cursor: pointer"></i> </a>

                  <a href="/nadmin/connect_admin/galerie/{$value->id_article}/vente"> <i class="btn btn-default fa fa-image" style="cursor: pointer; color:#884D7A"></i> </a>

                  <i data-toggle="collapse" data-target="#collapse_edit{$value->id_article}" aria-expanded="false" aria-controls="collapse_edit{$value->id_article}" class="btn btn-default fa fa-edit text-primary colashow" aria-hidden="true" style="cursor: pointer"></i>
                
                  <i data-toggle="collapse" data-target="#collapse_trash{$value->id_article}" aria-expanded="false" aria-controls="collapse_trash{$value->id_article}" class="btn btn-default fa fa-trash text-danger colashow" aria-hidden="true" style="cursor: pointer"></i>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <!-- infos -->
                    <div class="collapse" id="collapse_info{$value->id_article}">
                        <div class="card mb-3 border border-info rounded p-3">
                        <p class="text-center h3 text-info">Informations Supplémentaires</p> <br>
                        <div class="row no-gutters"> 
                            <div class="col-md-4">
                            <table class="w-100">
                                <tr>
                                <td>Nombre de Salle de bain:</td>
                                <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$value->nbrSalbain} </span></td>
                                </tr>
                                <tr>
                                <td>Nombre de Chambre:</td>
                                <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$value->nbrrchambre} </span></td>
                                </tr>
                                <tr>
                                <td>Nombre de Cuisine:</td>
                                <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$value->nbr_cuisine} </span></td>
                                </tr>
                                <tr>
                                <td>Nombre de Salon:</td>
                                <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$value->nbr_salon} </span></td>
                                </tr>
                                <tr>
                                <td>Nombre de Piscine:</td>
                                <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$value->piscine} </span></td>
                                </tr>
                                <tr>
                                <td>Nombre de Jardin:</td>
                                <td><span style="font-size: 1.2em;" class="text-justify text-primary"> {$value->jardin} </span></td>
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
                    </div>

                    <!-- trash -->
                    <div class="collapse" id="collapse_trash{$value->id_article}">
                    <div class="card mb-3 border border-danger rounded p-3">
                        <p class="text-center h3 text-danger">Voulez-vraiment éffectuer cette action ?</p> <br>
                        <div class="row text-center">
                        <div class="col-sm-6 mb-3">
                            <button id="non_trash_{$value->id_article}" data-toggle="collapse" data-target="#collapse_trash{$value->id_article}" aria-expanded="false" aria-controls="collapse_trash{$value->id_article}" aria-hidden="true" class="btn btn-success colashow">Non</button>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <button id_article="{$value->id_article}" class="btn btn-danger oui_trash">Oui</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- edit -->
                    <div class="collapse" id="collapse_edit{$value->id_article}">
                        <div class="card mb-3 border border-primary rounded p-3">
                        <p class="text-center h3 text-primary">Formulaire de modification...</p> <br>
                            <form method="post" id="edit_vente_immo">
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                <label class="mb-2" for="ville_{$value->id_article}">Ville</label>
                                <input type="text" class="form-control" id="ville_{$value->id_article}" name="ville" value="{$value->ville}">
                                </div>
                                <div class="col-md-3 mb-3">
                                <label class="mb-2" for="prix_{$value->id_article}">Prix</label>
                                <input type="number" class="form-control" id="prix_{$value->id_article}" name="prix" value="{$value->prix}">
                                </div>
                                <div class="col-md-3 mb-3">
                                <label class="mb-2" for="quartier_{$value->id_article}">Quartier</label>
                                <input type="text" class="form-control" id="quartier_{$value->id_article}" name="quartier" value="{$value->quartier}">
                                </div>
                                <div class="col-md-3 mb-3">
                                <label class="mb-2" for="pays_{$value->id_article}">Pays</label>
                                <select class="custom-select" id="pays_{$value->id_article}" name="pays">
                                    <option value="">Selection d'un pays</option>
                                    {$pays}
                                </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label class="mb-2" for="titre_{$value->id_article}">Titre</label>
                                <input type="text" class="form-control" id="titre_{$value->id_article}" name="titre" value="{$value->titre}">
                                </div>
                                <div class="col-md-6 mb-3">
                                <label class="mb-2" for="type_log_{$value->id_article}">Type</label>
                                <select class="custom-select" id="type_log_{$value->id_article}" name="type_log">
                                    <option value="">Selection un type</option>
                                    {$type}
                                </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2">
                                    <label class="mb-2" for="nbrSalbain_{$value->id_article}">Nombre salle de bain</label>
                                    <input id="nbrSalbain_{$value->id_article}" class="form-control mb-3" type="number" name="nbrSalbain" value="{$value->nbrSalbain}">
                                </div>
                                <div class="col-md-2">
                                    <label class="mb-2" for="nbrrchambre_{$value->id_article}">Nombre de chambre</label>
                                    <input id="nbrrchambre_{$value->id_article}" class="form-control mb-3" type="number" name="nbrrchambre" value="{$value->nbrrchambre}">
                                </div>
                                <div class="col-md-2">
                                    <label class="mb-2" for="nbr_cuisine_{$value->id_article}">Nombre Cuisine</label>
                                    <input id="nbr_cuisine_{$value->id_article}" class="form-control mb-3" type="number" name="nbr_cuisine" value="{$value->nbr_cuisine}">
                                </div>
                                <div class="col-md-2">
                                    <label class="mb-2" for="nbr_salon_{$value->id_article}">Nombre Salon</label>
                                    <input id="nbr_salon_{$value->id_article}" class="form-control mb-3" type="number" name="nbr_salon" value="{$value->nbr_salon}">
                                </div>
                                <div class="col-md-2">
                                    <label class="mb-2" for="jardin_{$value->id_article}">Nombre Jardin</label>
                                    <input id="jardin_{$value->id_article}" class="form-control mb-3" type="number" name="jardin" value="{$value->jardin}">
                                </div>
                                <div class="col-md-2">
                                    <label class="mb-2" for="piscine_{$value->id_article}">Nombre Piscine</label>
                                    <input id="piscine_{$value->id_article}" class="form-control mb-3" type="number" name="piscine" value="{$value->piscine}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-1">
                                    <label class="mb-2" for="descript_{$value->id_article}">Description</label>
                                    <textarea name="descript" id="descript_{$value->id_article}" rows="4" class="form-control mb-3"> {$value->descript} </textarea>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="text-right">
                        <button data-toggle="collapse" data-target="#collapse_edit{$value->id_article}" aria-expanded="false" aria-controls="collapse_edit{$value->id_article}" aria-hidden="true" id_article="{$value->id_article}" class="btn btn-outline-primary font-weight-bold oui_edit colashow">Modifier <i class="fa fa-edit"></i></button>
                        </div>
                    </div>

                  
                </td>
            </tr>
HTML;
    endforeach;
    return $msg;
}

if(Http::methods("POST")){
    
    $data = Json::input();

    if (trim($data['rech']) == "") {
        $data['rech'] = NULL;
    }

    $rech_all = $db_Immo->rech($data['rech'],$data['table']);

    if ($rech_all == true) { 
        $msg = rech($rech_all);
        $val = array(
            "error"=>false,
            "msg"=>$msg,
        );
        echo Json::to($val);
        exit;
    } else {
        $msg = <<<HTML
            <tr>
                <td colspan="7">
                    <div class="card mb-3">
                        <img src="/storages/imgs/img/rech_no.png" class="card-img-top " alt="..." style="height:600px">
                    </div>
                </td>
            </tr>
HTML;
        $val = array(
            "error"=>true,
            "msg"=> $msg,
        );
        echo Json::to($val);
        exit;
    }
}