<? #layout::themes/client-interface; 
?>

<?php

use Synext\Components\Htmls\Header;

$title = "Contacts | NAS-SARRA Immobilier";
$description = "";
$keywords = "";
$url = $_SERVER['REQUEST_URI'];

$headers = Header::show($title, $description, $keywords, $url);
?>
<style>

</style>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="font-weight-bolder mb-1 text-right" style="font-size: 30px;">
                <p class="clo fs-2"> CONTACTEZ NOUS </p>
            </div>
            <div style="height: 3px; background-color:black;"></div>
            <br>
            <form>
                <div class="form-outline mb-4">
                    <label class="form-label" for="nom">Nom & Prénom(s)</label>
                    <input type="text" id="nom" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="mail">Adresse Mail</label>
                    <input type="text" id="mail" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="obj">Objet</label>
                    <input type="text" id="obj" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4"></textarea>
                </div>

                <button type="button" id="contacter_form" class="btn btn-primary btn-block w-100 mb-4">Envoyer le
                    message</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>