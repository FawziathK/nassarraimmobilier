<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Immo;
use Synext\Helpers\Helpers;

$db_Immo = new Immo;
$ventes = $db_Immo->ventes_limit();

$title = "Vendre | NAS-SARRA Immobilier";
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

/* p {
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

} */
</style>

<div class="container" style="margin-top: 20px;">
    <div class="font-weight-bolder mb-1 fa-2x text-right" style="font-size: 40px;">
        <p class="clo fs-2"> VENDRE </p>
    </div>
    <div style="height: 3px; background-color:black;"></div>
    <br>
    <p class="text-primary h2 font-weight-bolder">Ce que nous pouvons faire pour vous</p>

    <b class="text-primary font-weight-bolder " style="font-size: 25px;">Estimation de votre bien</b>
    <div class="card mb-1 border-0">
        <div class="row no-gutters">
            <div class="col-md-10">
                <div class="body p-1">
                    <p class="card-text"> L’estimation est l’acte décisif qui déterminera la réussite de votre projet
                        immobilier de vente dans son ensemble. Pour déterminer le juste prix, nos consultants
                        immobiliers réalisent l’estimation de votre bien en abordant sa valeur d’un point de vue
                        rationnelle émotionnel et affectif.</p>
                </div>
            </div>
            <div class="col-md-2">
                <img src="/storages/imgs/v1.jpg" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    <b class="text-primary font-weight-bolder" style="font-size: 25px;"> Définition d’une stratégie marketing de
        commercialisation </b> <br><br>
    <div class="card mb-1 border-0">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="/storages/imgs/v2.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-10">
                <div class="body p-1">
                    <p class="card-text"> <i class="fas fa-quote-left"> </i> A la fois stratégique et opérationnel,
                        le marketing de l’immobilier recouvre
                        un ensemble de techniques, de méthodes et de moyens dont disposent les agents immobiliers pour
                        prévoir, influencer et satisfaire les besoins des acheteurs et vendeurs potentiels.</p>
                    <p class="text-right font-weight-bolder" style="display:flex;justify-content:flex-end;"> Fabrice
                        LARCENEUX </p>
                </div>
            </div>

        </div>
    </div>
    <br><br><br>

    <!-- <p>Un visuel de qualité est souvent plus parlant qu’un long texte.</p> <br> -->
    <div class="row">

        <div class="col-md-6">
            <b class="text-primary font-weight-bolder" style="font-size: 25px;"> Réalisation et sélection des photos de
                présentation </b> <br>
            <center> <img class="img-thumbnail " src="/storages/imgs/v3.jpg" class="card-img-top" alt=""> </center>
        </div>
        <div class="col-md-6 mt-sm-5">
            <div class="mt-sm-5">
                <p>En matière d’immobilier une photo de qualité est souvent plus parlante qu’un long texte</p>
                <img class="img-thumbnail" src="/storages/imgs/v4.jpg" class="card-img-top" style="height: 300px;"
                    alt="">
                <br>
            </div>
        </div>
    </div>
    <br>
    <b class="text-primary font-weight-bolder" style="font-size: 25px;">Sélection des candidats acquéreurs</b>
    <div class="card mb-1 border-0">
        <div class="row no-gutters">
            <div class="col-md-9">
                <div class="body p-1">
                    <p class="card-text"> Dans le cadre d’une vente immobilière, le choix des acquéreurs est une tâche
                        complexe qui requiert de pouvoir organiser des visites pour des candidats capables de se
                        positionner immédiatement. D’analyser les offres d’achat et les dossiers de financement avec une
                        très grande attention. La tâche se complique d’autant plus lorsque vous recevez plusieurs offres
                        d’achat. Votre consultant immobilier vous conseille pour faire votre choix plus facilement.</p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="/storages/imgs/v5.jpg" class="card-img-top" alt="...">
            </div>
            <div class="text-center h2 text-primary font-weight-bolder mt-5 fs-3" data-aos="fade-right"
                data-aos-duration="3000">
                <b style="font-size: 25px;">Être contacté par un consultant</b>
            </div>
            <p><b>Vous recherchez un professionnel de l’immobilier pour s’occuper de la vente de votre bien ?
                    Ne cherchez plus. Appelez-nous, c’est notre métier !</b></p>
            <br><br>
            <P>
                <button class="btn btn-primary col-12 mb-2 p-2 mt-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    CONTACTEZ UN CONSULTANT
                </button>

            <div class="collapse" id="collapseExample">
                <form id="fm3">
                    <div class="card card-body">
                        <div class="mform container-fluid ">

                            <div style="text-align:center;margin:auto !important;">
                                <div class="row">
                                    <div class=" col-md-8">
                                        <label for="inputEmail4">Nom et Prénom</label>

                                        <input type="text" class="form-control" id="Nom">

                                    </div>


                                    <div class=" col-md-4">
                                        <label>Tel</label>
                                        <input type="text" class="form-control" id="Tel" name="Tel">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" col-md-12">
                                        <label>Mail</label>
                                        <input type="email" class="form-control" placeholder="name@example.com"
                                            id="Mail" name="Mail">

                                    </div>
                                </div>

                                <div class="row">

                                    <div class=" col-md-6">
                                        <label>Localisation du Bien</label>
                                        <input type="text" class="form-control" id="loca_bien" name="loca_bien">

                                    </div>



                                    <div class=" col-md-6">
                                        <label for="inputEmail4">Type de bien</label>

                                        <select class="form-control" id="type_bien" name="type_bien">
                                            <option value="">Selection</option>
                                            <option value="2019-2020">Maison</option>
                                            <option value="2020-2021">Appartemet</option>
                                            <option value="2021-2022">Immeuble</option>
                                            <option value="2021-2022">Local Commercial</option>
                                        </select>

                                    </div>
                                </div>




                                <div class="text-center h2 text-white font-weight-bolder mt-3" data-aos="fade-right"
                                    data-aos-duration="3000">
                                    Détails du bien
                                </div>

                                <div class="row">
                                    <div class=" col-md-6">
                                        <label for="inputEmail4" class="mt-4" data-aos="fade-right"
                                            data-aos-duration="4000">Nombre de pièce</label>



                                    </div>
                                    <div class=" col-md-6">
                                        <label for="inputEmail4"></label>

                                        <input type="number" class="form-control" id="nbr_piece" name="nbr_piece">

                                    </div>

                                    <div class=" col-md-6">
                                        <label for="inputEmail4" class="mt-4" data-aos="fade-right"
                                            data-aos-duration="5000">Surface</label>



                                    </div>
                                    <div class=" col-md-6">
                                        <label for="inputEmail4"></label>

                                        <input type="number" class="form-control" id="surface" name="surface">

                                    </div>
                                </div>

                                <div class="row">


                                    <div class=" col-md-6">
                                        <label for="inputEmail4" class="mt-4" data-aos="fade-right"
                                            data-aos-duration="6000">Terrain</label>



                                    </div>
                                    <div class=" col-md-6">
                                        <label for="inputEmail4"></label>

                                        <input type="number" class="form-control" id="Terrain" name="Terrain">

                                    </div>
                                </div>

                                <div class="row">


                                    <div class=" col-md-6">
                                        <label for="inputEmail4" class="mt-4" data-aos="fade-right"
                                            data-aos-duration="9000">Piscine</label>


                                    </div>
                                    <div class=" col-md-6">
                                        <label for="inputEmail4"></label>

                                        <input type="number" class="form-control" id="piscine" name="piscine">

                                    </div>
                                </div>
                                <div class="row">



                                    <div class=" col-md-6">
                                        <label for="inputEmail4" class="mt-4" data-aos="fade-right"
                                            data-aos-duration="10000">Nombre d'étage</label>



                                    </div>
                                    <div class=" col-md-6">
                                        <label for="inputEmail4"></label>

                                        <input type="number" class="form-control" id="nbr_etage" name="nbr_etage">

                                    </div>



                                </div>




                                <div class="row">
                                    <div class=" col-md-12 ">
                                        <label data-aos="fade-right" data-aos-duration="12000">Laissez un
                                            message</label>
                                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>


                                    </div>
                                    <div>

                                    </div>

                                    <button id="consu" class="btn btn-primary mb-2 p-2 mt-5"> Envoyez <i
                                            class="fas fa-paper-plane ml-3"></i></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                </P>

            </div>
        </div>


        <br><br>
        <br>
        <div style="height: 1px; width : 90%;" class="container bg-primary "></div>

        <p class="text-danger fst-italic fw-bold text-center">
            Notre expertise à votre service <br><br>
            Pour une vente rapide et sécurisée
        </p>

        <div style="height: 1px; width : 90%;" class="container bg-primary "></div>

        <b class="text-primary mt-5" style="font-size: 25px;">Conseil sur la négociation du prix</b>
        <p>
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-1">
                <i class="fas fa-quote-left fa-2x"></i>
            </div>
            <div class="col-9">

                Celui qui argumente et ne conclut pas est comparable à celui qui sème et ne récolte pas (Michaël
                Aguilar)
                <br>
                Laissez-nous faire, c’est notre métier !
            </div>
        </div>


        </p>
        <b class="text-primary mt-2" style="font-size: 25px;">Notre réseau de partenaires à votre service</b>

        <br>
        <div style="height: 1px; width : 90%;" class="container bg-primary mt-3 "></div> <br>

        <p class="text-primary fst-italic fw-bold text-center">
            Projet de vente – Être contacté par un consultant
        </p>

        <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
        <br>

        <br>
        <div style="height: 1px; width : 90%;" class="container bg-primary "></div> <br>

        <p class="text-primary fst-italic fw-bold text-center">
            Nos Offres en Ventes
        </p>

        <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
        <br>

        <p class="mt-5">
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
                        <div class="card-body">
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

        <br>
        <a href="/vendre/all">
            <button class="btn btn-outline-info w-100"> Voir plus d'Offres ... </button>
        </a>

    </div>
</div>