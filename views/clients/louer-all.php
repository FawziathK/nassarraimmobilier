<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Immo;
use Synext\Helpers\Helpers;

$db_immo = new Immo;
$louers = $db_immo->locas();

$title = "Louer | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>

<style>
p {
    font-size: 20px;
    text-align: justify;
}

/* p {
    font-size: 18px;
    text-align: justify;
} */

/* .clo {

    position: relative;
    animation-name: example;
    animation-duration: 10s;
    animation-iteration-count: 1;
    animation-direction: alternate;
} */

/* @keyframes example {
    0% {
        left: 0px;
        top: 0px;

    } */

.clo {

    position: relative;
    animation-name: example;
    animation-duration: 10s;
    animation-iteration-count: 1;
    animation-direction: alternate;
}

@keyframes example {
    0% {
        left: 0px;
        top: 0px;
    }

    25% {
        left: 500px;
        top: 0px;
    }

    100% {
        left: 0px;
        top: 0px;
    }
}
</style>








<div class="container" style="margin-top: 20px;">

    <a href="/louer"> <button class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Retour </button> </a>

    <br><br>
    <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
    <br>
    <p class="text-primary fst-italic fw-bold text-center">Toutes Nos Offres à Louer </p>

    <div style="height: 1px; width : 90%;" class="container bg-primary "></div><br><br>
    <div class="row">
        <p>



            <?php foreach ($louers as $louer) :
                $img = $db_immo->img_by_artcl($louer->id_article);
                $descp = Helpers::getExtrait($louer->descript, 90);
                if ($img == false) {
                    $photo = "ototo.jpg";
                } else {
                    $photo = $img->photo;
                }

                if ($louer->type_log == "appart") {
                    $type =  '<p class="text-info mb-1">Location d\'Appartement</p>';
                } else {
                    $type =  '<p class="text-danger mb-1">Location de Maison</p>';
                }
                echo <<<HTML
            <div class="col-sm-6 col-md-4 mb-5">
            <div class="card" id="olo">
                <img class="card-img" style="height: 250px; object-fit: cover;" src="/storages/immos/{$photo}" alt="">
                <div class="card-body" >
                    {$type}
                    <h5 class="card-title ifo"> 
                        {$louer->titre} <br>
                        Pays : {$louer->pays} <br>
                        Ville : {$louer->ville} <br> 
                        Prix : {$louer->prix} Fcfa
                    </h5>
                    <p class="card-text text-justify" > 
                                <small class="text-muted nom" >  </small> 
                                <span class="text-info font-weight-bolder single pls" style="text-decoration:none;cursor:pointer" title="Details sur article" tag="{$louer->id_article}" typer="louer"> plus </span> 
                            </p>
                    <button titre="{$louer->titre}" class="w-100 reser btn btn-outline-success reserva" data-bs-toggle="modal" data-bs-target="#modal_reservation" tag="{$louer->id_article}">
                        <i class="fa fa-ticket" aria-hidden="true"></i> Visiter
                    </button>
                </div>
                </div>
            </div>
HTML;
            endforeach; ?>

        </p>
    </div>


</div>