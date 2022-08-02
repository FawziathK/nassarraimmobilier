<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;

$title = "Faire Gérer | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>
<style>



</style>

<div class="container" style="margin-top: 20px;">
    <div class="font-weight-bolder mb-1 fa-2x text-right" style="font-size: 30px;">
        <p class="clo fs-2"> FAIRE GERER </p>
    </div>
    <div style="height: 3px; background-color:black;"></div>
    <br>
    <div class="m-2 font-weight-bolder text-danger" style="font-size: 25px;">POURQUOI METTRE VOTRE BIEN IMMOBILIER EN
        GESTION ? </div>

    <p class="text-justify">
        En tant qu’intermédiaire entre les propriétaires et les locataires, notre rôle consiste à la mise en location et
        à l’administration quotidienne de votre bien immobilier.
    </p>
    <p class="text-justify">
        En nous confiant la gestion de votre bien, vous nous déléguer l’ensemble des démarches et tâches que vous
        devriez accomplir en tant que propriétaire et bailleur du logement.
    </p>

    <div class="m-2 font-weight-bolder text-danger" style="font-size: 25px;">QUELLE EST LA MISSION DU GESTIONNAIRE ?
    </div>

    <div class="row">

        <div class="col-md-8"><br>
            <ul>
                <li class="mb-3 fas fa-check"> Estimation de la valeur locative</li> <br>
                <li class="mb-3 fas fa-check"> Marketing immobilier</li> <br>
                <li class="mb-3 fas fa-check"> Mise en location sur le marché</li> <br>
                <li class="mb-3 fas fa-check"> Etude des dossiers de candidature présentés </li> <br>
                <li class="mb-3 fas fa-check"> Sélection du candidat idéal</li> <br>
                <li class="mb-3 fas fa-check"> Etablissement des états des lieux d’entrée et de sortie</li> <br>
                <li class="mb-3 fas fa-check"> Gestion des loyers et charges</li> <br>
                <li class="mb-3 fas fa-check"> Révision annuelle des loyers</li> <br>
                <li class="mb-3 fas fa-check"> La relance du locataire en cas d’impayé</li> <br>
                <li class="mb-3 fas fa-check"> Déclarations de TVA s’il y a lieu</li> <br>
                <li class="mb-3 fas fa-check"> Gestion des réparations à effectuer dans le logement</li> <br>
                <li class="mb-3 fas fa-check"> Formalités de fin de contrat</li> <br>
            </ul>
            <img class="d-none d-md-block" style="width: 300px" src="/storages/imgs/contactnew1.PNG" alt="">

        </div>
        <div class="col-md-4">
            <img class="card-img" style="height: 500px;" src="/storages/imgs/im7.jpg" alt="">
        </div>
        <img class="card-img d-block d-md-none mt-2" style="height: 100px;" src="/storages/imgs/contactnew1.PNG" alt="">
    </div>

</div>
<div class="">
    <br>

    <p class="text-danger fst-italic fw-bold text-center h3 ">

        <br> 3 BONNES RAISONS DE NOUS CONFIER LA GESTION DE VOTRE BIEN ? <br>
    </p> <br>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-3">
                <img class="img-thumbnail" src="/storages/imgs/triangle.PNG" alt="">
            </div>
            <div class="col-sm-6 mb-3">
                <img class="img-thumbnail" style="height: 420px;" src="/storages/imgs/negos.PNG" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-2 mb-3">
            </div>
            <div class="col-md-8 mb-3">
                <img class="img-thumbnail" style="height: 420px;" src="/storages/imgs/payotte.PNG" alt="">
            </div>
            <div class="col-md-2 mb-3">
            </div>
        </div>
    </div>


    <P>
        <button class="btn btn-primary col-12 mb-2 p-2 mt-5" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            CONTACTEZ UN GESTIONNAIRE
        </button>

    <div class="collapse" id="collapseExample">
        <form id="fm4">
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

                            <div class=" col-md-4">
                                <label>Localisation du Bien</label>
                                <input type="text" class="form-control" id="loca_bien" name="loca_bien">

                            </div>
                            <div class=" col-md-4">
                                <label>Mail</label>
                                <input type="text" class="form-control" id="Mail" name="Mail"
                                    placeholder="exemple@gmail.com">

                            </div>
                            <div class=" col-md-4">
                                <label for="inputEmail4">Type de bien</label>

                                <select class="form-control" id="type_bien" name="type_bien">
                                    <option value="">Selection</option>
                                    <option value="Maison">Maison</option>
                                    <option value="Appartement">Appartement</option>
                                    <option value="Immeuble">Immeuble</option>
                                    <option value="Local_commercial">Local commercial</option>
                                </select>

                            </div>
                        </div>




                        <div class="text-center h2 text-white font-weight-bolder" data-aos="fade-right"
                            data-aos-duration="3000">
                            Détails du bien
                        </div>

                        <div class="row">
                            <div class=" col-md-6">
                                <label for="inputEmail4" class="mt-4" data-aos="fade-right"
                                    data-aos-duration="4000">Nombre
                                    de pièce</label>



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
                                    data-aos-duration="10000">Nombre
                                    d'étage</label>



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

                            <button id="send_do_gest" class="btn btn-primary mb-2 p-2 mt-5"> Envoyez <i
                                    class="fas fa-paper-plane ml-3"></i></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        </P>

    </div>