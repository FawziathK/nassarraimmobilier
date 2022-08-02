<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $headers ?? ""; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/templates/css/aos.css">
    <link rel="stylesheet" href="/templates/css/style.css">
    <link rel="stylesheet" href="/templates/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/templates/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/templates/css/sweetalert2.min.css" />
    <script src="https://kit.fontawesome.com/64df2373fc.js" crossorigin="anonymous"></script>
    <style>
    * {
        font-family: Roboto;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/storages/imgs/logo.png" alt="" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: auto;">
                    <?php $links = array("/", "/qui-sommes-nous", "/togo-en-quelques-mots"); ?>
                    <li class="nav-item"> <a class="nav-link  <?php if (in_array($_SERVER['REQUEST_URI'], $links, true)) {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/"> ACCUEIL </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item <?php if ($_SERVER['REQUEST_URI'] === "/qui-sommes-nous") {
                                                            echo "text-info";
                                                        } else {
                                                            echo "text-dark";
                                                        } ?>" href="/qui-sommes-nous" style="font-weight: bold;"> Qui
                                    sommes nous ? </a></li>
                            <li><a class="dropdown-item <?php if ($_SERVER['REQUEST_URI'] === "/togo-en-quelques-mots") {
                                                            echo "text-info";
                                                        } else {
                                                            echo "text-dark";
                                                        } ?>" href="/togo-en-quelques-mots" style="font-weight: bold;">
                                    Le Togo en quelques mots </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/acheter") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/acheter">
                            ACHETER </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/vendre") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/vendre"> VENDRE
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/louer") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/louer"> LOUER
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/investir") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/investir">
                            INVESTIR </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/faire-gerer") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/faire-gerer">
                            FAIRE GERER </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/faire-construire") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;"
                            href="/faire-construire"> FAIRE CONSTRUIRE </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/contacts") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/contacts">
                            CONTACT </a> </li>
                    <li class="nav-item"> <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] === "/rejoindre") {
                                                                    echo "text-dark";
                                                                } else {
                                                                    echo "text-info";
                                                                } ?>" style="font-weight: bold;" href="/rejoindre">
                            REJOINDRE </a> </li>
                </ul>
                <form class="d-flex">

                </form>
            </div>
        </div>
    </nav>

    <?= $contents ?? ""; ?>
    <div class="sticky-bottom">
        <footer class="container bg-light d-md-none text-center text-dark pt-3 mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 text-dark">

<<<<<<< HEAD
                        <div style="font-weight:300; font-size: 18px; font-weight: bold;">NAS-SARRA <em>Immobilier </em><br>
                             <i class="fa fa-envelope" aria-hidden="true"></i> contact@nassarraimmobilier.com <br>
                             <i class="fas fa-phone fa-flip-horizontal"></i>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: green;" href="#!"
                            role="button"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #0088cc;"
                            href="#!" role="button"><i class="fab fa-telegram"></i></a> Tel: (+228) 90 90 29 17 </div>
=======
                        <!-- <div style="font-weight:300; font-size: 18px; font-weight: bold;">NAS-SARRA <em>Immobilier
                            </em><br>
                            contact@nassarraimmobilier.com <br>
                            Tel: (+228) 90 90 29 17 </div> -->

                        <div style="font-weight:300; font-size: 18px; font-weight: bold;">NAS-SARRA <em>Immobilier
                            </em><br>
                            <i class="fa fa-envelope" aria-hidden="true"></i> contact@nassarraimmobilier.com <br>
                            <i class="fas fa-phone fa-flip-horizontal"></i>
                            <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: green;"
                                href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #0088cc;"
                                href="#!" role="button"><i class="fab fa-telegram"></i></a> Tel: (+228) 90 90 29 17
                        </div>

