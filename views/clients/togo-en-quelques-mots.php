<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;

$title = "Le Togo en queslques mots | NAS-SARRA Immobilier";
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
</style>

<div class="container" style="margin-top: 20px;">
    <div class="font-weight-bolder mb-1 text-right" style="font-size: 30px;">
        <p class="clo fs-2"> LE TOGO EN <span class="d-md-none d-sm-block"> <br> </span> QUELQUES MOTS </p>
    </div>
    <div style="height: 3px; background-color:black;"></div>
    <div class="row">
        <div class="col-md-8"> <br> <br>
            <h3><strong>Géographie</strong></h3>
            <p>
                Petit pays par sa taille (56 785 km2,) et sa population (environ 8,6 millions d’habitants), le TOGO est
                limité au nord par le Burkina Faso, au sud par le golfe de Guinée, à l'est par le Bénin et à l'ouest par
                le Ghana. C’est aussi un pays qui présente une grande diversité de paysages, allant des belles plages
                bordées de cocotiers au sud, aux grandes étendues de savanes arborées de baobabs au nord, en passant par
                les vallées verdoyantes et les petites montagnes dans le centre du pays.
            </p>
            <img src="/storages/imgs/cart_togo.jpg" class="card-img-top d-sm-block d-md-none" alt="">
            <h3><strong>Langues</strong></h3>
            <p>
            <p>Il y a autant de dialectes que d’ethnies (une cinquantaine), mais le Togo est un pays francophone et à
                Lomé, la capitale, le dialecte le plus utilisé est l’éwé.</p>

            <br>
            <p> Cette diversité ethnique enrichie une grande variété culturelle avec de nombreuses danses et fêtes
                traditionnelles, mais aussi d'artistes, ou de sites touristiques incontournables. <br>
                La faille d’Aleidjo (région Centrale) et des chutes de Kpalimé dans la région des plateaux </p>
            <br>
            </p>
            <div class="row">
                <div class="col-md-6"><img src="/storages/imgs/t1.jpg" class="card-img-top" alt=""></div>
                <div class="col-md-6"><img src="/storages/imgs/t2.jpg" class="card-img-top" alt=""></div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="/storages/imgs/cart_togo.jpg" class="card-img-top d-none d-md-block"
                style="height: 500px; width: 250px; " alt="">
        </div>
    </div> <br>
    <div>
        <h3><strong>Découpage administratif</strong></h3>
        <div class="row">
            <p class="col-md-6">
                Le Togo est divisé en cinq régions administratives, elles-mêmes découpées en 39 préfectures. Lomé est
                quant à elle, une commune autonome.
                <br> <br>
                Région maritime, chef-lieu : Tsévié <br> <br>
                Région des Plateaux, chef-lieu : Atakpamé <br> <br>
                Région centrale, chef-lieu : Sokodé <br> <br>
                Région de la Kara, chef-lieu : Kara <br> <br>
                Région des Savanes, chef-lieu : Dapaong <br> <br>
            </p>
            <div class="col-md-6"><img src="/storages/imgs/t3.jpg" class="card-img-top" alt=""></div>
        </div>
    </div>
    <div>
        <h3><strong>Monnaie</strong></h3>
        <p>
            Le TOGO fait partie des pays formant l'Union économique et monétaire ouest-africaine (UEMOA) dont la monnaie
            commune est le franc CFA, et l'institut d'émission en est la Banque centrale des États de l'Afrique de
            l'Ouest (BCEAO). <br>
            D’ailleurs sur les pièces de monnaies et au recto des billets de banque, on peut voir le logo de la BCEAO,
            un poisson-scie stylisé qui représente une figurine en bronze employée anciennement par les Akan pour peser
            l'or.
        </p>
    </div>
    <div>
        <h3><strong>Quelques sites à visiter</strong></h3>
        <br> <br>
        Châteaux TAMDERMA à Kanté au Nord/TOGOVIILE
        <center>
            <div class="row">
                <div class="col-md-8 mb-2"><img src="/storages/imgs/togo3.PNG" class="card-img-top" alt="..."></div>
            </div>
        </center>
        Mont AGOU / Cascade PKALIME <br>

        <center>
            <div class="row">
                <div class="col-md-8 mb-2"><img src="/storages/imgs/togo4.PNG" class="card-img-top" alt="..."></div>
            </div>
        </center>

        <br>

        <div class="container">
            <img src="/storages/imgs/togoo1.PNG" class="card-img" alt="...">
        </div>
        <br> <br>
        <div class="container">
            <img src="/storages/imgs/togoo2.PNG" class="card-img" alt="...">
        </div>
    </div>
</div>