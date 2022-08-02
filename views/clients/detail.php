<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;
use Synext\APP\Client;
use Synext\Helpers\Helpers;

$db_Immo = new Client;

$title = "Description | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>

<div class="container"><br>
    <button class="btn btn-outline-secondary" id="back"> <i class="fa fa-arrow-left"></i> Retour </button>
    <div class="row">
        <p>

            <?php
            echo $db_Immo->Ondetail($params['idel'], $params['reso'], $params['type']);

            ?>
        </p>
    </div>
</div><br><br><br><br><br><br>