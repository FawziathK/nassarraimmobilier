<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Immo;
use Synext\Helpers\Helpers;

$db_Immo = new Immo;
$ventes = $db_Immo->ventes();

$title = "Vendre | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>

<style>
p {
    font-size: 18px;
    text-align: justify;
}

.img {
    height: 200px;
    border-radius: 30px;
}

.mform {
    border-radius: 8px;
    padding: 15px 25px 25px 25px;
    background-color: rgba(65, 131, 215, .45);
    max-width: 45rem;
    text-align: center;
    margin-top: 120px;
    margin-bottom: 120px;

}
</style>

<div class="container" style="margin-top: 20px;">

    <a href="/acheter"> <button class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Retour </button>
    </a>

    <br><br>
    <div style="height: 1px; width : 90%;" class="container bg-primary "></div> <br>

    <p class="text-primary fst-italic fw-bold text-center">
        Toutes Nos Offres à Acheter
    </p>

    <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
    <br>

    <p>
    <div class="row">
        <?php foreach ($ventes as $vente) :
            $img = $db_Immo->img_by_artcl($vente->id_article);
            $descp = Helpers::getExtrait($vente->descript, 90);
            if ($img == false) {
                $photo = "ototo.jpg";
            } else {
                $photo = $img->photo;
            }
            if ($vente->type_log == "appart") {
                $type =  '<p class="text-info mb-1">Achat Appartement</p>';
            } else {
                $type =  ' <p class="text-danger mb-1">Achat Maison</p>';
            };
            echo <<<HTML
                    <div class="col-sm-6 col-md-4 mb-5">
                        <div class="card" id="olo">
                        <img class="card-img" style="height: 250px; object-fit: cover;" src="/storages/immos/{$photo}" alt="">
                        <div class="card-body mb-1" >
                            {$type}
                            <h5 class="card-title ifo"> 
                                {$vente->titre} <br>
                                Pays : {$vente->pays} <br>
                                Ville : {$vente->ville} <br> 
                                Prix : {$vente->prix} Fcfa
                            </h5>
                            <p class="card-text text-justify" > 
                                <small class="text-muted nom" >  </small> 
                                <span class="text-info font-weight-bolder single pls" style="text-decoration:none;cursor:pointer" title="Details sur article" tag="{$vente->id_article}" typer="vente"> plus </span> 
                            </p>
                            <button titre="{$vente->titre}" class="w-100 reser btn btn-outline-primary reserva" data-bs-toggle="modal" data-bs-target="#modal_reservation" tag="{$vente->id_article}">
                                <i class="fa fa-ticket" aria-hidden="true"></i> Visité
                            </button>
                        </div>
                        </div>
                    </div>
HTML;
        endforeach; ?>
    </div>
    </p>

</div>