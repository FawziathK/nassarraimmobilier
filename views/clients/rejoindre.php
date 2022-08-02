<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;

$title = "Rejoindre ? | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>
<div class="container" style="margin-top: 20px;">
    <div class="font-weight-bolder mb-1 text-right" style="font-size: 30px;">
        <center>
            <span class="clo fs-2 "> NOUS
                REJOINDRE</span>
        </center>
    </div>
    <div style="height: 3px; background-color:black;"></div>
    <br> <br>
    <div class="row">
        <p class="container" style="font-size: 20px;">

            NAS-SARRA est une entreprise, DYNAMIQUE, INNOVANTE, CONNECTEE, et orientée SATISFACTION CLIENT. Si vous
            aspirez à être le meilleur dans votre domaine et que vous aimez relever des challenges, rejoignez-nous. Et
            surtout restez vous-même !


        </p>

    </div>

    <div class=" d-md-none">
        <center>
            <div class="col-12 mb-1">
                <img src="/storages/imgs/code1.PNG" class="img-thumbnail" alt="">
            </div>
            <div class="col-12 mb-1">
                <img src="/storages/imgs/code2.PNG" class="img-thumbnail" alt="">
            </div>
            <div class="col-12 mb-1">
                <img src="/storages/imgs/code3.PNG" class="img-thumbnail" alt="">
            </div>
        </center>
    </div>

    <div class="d-none d-md-block">
        <center>
            <img src="/storages/imgs/Nous_rejoindre.PNG" class="img-fluid" alt="">
        </center>
    </div>

    <center>
        <img src="/storages/imgs/togo.PNG" class="img-thumbnail">
    </center>
    <br><br>
    <center>
        <img src="/storages/imgs/recrutement.PNG" class="img-thumbnail">
    </center>

</div>