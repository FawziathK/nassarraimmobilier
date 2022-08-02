<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;

$title = "Acceuil | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>

<style>
.t-bar {
    margin-top: 25vh;
}

.imps {
    background-image: url('/storages/imgs/vente.jpg');
    background-color: rgba(114, 110, 110, 0.5);

    background-repeat: no-repeat;
    background-size: cover;
}

.impt {
    background-image: url('/storages/imgs/mte.jpg');
    background-color: rgba(114, 110, 110, 0.5);

    background-repeat: no-repeat;
    background-size: cover;
}

.impu {
    background-image: url('/storages/imgs/tme.jpg');
    background-color: rgba(114, 110, 110, 0.5);

    background-repeat: no-repeat;
    background-size: cover;
}

.impv {
    background-image: url('/storages/imgs/mmi.jpg');
    background-color: rgba(114, 110, 110, 0.5);
    background-repeat: no-repeat;
    background-size: cover;
}

.mform {
    border-radius: 8px;
    padding: 15px 25px 25px 25px;
    background-color: rgba(65, 131, 215, .45);
    max-width: 50rem;
    text-align: center;
    margin-top: 120px;
    margin-bottom: 120px;

}

.bgfo {
    background-color: rgba(137, 196, 244, 1);
    font-size: 2.9em;
}

.bob {

    position: relative;
    animation-name: example;
    animation-duration: 15s;
    animation-iteration-count: 3;
    animation-direction: alternate;
}

@keyframes example {
    0% {
        left: 0px;
        top: 0px;
    }

    25% {
        left: 200px;
        top: 0px;
    }

    100% {
        left: 0px;
        top: 0px;
    }
}
</style>

<div class="card bg-dark text-white border-0">
    <img src="/storages/imgs/banni_Immo 1.jpg" alt="" class="card-img-top" style="object-fit: cover;height:90vh;">
    <div class="card-img-overlay container t-bar">
        <div class="text-center h1 d-none d-sm-none d-md-block">
            <span class="card-text bg-info rounded p-2 mt-5 p-3"> Réalisons ensemble votre projet immobilier </span>
        </div>
        <h1 class="card-title bg-info p-2 mt-5 text-center d-sm-block d-md-none rounded"> Réalisons ensemble votre
            projet immobilier </h1>
        <div class="text-center h1 mt-5" data-aos="fade-right" data-aos-duration="3000">
            <span class="card-text bg-info p-2 rounded mt-5 p-2 "> Commencez </span>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row text-info" style="font-weight: bold;">

        <div class="col-md-4  mb-3 bob">
            <p data-aos="fade-right" data-aos-duration="3500" style="font-size: 2.1rem;"> <br> NOTRE MISSION</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6 text-center mb-3 h5"> <br> <br> Quel que soit votre projet immobilier, NAS-SARRA IMMOBILIER
            vous accompagne, en vous proposant des services et des garanties pour vous simplifier la vie. </div>

    </div>
</div>
<br>
<div class="card bg-dark text-white border-0">
    <img src="/storages/imgs/imd.jpg" alt="" class="card-img-top" style="object-fit: cover;height:60vh;">
    <div class="card-img-overlay container t-bar">
        <div class="text-center h1 d-none d-sm-none d-md-block">
            <span class="card-text bg-info rounded p-2 mt-5 p-3"> Réalisons ensemble votre projet immobilier </span>
        </div>
        <h1 class="card-title bg-info p-2 mt-5 text-center d-sm-block d-md-none rounded"> Réalisons ensemble votre
            projet immobilier </h1>
        <div class="text-center h1 mt-5" data-aos="fade-right" data-aos-duration="3500">
            <span class="card-text bg-info p-2 rounded mt-5 p-2 text-white"> Allons-y </span>
        </div>

        <!-- <div class="text-center h3 mt-5"> 
                <a style="text-decoration: none;" href="/"> <span class="card-text bg-white rounded mt-5 p-2 text-dark"> COMMENCEZ </span> </a> 
            </div>  -->
    </div>
</div>
<h1 style="text-align: center;font-weight: bold" class="text-info mt-5 mb-5 bob">NOS EXPERTISES</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-12 mb-2 ">
            <div class="card imps" style="height :10rem" data-aos="flip-up" data-aos-duration="3000">
                <div class="card-body bg-info text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">VENTE</h5>

                    <br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/vendre">Lire plus </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 mb-2">
            <div class="card impt" style="height :10rem" data-aos="flip-up" data-aos-duration="3000">
                <div class="card-body  bg-info text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">LOCATION</h5>

                    <br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/louer">Lire plus </a>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 mb-2">
            <div class="card impu" style="height :10rem" data-aos="flip-up" data-aos-duration="3000">
                <div class="card-body bg-info text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">GESTION</h5>

                    <br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/faire-gerer">Lire plus </a>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 mb-2 ">
            <div class="card impv " style=" height :10rem" data-aos="flip-up" data-aos-duration="3000">
                <div class="card-body bg-info text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">PROMOTION</h5>
                    <br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/faire-construire") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/vendre">Lire plus </a>

                </div>
            </div>
        </div>


    </div>
</div>
<div class="card bg-dark text-white border-0 mt-5">
    <img src="/storages/imgs/banni_Immo 1.jpg" alt="" class="card-img-top" style="object-fit: cover;height:60vh;">
    <div class="card-img-overlay container t-bar mform ">
        <h3>Votre Recherche</h3>
        <form class="row" style="display: flex;justify-content:space-around;text-align:center">
            <div class="col-md-3 mb-2">
                <select class="form-select" name="type" id="typebien">
                    <option value="" style="font-family: Roboto;">Type de bien</option>
                    <option value="vente" style="font-family: Roboto;">Achat</option>
                    <option value="louer" style="font-family: Roboto;">Location</option>
                </select>
            </div>
            <div class="col-md-3 mb-2">
                <select class="form-select" name="type" id="pays">
                    <option value="" style="font-family: Roboto;">Pays</option>
                    <!-- <option value="Benin" style="font-family: Roboto;">Bénin</option>
                    <option value="France" style="font-family: Roboto;">France</option> -->
                    <option value="Togo" style="font-family: Roboto;">Togo</option>
                </select>
            </div>
            <div class="col-md-3 mb-2">
                <select class="form-select" name="type" id="ville">
                    <option value="" style="font-family: Roboto;">Ville</option>

                </select>
            </div>
            <div class="col-md-3 mb-2">
                <select class="form-select" name="type" id="quart">
                    <option value="" style="font-family: Roboto;">Quartier</option>

                </select>
            </div>
            <div class="col-md-12 mb-2">
                <button type="button" id="btnre" class="btn btn-primary w-100 mb-2">Rechercher</button>
            </div>
        </form>

    </div>
</div>