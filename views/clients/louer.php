<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Immo;
use Synext\Helpers\Helpers;

$db_immo = new Immo;
$louers = $db_immo->locas_limit();

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
</style>









<div class="container" style="margin-top: 20px;">
    <div class="font-weight-bolder mb-1 text-right" style="font-size: 30px;"> <span class="clo fs-2"> LOUER</span>
    </div>
    <div style="height: 3px; background-color:black;"></div>
    <br> <br>



    <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
    <br>
    <p class="text-primary fst-italic fw-bold text-center">LOCATAIRE - Vous chercher un bien à louer pour y vivre </p>

    <div style="height: 1px; width : 90%;" class="container bg-primary "></div><br><br>

    <p class="text-justify text-monospace" style="font-size: 18px">Qu’il s’agisse d’un appartement meublé, d’une maison
        avec piscine, d’une propriété en bordure de
        mer, d’une location saisonnière ... nous définissons ensemble vos critères de recherche afin de vous
        trouver le logement qui vous convient </p>
    <p class="text-justify text-monospace" style="font-size: 18x">
        Nous vous proposons ainsi des biens issus de notre portefeuille, ainsi que de notre réseau de
        partenaires. Et parce que dans notre métier certaines adresses sont confidentiels, nous vous donnons
        l’accès au marché caché, le fameux « Off-Market » de Lomé.
    </p>

    <div class="col mb-1">
        <img class="card-img-top " src="/storages/imgs/im2.png" alt="">
    </div>

    <br> <br>

    <div style="height: 1px; width : 90%;" class="container bg-primary "></div>
    <br>


    <div class="row">
        <p class="text-primary fst-italic fw-bold text-center">PROPRIETAIRE - Vous avez un bien que vous voulez mettre
            en location, cliquez

            <button class="btn btn-primary m-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1" id="clp">
                Ici
            </button>

        <div class="collapse" id="collapseExample1">
            <form id="fm1">
                <div class="card card-body">
                    <div class="mform container-fluid ">

                        <div style="text-align:center;margin:auto !important;">
                            <div class="row">
                                <div class=" col-md-12">
                                    <label for="inputEmail4">Nom et Prénom</label>

                                    <input type="text" class="form-control" id="Nom" name="">

                                </div>


                            </div>

                            <div class="row">
                                <div class=" col-md-6">
                                    <label>Mail</label>
                                    <input type="email" class="form-control" placeholder="name@example.com" id="Mail"
                                        name="Mail">

                                </div>

                                <div class=" col-md-6">
                                    <label>Localisation du Bien</label>
                                    <input type="text" class="form-control" id="loca_bien" name="loca_bien">

                                </div>
                            </div>

                            <div class="row">
                                <div class=" col-md-6">
                                    <label>Tel</label>
                                    <input type="text" class="form-control" id="Tel" name="Tel">

                                </div>


                                <div class=" col-md-6">
                                    <label for="inputEmail4">Type de bien</label>

                                    <select class="form-control" id="type_bien" name="type_bien">
                                        <option value="">Selection</option>
                                        <option value="Maison">Maison</option>
                                        <option value="Appartemet">Appartemet</option>
                                        <option value="Immeuble">Immeuble</option>
                                        <option value="Local_Commercial">Local Commercial</option>
                                    </select>

                                </div>
                            </div>




                            <div class="text-center h2 font-weight-bolder mt-3" data-aos="fade-right"
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
                                    <label data-aos="fade-right" data-aos-duration="12000">Laissez un message</label>
                                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>


                                </div>
                                <div>

                                </div>

                                <button type="button" id="val1" class="btn btn-primary mb-2 p-2 mt-5"> Envoyez <i
                                        class="fas fa-paper-plane ml-3"></i></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            </p>
        </div>


        <div class="row">
            <div style="height: 1px; width : 90%;" class="container bg-primary "></div><br><br>

            <p class="text-justify text-monospace" style="font-size: 18px">
                Louer un logement peut parfois s’avérer un vrai casse-tête. Bien choisir son locataire. Faire un état
                des
                lieux d’entrée en béton, pour être à l’abri des mauvaises surprises lors de l’état des lieux de sortie,
                en
                espérant que le candidat choisi prendra soin de votre bien...
            </p>
            <p class="text-justify text-monospace" style="font-size: 18px">
                Pourquoi ne pas plutôt faire appel à un professionnel de la gestion locative ?
            </p>
            <p class="text-justify text-monospace" style="font-size: 18px">
                En confiant un mandat de gestion à Nas-Sarra Immobilier, vous pouvez louer en toute tranquillité.
                Nous vous accompagnons dans le choix du candidat idéal.
            </p>

            <p class="text-justify text-monospace" style="font-size: 18px">
                Mais pas seulement ! Nous vous proposons également une gamme de services dédiés, pour faciliter
                la recherche de candidats, vous faire parvenir vos loyers ou encore réduire le temps de vacance
                locative.
            </p>
            <div class="row">
                <center>

                    <img class="img-thumbnail" style="width: 600px;" src="/storages/imgs/im3.png" alt="">
                </center>
            </div>

            <br><br>


            <div style="height: 1px; width : 90%;" class="container bg-primary mt-4"></div>
            <br>
        </div>

        <p class="text-primary fst-italic fw-bold text-center mt-2">Candidat à la location déposer votre dossier

            <button class="btn btn-primary m-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="clc">
                Ici
            </button>

        <div class="collapse" id="collapseExample">
            <form id="fm2">
                <div class="card card-body">

                    <div class="mform container-fluid ">

                        <div>


                            <div class="row">

                                <div class="mt-2 col-md-6">
                                    <label for="">Nom et Prénom :</label>
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="">

                                </div>

                                <div class="mt-2 col-md-2">
                                    <label for="">Mme/Mr :</label>

                                    <select class="form-control" id="perso" name="perso">
                                        <option value="">Selection</option>
                                        <option value="Madme">Madame</option>
                                        <option value="Monsieur">Monsieur</option>

                                    </select>

                                </div>



                                <div class="mt-2  col-md-4">
                                    <label data-aos="fade-right" data-aos-duration="12000" y for="">Tel :</label>
                                    <input type="text" class="form-control" id="Tel2" name="Tel2">

                                </div>
                            </div>

                            <div class="row">

                                <div class="mt-2  col-md-6">
                                    <label data-aos="fade-right" data-aos-duration="12000" y for="">Mail :</label>
                                    <input type="email" class="form-control" placeholder="name@example.com" id="Mail2"
                                        name="Mail2">

                                </div>

                                <div class="mt-2  col-md-6">
                                    <label data-aos="fade-right" data-aos-duration="12000" y for="">Intitulé de votre
                                        poste :</label>
                                    <input type="text" class="form-control" id="nom_poste" name="nom_poste">

                                </div>
                            </div>

                            <div class="row">


                                <div class="mt-2  col-md-4">
                                    <label data-aos="fade-right" data-aos-duration="12000" y for="">Nom de votre
                                        employeur :</label>
                                    <input type="text" class="form-control" id="employeur_name" name="employeur_name">

                                </div>

                                <div class="mt-2  col-md-4">
                                    <label data-aos="fade-right" data-aos-duration="12000" y for="">Vous êtes en poste
                                        depuis ?</label>
                                    <input type="number" class="form-control" id="experience" name="experience"
                                        placeholder="Nombre d'année">

                                </div>

                                <div class="mt-2  col-md-4">
                                    <label for="">Montant de votre Salaire net mensuel :</label>
                                    <input type="number" class="form-control" id="salaire_mensuel"
                                        name="salaire_mensuel">

                                </div>

                            </div>

                            <div class="row">

                                <div class="mt-2 col-md-4">

                                    <label for="">Combien d’enfants vivent avec vous?</label>
                                    <input type="number" class="form-control" id="nbr_enf" name="nbr_enf">

                                </div>



                                <div class=" col-md-8">

                                    <label for="">Précisez votre recherche pour que nous puissions vous proposer plus de
                                        biens :</label>
                                    <input type="text" class="form-control" id="rech" name="rech">

                                </div>
                            </div>


                            <div class="row">

                                <div class=" col-md-4">
                                    <label for="">Votre recherche :</label>
                                    <select class="form-control" id="mrech" name="mrech">
                                        <option value="">Selection</option>
                                        <option value="Maison">Maison</option>
                                        <option value="Appartemet">Appartemet</option>

                                    </select>

                                </div>
                                <div class=" col-md-3">
                                    <label for="">Nombre de chambres :</label>
                                    <input type="number" class="form-control" id="Nbr_chambr" name="Nbr_chambr">

                                </div>
                                <div class=" col-md-2">
                                    <label for="">Quartier :</label>
                                    <input type="text" class="form-control" id="Quartier" name="Quartier">

                                </div>

                                <div class=" col-md-3">

                                    <label for="">Durée de Location :</label>
                                    <input type="number" class="form-control" id="Duree_loc" name="Duree_loc">

                                </div>


                            </div>



                            <div class="row">
                                <div class=" col-md-12 ">
                                    <label data-aos="fade-right" data-aos-duration="12000">Laissez un message :</label>
                                    <textarea class="form-control" name="mmsg" id="mmsg" rows="5"></textarea>


                                </div>
                                <div>

                                    <div class="row">

                                        <button type="submit" class="btn btn-primary mb-2 p-2 mt-5" id="val2"> Envoyez
                                            <i class="fas fa-paper-plane ml-3"></i></i></button>
                                    </div>

                                </div>


            </form>
        </div>




    </div>
</div>

</div>


</form>




</div>


</p>

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
                <button titre="{$louer->titre}" class="w-100 reser btn btn-outline-primary reserva" data-bs-toggle="modal" data-bs-target="#modal_reservation"  tag="{$louer->id_article}">
                    <i class="fa fa-ticket" aria-hidden="true"></i> Visiter
                </button>
            </div>
            </div>
        </div>
HTML;
        endforeach; ?>

    </p>
</div>

<br>
<a href="/louer/all">
    <button class="btn btn-outline-info w-100"> Voir plus d'Offres ... </button>
</a>





</div>
</div>