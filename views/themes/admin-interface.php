<?php 
use Synext\Sessions\Session;
use Synext\Requests\Redirect;
if(Session::checkSessionVariable('admine')){Redirect::to("/nadmin/connect_admin");} // si la session existe on redirige sur la page user admin connecter
?>


<!DOCTYPE html>
<html lang="fr">

<head>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/64df2373fc.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" href="2_img/logo_gest_note.png">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/templates/old/css/style.css">
    <link rel="stylesheet" href="/templates/old/css/particule.css">

    <!-- admin -->
    <link rel="stylesheet" href="/templates/old/css/style.css">
    <link rel="stylesheet" href="/templates/old/css/particule.css">

    <!-- admin -->
    <title>NAS-SARRA IMMOBILIER</title>



    <title>ADMINISTRATION</title>
</head>

<body>
    <div class="mpart" id="particles-js">
        <!-- debu contenu -->
        <?=$contents ?? ""; ?>
        <!-- fin contenu -->
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

    <script src="/templates/old/js/particles.js"></script>
    <script src="/templates/old/js/app.js"></script>
    <script src="/templates/old/js/centrer.js"></script>
    <script src="/templates/old/js/jquery.js"></script>
    <script src="/templates/js/sweetalert2.min.js"></script>
    <script src="/templates/old/js/mscrpt.js"></script>
    <script src="/templates/old/js/notify.min.js"></script>
    <!-- <script src="/templates/old/js/fred.js"></script> -->


</body>

</html>