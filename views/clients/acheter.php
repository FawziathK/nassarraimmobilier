<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Immo;
use Synext\Helpers\Helpers;

$db_Immo = new Immo;
$ventes = $db_Immo->ventes_limit();

$title = "Acheter | NAS-SARRA Immobilier";
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
</style>

<div class="container" style="margin-top: 20px;">
    <div class="font-weight-bolder mb-1 text-right">
        <p class="clo fs-2 h1"> ACHETER </p>
    </div>
    <div style="height: 3px; background-color:black; "></div>
    <br>
    <p class="font-weight-bolder mt-1 h5 text-primary"> UN PROJET D’ACHAT IMMOBILIER, PAR OU COMMENCER ? </p>
    <p>
        Acheter un bien immobilier est souvent le projet d’une vie. Peu importe qu’il s’agisse d’une résidence
        principale, secondaire, ou d’un investissement locatif. Avant de vous lancer dans les recherches de votre future
        acquisition, vous devez impérativement avoir un plan d’action avec des étapes à respecter.
        <b class="font-weight-bolder"> Les consultants immobiliers de Nas-Sarra sont à votre écoute pour vous
            accompagner. </b>
    </p>

    <p>
    <div class="container">
        <span class="text-primary ml-5 h3 font-weight-bolder"> 1. Quels sont vos besoins </span> <br><br><br>
    </div>

    <div class="row mt-1 text-center">
        <div class="col-md-6 mb-1">
            <img class="card-img-top" src="/storages/imgs/a1.jpg" alt="">
        </div>
        <div class="col-md-6 mb-1">
            <img class="card-img-top" src="/storages/imgs/a2.jpg" alt="">
        </div>
    </div>
    <p>Mais pas seulement ! L’emplacement ? Dans l’ancien, le neuf ? Combien de chambres ? …</p>
    </p><br>

    <p class="mt-2">

    <div class="card mb-3 border-0">
        <div class="row no-gutters">
            <div class="col-md-9">
                <div class="container"> <span class="text-primary h3 font-weight-bolder">2. Parlons de votre plan de
                        financement </span> <br><br></div>

                <div class="body p-1">
                    <p class="card-text">
                        Avez-vous calculé votre capacité d’endettement ? Quelle est votre enveloppe budgétaire ? Un
                        professionnel a-t-il validé votre prêt ? Nos partenaires sont à votre écoute.
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <img class="card-img-top" src="/storages/imgs/a3.jpg" style="width: 200px; object-fit: cover; "
                    alt="...">
            </div>
            <div class="col-md-3 d-md-none">
                <img class="card-img-top" src="/storages/imgs/a3.jpg" alt="...">
            </div>
        </div>
    </div>
    </p>

    <p class="mt-2">
    <div class="container"><span class="text-primary h3 font-weight-bolder">3. Maintenant nous pouvons explorer le
            marché ensemble
        </span> <br><br></div>

    <p>Maintenant que vos besoins et votre budget d’achat sont clairement définis, nous pouvons commencer la recherche
        et entamer ensemble des visites de biens pouvant vous, correspondre.</p>

    </p>

    <p class="mt-2">
    <div class="container"><span class="text-primary h3 font-weight-bolder">4. Il ne reste plus qu’à conclure l’achat
        </span> <br><br></div>

    <p>Une fois votre proposition d’achat accepter par le vendeur, nous vous accompagnons durant tout le processus
        administratif jusqu’à la signature définitive devant le notaire.</p>
    <div class="text-center mt-1 d-none d-md-block">
        <img class="card-img-top " src="/storages/imgs/a4.jpg" style="object-fit: cover; width: 800px; height: 250px;"
            alt="">
    </div>
    <div class="text-center mt-1 d-md-none">
        <img class="card-img-top " src="/storages/imgs/a4.jpg" alt="">
    </div>

    </p>
    <br>
    <p class="mt-2">
    <div class="card mb-3 border-0">
        <div class="container"><span class="text-primary h3 font-weight-bolder">5. Et personnaliser ce bien avant de
                poser vos meubles </span>
            <br><br>
        </div>

        <div class="row no-gutters">
            <div class="col-md-3 ">
                <img class="card-img-top" src="/storages/imgs/a5.jpg" alt="...">
            </div>
            <div class="col-md-9">

                <div class="body p-1">
                    <p class="card-text">Acheter un bien à rénover partiellement ou totalement peut avoir le double
                        avantage d’être moins couteux et de
                        pouvoir le transformer selon vos gouts. <br>
                        Nous vous proposons plusieurs formules d’accompagnement.</p>

                </div>
            </div>


        </div>
    </div>
    <br>

    </p>


    <p class="mt-2">
    <div class="container"> <span class="text-primary h3 font-weight-bolder">6. La décoration, nous pouvons aussi nous
            en occuper </span>
        <br>
    </div>

    <p>Et aller encore plus loin dans le Homestaging de votre bien en vous proposant des meubles fabriqués par des
        artisans locaux ou achetés à l’étranger. </p>
    <div class="row mt-1 text-center">
        <div class="col-md-6 mb-1">
            <img class="card-img-top" src="/storages/imgs/a6.jpg" alt="">
        </div>
        <div class="col-md-6 mb-1">
            <img class="card-img-top" src="/storages/imgs/a7.jpg" alt="">
        </div>
    </div>
    </p>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center>
                <img class="card-img  mt-5" style="height: 125px;" src="/storages/imgs/contactnew1.PNG" alt="">
            </center>

        </div>
        <div class="col-md-4"></div>
    </div>

    <br>
    <div style="height: 1px; width : 90%;" class="container bg-primary "></div> <br>

    <p class="text-primary fst-italic fw-bold text-center">
        Nos Offres d'Achat
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
                $type =  '<p class="text-danger mb-1">Achat Maison</p>';
            }

            echo <<<HTML
                    <div class="col-sm-6 col-md-4 mb-5">
                    <div class="card" id="olo">
                        <img class="card-img" style="height: 250px; object-fit: cover;" src="/storages/immos/{$photo}" alt="">
                        <div class="card-body" >
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
                                <i class="fa fa-ticket" aria-hidden="true"></i> Visiter
                            </button>
                        </div>
                        </div>
                    </div>
HTML;
        endforeach; ?>
    </div>
    </p>

    <a href="/acheter/all">
        <button class="btn btn-outline-info w-100"> Voir plus d'Offres ... </button>
    </a>

</div>