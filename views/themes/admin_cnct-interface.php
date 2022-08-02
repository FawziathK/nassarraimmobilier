<?php  
use Synext\Sessions\Session;
use Synext\Requests\Redirect;
if(!Session::checkSessionVariable('admine')){Redirect::to("/nadmin");} // si la session n'existe pas on redirige sur la page user auth admin
?>


<!DOCTYPE html>
<!-- saved from url=(0054) -->
<html id="cool_top" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> KS </title>
    <script src="https://kit.fontawesome.com/64df2373fc.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="/templates/old/admin_inter/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="/templates/old/css/style2.css">

    <!-- Favicons -->
    <!--link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c"-->


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="/templates/old/admin_inter/dashboard.css" rel="stylesheet">
    <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.988.0" data-gr-ext-installed="">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="">ADMINISTRATION</a>
        <button id="trois_t" class="navbar-toggler position-absolute d-md-none collapsed" type="button"
            data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input hidden class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <div class="row row-cols-2 row-cols-md-2">
                <div class="col">
                    <button class="btn btn-default button" data-toggle="modal" data-target="#change_pass"
                        class="text-light btn btn-default">
                        <i class="fas text-success font-weight-bolder fa-key "></i>
                    </button>

                </div>
                <div class="col">

                    <div id="modal-container">
                        <div class="modal-background">
                            <div class="modal" style=" width :350px !important;">
                                <p>Voulez-vous vraiment vous déconnecter?</p><br><br>
                                <p>
                                    <button class="btn btn-success" id="non">Non</button>
                                    <button class="btn btn-danger" id="oui" data-toggle="modal"
                                        data-target="#dis_cncttyy">Oui</button>
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="btn btn-default button" data-toggle="modal" data-target="#dis_cnct"
                            class="text-light btn btn-default" id="seven">
                            <i class="fa text-danger font-weight-bolder fa-power-off"></i>
                        </button>
                    </div>



                </div>
            </div>
        </ul>
    </nav>
    <!-- Modal dis_cnct -->
    <div class="modal fade" id="change_pass" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" id="change_pass_form">
                    <div class="modal-header text-danger h5 font-weight-bolder text-center">
                        Changer Mon Mot de Passe
                    </div>
                    <div class="modal-body">
                        <label class="mb-1" for="pass_anci">Ancien Mot de Passe</label>
                        <input id="pass_anci" class="form-control mb-3" type="password" name="pass_anci">
                        <label class="mb-1" for="new_pass">Nouveau Mot de Passe</label>
                        <input id="new_pass" class="form-control mb-3" type="password" name="new_pass">
                        <label class="mb-1" for="conf_pass">Confirmez le Nouveau Mot de Passe</label>
                        <input id="conf_pass" class="form-control mb-3" type="password" name="conf_pass">
                        <div id="error" class="mt-2">

                        </div>
                        <button id="changer" class="btn btn-outline-success mt-3"> Changer</button>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" id="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin">
                                <i class="fab fa-buffer"></i> Accueil
                            </a>
                        </li>

                        <!-- <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/commentaires'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/commentaires">
                                <i class="fas fa-comments"></i> Commentaires
                            </a>
                        </li> -->

                        <!-- <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/etoiles'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/etoiles">
                                <i class="fas fa-star"></i> Etoiles
                            </a>
                        </li> -->

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/vente-new'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/vente-new">
                                <i class="fa fa-plus" aria-hidden="true"></i> Vente New
                            </a>
                        </li>

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/vente'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/vente">
                                <i class="fa fa-building-o" aria-hidden="true"></i> Ventes
                            </a>
                        </li>

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/location-new'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/location-new">
                                <i class="fas fa-plus"></i> Location New
                            </a>
                        </li>

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/location'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/location">
                                <i class="fas fa-home"></i> Locations
                            </a>
                        </li>

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/reservation'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/reservation">
                                <i class="fa fa-ticket"></i> Reservations
                            </a>
                        </li>

                        <li class="nav-item mb-3" style="font-size: 18px;">
                            <a class="nav-link <?php if($_SERVER['REQUEST_URI'] === '/nadmin/connect_admin/recrutement'){ echo 'active'; } ?>"
                                href="/nadmin/connect_admin/recrutement">
                                <i class="fa fa-tasks"></i> Recrutements
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="chartjs-size-monitor"
                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <div id="le_conteneur">
                    <?=$contents ?? ""; ?>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

<div hidden>
    <button class="btn btn-default button" data-toggle="modal" data-target="#dis_cncttyy"
        class="text-light btn btn-default" id="attente">
        <i class="fa text-danger font-weight-bolder fa-power-off"></i>
    </button>
</div>

<!-- Modal -->
<div class="modal fade bg-dark" id="dis_cncttyy" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-danger">
            <div class="modal-body bg-dark">
                <h1 class="h1 text-white font-weight-bolder" id="staticBackdropLabel">
                    Déconnexion en cours ....
                </h1>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://kit.fontawesome.com/64df2373fc.js" crossorigin="anonymous"></script>
<script src="/templates/old/admin_inter/feather.min.js"></script>
<script src="/templates/old/admin_inter/Chart.min.js"></script>
<script src="/templates/old/admin_inter/dashboard.js"></script>
<script src="/templates/old/js/notify.min.js"></script>
<script src="/templates/js/sweetalert2.min.js"></script>
<script src="/templates/old/js/script.js"></script>
<script src="/templates/old/js/mscrpt.js"></script>