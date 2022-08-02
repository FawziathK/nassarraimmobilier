<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;

$title = "Qui sommes nous ? | NAS-SARRA Immobilier";
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
    opacity: 0.2;
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
    max-width: 45rem;
    text-align: center;
    margin-top: 120px;
    margin-bottom: 120px;

}

.bgfo {
    background-color: rgba(137, 196, 244, 1);
    font-size: 2.9em;
}
</style>

<br>

<div class="container">

    <div class="row " align-content-center>

        <div class="clearfix">

            <!-- <img src="/storages/imgs/h4.jpg" class="col-md-5 img-fluid float-md-start mb-2 p-4" alt="..."> -->

            <h2 class=" p-2" style="font-weight:30px;font-family:Arial, Helvetica, sans-serif"> QUI SOMMES
                NOUS ? </h2>

            <p class=" ml-3 p-3 lh-sm fs-5">
                NAS-SARRA <i>Immobilier</i> se veut une agence immobilière moderne et résolument en phase avec
                son temps, grâce à sa manière différente d’aborder l’immobilier.
                <br>
                <br>
                NAS-SARRA<i> Immobilier</i> met à votre service des collaborateurs experts dans leur domaine de
                compétences et des services innovants et adaptés au marché local, afin que chaque
                expérience client soit unique et réussit.
                <br><br>
                Notre volonté est de vous accompagnez à toutes les étapes de votre projet immobilier.
                <br>


            </p>
            <div>
                <center>
                    <img src="/storages/imgs/circ.png" class=" img-fluid  mb-2 p-4" alt="..." style="width: 700px;">
                </center>
            </div>

            <div style="height: 1px; width : 90%;" class="container bg-primary "></div>

            <p class="text-danger fst-italic fw-bold text-center">

            <h4 class="text-center text-primary">
                <i><b> Notre philosophie</b></i>
            </h4>
            </p>

            <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
            <br>
            <p class="fs-5">
                Vous simplifiez la vie. Nous sommes conscients que projet immobilier rime souvent avec projet de vie.
                Pour que les deux soient une réussite, nous vous laissons vous occuper de votre projet de vie et nous
                nous chargeons de votre projet immobilier, pour vous apporter efficacité et sérénité.
            </p>
        </div>

    </div>

</div>


<div class="container">
    <div class="row">
        <center>
            <img src="/storages/imgs/pierre.PNG" class=" img-fluid  mb-2 p-4" alt="...">
        </center>
        <!-- <div class="col-md-6">

            <img class="img-thumbnail mb-3 h-98" src="/storages/imgs/lome_belle.png" alt="">

        </div>
        <div class="col-md-6  bg-info text-white rounded" style="opacity: 0.6">
            <div class="h-100">
                <p class="text-center fs-2 bg-primary mt-2 " style="opacity: 0.5">LOMÉ , LA BELLE</p>
                <p class="text-center float-none" style="text-transform: uppercase;">
                    <b> Une capitale bouillonante de jour comme de nuit (Grand marché, Port
                        de Lomé, discothèques &
                        maquis),
                        des boutiques et échoppes (pagnes, artisanat) pour les fans du shopping, un marché aux fétiches
                        réputé dans toute la sous région.

                        Construite sur le littoral, face aux eaux bleues du golfe du Bénin, la ville de Lomé forme un
                        ensemble détendu, harmonieux et accueillant.

                        C'est une ville avec des hôtels modernes, offrant une multitude de restaurants, des casinos, des
                        marchés prospères et des boîtes de nuit animées.

                        Avec plus d'un million d'habitants, Lomé est la plus grande ville du Togo.</b> <br>
                    <a href="/togo-en-quelques-mots" class="text-white">PLUS SUR LE TOGO</a>
                </p>
            </div>
        </div> -->
    </div>
</div>