>>>>>>> 31091d60347ce9ef52a9fdd4430621f727e6bfa0
                    </div>
                    <div class="col-md-4 text-dark"></div>
                    <div class="col-md-4">
                        <span class="text-center" style="font-weight:300; font-size: 18px; font-weight: bold;">
                            Suivez-nous
                        </span> <br>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #3b5998;"
                            href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #55acee;"
                            href="#!" role="button"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #e1306c;"
                            href="#!" role="button"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: red;" href="#!"
                            role="button"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
<<<<<<< HEAD
        <div class="p-3 mt-1 bg-white text-primary container d-md-none" style="font-weight: bold;">
            Copyright: NAS-SARRA Group, Lomé, Togo | <?= date("Y") ?> © Tous droits réservés
        </div>
=======
        <!-- <div class="p-3 mt-1 bg-white text-primary container d-md-none" style="font-weight: bold;">
            Copyright: NAS-SARRA Group, Lomé, Togo | <?= date("Y") ?> © Tous droits réservés
        </div> -->

        <!-- <div class="p-3 mt-1 bg-white text-info container d-md-none" style="font-weight: bold;">
            Copyright: NAS-SARRA Group, Lomé, Togo | <?= date("Y") ?> © Tous droits réservés
        </div> -->

>>>>>>> 31091d60347ce9ef52a9fdd4430621f727e6bfa0
    </div>
    <div class="sticky-bottom">
        <footer class="d-none d-md-block text-center text-white pt-3 mt-3">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 text-white">
<<<<<<< HEAD
                        <div style="font-weight:300; font-size: 18px; font-weight: bold;">NAS-SARRA <em>Immobilier </em><br>
                             <i class="fa fa-envelope" aria-hidden="true"></i> contact@nassarraimmobilier.com <br>
                             <i class="fas fa-phone fa-flip-horizontal"></i>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: green;" href="#!"
                            role="button"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #0088cc;"
                            href="#!" role="button"><i class="fab fa-telegram"></i></a> Tel: (+228) 90 90 29 17 </div>
=======

                        <!-- <div style="font-weight:300; font-size: 18px; font-weight: bold;">NAS-SARRA <em>Immobilier
                            </em><br>
                            contact@nassarraimmobilier.com <br>
                            Tel: (+228) 90 90 29 17 </div> -->
                        <div style="background-image: url('/storages/imgs/footerim.png');background-repeat: no-repeat;">


                            <div style="font-weight:300; font-size: 18px; font-weight: bold;">
                                <div>
                                    NAS-SARRA
                                    <em>Immobilier
                                    </em><br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> contact@nassarraimmobilier.com
                                    <br>
                                    <i class="fas fa-phone fa-flip-horizontal"></i>
                                    <a class="btn btn-primary btn-floating border-0 m-1"
                                        style="background-color: green;" href="#!" role="button"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-primary btn-floating border-0 m-1"
                                        style="background-color: #0088cc;" href="#!" role="button"><i
                                            class="fab fa-telegram"></i></a> Tel: (+228) 90 90 29 17
                                </div>


                            </div>
                        </div>
>>>>>>> 31091d60347ce9ef52a9fdd4430621f727e6bfa0
                    </div>
                    <div class="col-md-4 text-dark"></div>
                    <div class="col-md-4">
                        <span class="text-center text-dark"
                            style="font-weight:300; font-size: 18px; font-weight: bold;">
                            Suivez-nous
                        </span> <br>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #3b5998;"
                            href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #55acee;"
                            href="#!" role="button"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: #e1306c;"
                            href="#!" role="button"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-primary btn-floating border-0 m-1" style="background-color: red;" href="#!"
                            role="button"><i class="fab fa-youtube"></i></a>
                    </div>
                </div> <br><br>
            </div>
        </footer>
<<<<<<< HEAD
            <div class="p-3 mt-1 bg-white text-info container d-none d-md-block"
                style="font-weight: bold;">
                Copyright: NAS-SARRA Group, Lomé, Togo | <?= date("Y") ?> © Tous droits réservés
            </div>
        
