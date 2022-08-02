<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Client;
use Synext\Helpers\Helpers;
use Synext\APP\Immo;

$db_immo = new Immo;

$db_Immo = new Client;
//dd(str_replace("_", " ", $params['ville']));
$searlob = $db_Immo->onSearch($params['typebien'], $params['pays'], str_replace("_", " ", $params['ville']), str_replace("_", " ", $params['quart']));

$title = "Description | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>


<div class="container"><br>
    <a href="/"> <button class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Retour </button> </a>
    <div class="row">
        <p>

            <?php

            if ($searlob != 3) {

                foreach ($searlob as $lob) :
                    $img = $db_immo->img_by_artcl($lob->id_article);
                    // dd( $img); exit();
                    $descp = Helpers::getExtrait($lob->descript, 90);
                    // $img = $lob->id_article;
                    if ($img == false) {
                        $photo = "ototo.jpg";
                    } else {
                        $photo = $img->photo;
                    }
                    if ($lob->type_log == "appart") {
                        $type =  '<p class="text-info mb-1">Achat Appartement</p>';
                    } else {
                        $type =  '<p class="text-danger mb-1">Achat Maison</p>';
                    }
                    echo <<<HTML
             <div class="col-sm-6 col-md-4 mb-5">
            <div class="card" id="olo">
                        <img class="card-img" style="height: 250px; object-fit: cover;" src="/storages/immos/{$photo}" alt="">
                        <div class="card-body" >
                            <h5 class="card-title ifo"> 
                                {$type} <br>
                                Pays : {$lob->pays} <br>
                                Ville :  {$lob->ville}<br> 
                                Prix : {$lob->prix} Fcfa
                            </h5>
HTML;
                    if ($params['typebien'] == 'vente') {
                        echo '
                                <p class="card-text text-justify" > 
                                
                                <small class="text-muted nom" ></small> 
                                <span class="text-info font-weight-bolder single pls" style="text-decoration:none;cursor:pointer" title="Details sur article" typer="vente" tag="' . $lob->id_article . '"> plus </span> 
                            </p>';
                    } else {
                        echo '
                                <p class="card-text text-justify" > 
                                
                                <small class="text-muted nom" >  </small> 
                                <span class="text-info font-weight-bolder single pls" style="text-decoration:none;cursor:pointer" title="Details sur article" typer="louer" tag="' . $lob->id_article . '"> plus </span> 
                            </p>';
                    }
                    echo <<<HTML
                            <button titre="{$lob->titre}" class="w-100 reser btn btn-outline-primary reserva" data-bs-toggle="modal" data-bs-target="#modal_reservation" tag="{$lob->id_article}">
                                <i class="fa fa-ticket" aria-hidden="true"></i> Visiter
                            </button>
                        </div>
                        </div>
                    </div>
HTML;
                endforeach;
            } else {
                echo <<<HTML
             <div class="alert alert-danger">
    <h5 class="text-center">Votre bien rechercher est indisponible pour le moment...</h5>
   </div>
HTML;
            }
            ?>
        </p>
    </div>
</div><br><br><br><br><br><br>