<!-- servvice-->
<div class="container">
    <!-- <div class="row">
        <h2 style="text-align: center;font-weight: bold" class="text-info mt-5 mb-5">NOS SERVICES </h2>

    </div> -->
    <!-- <div style="height: 1px; width : 90%;" class="container bg-primary "></div>

    <p class="text-danger fst-italic font-bold text-center">

    <h4 class="text-center text-primary">
        <i><b> Nos valeurs</b></i>
    </h4>
    </p>

    <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
    <br> -->
</div>

<!-- card-->
<!-- <div class="container">
    <div class="row  ">

        <div class="col-sm-6 col-lg-3 mb-2 ">
            <div class="card imps " style="height :20rem" data-aos="flip-up" data-aos-easing="ease-out-cubic"
                data-aos-duration="9000">
                <div class="card-body bg-secondary text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">VENTE</h5>
                    <p class="card-text">Spécialiste de la
                        transaction, nous
                        vendons
                        des bien s sur tous
                        le territoire du Togo</p><br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/vendre">Lire plus </a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb-2">
            <div class="card impt" style="height :20rem" data-aos="fade-top" data-aos-duration="6000">
                <div class="card-body  bg-secondary text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">LOCATION</h5>
                    <p class="card-text">Experts locaux, nous
                        proposons différentes
                        gammes de location
                        résidentielle et
                        professionnelles</p>
                    <br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/louer">Lire plus </a>

                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb-2">
            <div class="card impu" style="height :20rem" data-aos="flip-up" data-aos-duration="3000">
                <div class="card-body bg-secondary text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">GESTION</h5>
                    <p class="card-text">Nous gérons tous
                        types de biens avec
                        pour objectif de
                        satisfaire le propriétaire
                        et le locataire
                        ...</p><br>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/faire-gerer">Lire plus </a>

                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb-2 ">
            <div class="card impv " style=" height :20rem" data-aos="fade-top" data-aos-duration="10000">
                <div class="card-body bg-secondary text-white fw-bold" style="opacity: 0.7">
                    <h5 class="card-title text-decoration-underline fw-bold">PROMOTION</h5>
                    <p class="card-text">Nous vous
                        accompagnons á
                        toutes les étapes de
                        votre projet de
                        construction, de
                        l'achat du terrain a
                        l’emménagement de
                        votre bien</p>
                    <a class="<?php if ($_SERVER['REQUEST_URI'] === "/faire-construire") {
                                    echo "text-dark";
                                } else {
                                    echo "text-white";
                                } ?>" href="/vendre">Lire plus </a>

                </div>
            </div>
        </div>


    </div>
</div><br> -->
<div style="height: 1px; width : 90%;" class="container bg-primary "></div>

<p class="text-danger fst-italic fw-bold text-center">

<h4 class="text-center text-primary">
    <i><b> Nos valeurs</b></i>
</h4>
</p>

<div style="height: 1px; width : 90%;" class="container bg-primary "></div><br>
<p class="container">
    <b> Proximité</b><br>
    En tête de liste des facteurs clés de réussite dans nos métiers d’immobilier, nous déclinons la proximité sous
    toutes ses formes. La réactivité de chacun de nos collaborateurs et partenaires, nous permettent de nous adapter
    sans cesse à l’évolution des besoins de nos clients tout en réduisant les délais et, en augmentant la qualité de nos
    services.
</p>
<p class="container">
    <b> Engagement</b><br>
    Le service client est au cœur de notre entreprise. Et nous défendons l’idée que la satisfaction de nos clients,
    commence par l’épanouissement de chacun de nos collaborateurs. Pour nous, des personnes épanouies sont plus
    susceptibles d’aider d’autres personnes à s’épanouir dans la réalisation de leurs projets, en s’engageant dans leur
    travail.
</p>
<p class="container">
    <b> Confidentialité</b><br>
    Nous ne divulguons jamais l’identité des clients qui nous confient leurs projets. Car pour nous, discrétion et
    confidentialité sont une marque de respect pour nos clients. Une attention appréciée par nos clients, qui en retour
    nous recommande autour d’eux. Ce qui contribue à renforcer cette relation de confiance qui nous lie.
</p>