=======

        <div class=" bg-white text-info container" style="font-weight: bold;">
            Copyright: NAS-SARRA Group, Lomé, Togo | <?= date("Y") ?> © Tous droits réservés
        </div>


        <!-- <div class="p-3 mt-1 bg-white text-info container d-none d-md-block" style="font-weight: bold;">
            Copyright: NAS-SARRA Group, Lomé, Togo | <?= date("Y") ?> © Tous droits réservés
        </div> -->


>>>>>>> 31091d60347ce9ef52a9fdd4430621f727e6bfa0
    </div>

    <form method="post" id="form_reser">
        <div class="modal fade" id="modal_reservation" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modal_reservation_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="h5 mt-auto mb-auto font-weight-bolder text-success" id="modal_reservation_label"
                            style="font-family: Roboto;">
                            Formulaire de Visite (
                            <span id="tit_a" style="font-family: Roboto;">
                                Maison de la vide de la rempli de la beaucoup beaucoup
                            </span>
                            )
                        </h6>
                        <button hidden type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div hidden>

                            <input type="text" name="id_article" id="id_article">
                        </div>

                        <p class="text-center">
                            <em>Vos informations ...</em>

                        <div class="row">
                            <div class="col-sm-12 mb-1">
                                <input type="text" id="nom_user" class="form-control mb-1"
                                    placeholder="Nom & Prénom(s)">
                            </div>
                            <div class="col-sm-6 mb-1">
                                <input type="text" id="tel_user" class="form-control mb-1" placeholder="Tel">
                            </div>
                            <div class="col-sm-6 mb-1">
                                <input type="text" id="mail_user" class="form-control mb-1" placeholder="Mail">
                            </div>
                        </div>
                        </p>
                        <p class="text-center">
                            <em class="text-center">Choisisez la date de votre Visite ...</em>
                        </p>
                        <div class="row row-cols-3 row-cols-md-3">

                            <div class="col-sm-4 mb-1">
                                <select class="form-select" name="jj" id="jj">
                                    <option value="0">jj</option>
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4 mb-1">
                                <select class="form-select" name="mm" id="mm">
                                    <option value="0">mm</option>
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4 mb-1">
                                <select class="form-select" name="aaaa" id="aaaa">
                                    <option value="0">aaaa</option>
                                    <?php
                                    echo '<option value="' . date("Y") . '">' . date("Y") . '</option>';
                                    ?>
                                </select>
                            </div>
                        </div>
                        <p class="text-center mt-2">
                            <em>Choisisez l'heure de votre Visite ...</em>
                        </p>
                        <div class="row row-cols-2 row-cols-md-2">
                            <div class="col-sm-4 mb-1">
                                <select class="form-select" name="hh" id="hh">
                                    <option value="0">hh</option>
                                    <?php
                                    for ($i = 8; $i <= 17; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4 mb-1">
                                <select class="form-select" name="min" id="min">
                                    <option value="200">min</option>
                                    <?php
                                    echo '
                                        <option value="00">00</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                    ';
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close_reser" class="btn btn-secondary"
                            data-bs-dismiss="modal">Annuler</button>
                        <button disabled id="val_reser" type="button" class="btn btn-primary">Valider La
                            Visite</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <style>
    #olo {
        transition: all 1.5s;
    }

    #olo:hover {
        transform: scale(1.1);
        background-position: -10px;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        transition: all 1.5s;
    }

    ;

    #olo:active {
        transform: scale(1);
        background-position: 500px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="/templates/old/js/jquery.js"></script>
    <script src="/templates/js/sweetalert2.min.js"></script>
    <script src="/templates/old/js/mscrpt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="/templates/old/js/aos.js"></script>
    <script src="/templates/old/js/owl.carousel.js"></script>

    <script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel();

    })
    </script>
    <script>
    AOS.init();
    </script>
</body>

</html>