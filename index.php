<?php

use Synext\Routers\Router;

require '../vendor/autoload.php';
/** Error handler */
// (new \Whoops\Run())->pushHandler(new \Whoops\Handler\PrettyPageHandler())->register();

/**public folder */
$public_paths = DIRECTORY_SEPARATOR . basename($_SERVER['DOCUMENT_ROOT']);
/** global views paths */
$view_paths = DIRECTORY_SEPARATOR . dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

/** Router  */
$router = new Router($view_paths, $public_paths);


$api = "/api/v2";
$clients = "/";
$admin_cnct = "/nadmin";
$router


    ->get($admin_cnct . "/connect_admin", "admins/index")

    ->get($admin_cnct . "/connect_admin/utilisateurs", "admins/utilisateurs")

    ->get($admin_cnct . "/connect_admin/vente-new", "admins/vente-new")

    ->get($admin_cnct . "/connect_admin/location-new", "admins/location-new")

    ->get($admin_cnct . "/connect_admin/reservation", "admins/reservation")

    ->get($admin_cnct . "/connect_admin/vente", "admins/vente")

    ->get($admin_cnct . "/connect_admin/location", "admins/location")

    ->get($admin_cnct . "/connect_admin/recrutement", "admins/recrutement")

    ->get($admin_cnct, "admins/auth")

    ->get($admin_cnct . "/mot-de-passe-oublier", "admins/4gotpass")

    ->getpost($admin_cnct . "/connect_admin/upload/[*:id_article]/[*:retour]", "admins/upload")

    ->get($admin_cnct . "/connect_admin/galerie/[*:id_article]/[*:retour]", "admins/galerie")


    ->resource([
        ["POST", $api . "/auth", "api/api_auth"],

        ["DELETE", $api . "/auth", "api/api_auth"],

        ["GET", $api . "/auth", "api/api_auth"],

        ["PATCH", $api . "/auth", "api/api_auth"],

        ["PATCH", $api . "/comm", "api/api_comm"],

        ["DELETE", $api . "/comm", "api/api_comm"],

        ["POST", $api . "/add-vent", "api/api_add-vent"],

        ["POST", $api . "/add-location", "api/api_add-location"],

        ["DELETE", $api . "/add-vent", "api/api_add-vent"],

        ["DELETE", $api . "/add-location", "api/api_add-location"],

        ["PATCH", $api . "/add-vent", "api/api_add-vent"],

        ["PATCH", $api . "/add-location", "api/api_add-location"],

        ["POST", $api . "/rech-immo", "api/api_rech-immo"],

        ["DELETE", $api . "/del-img", "api/api_del-img"],

        ["POST", $api . "/add-recrut", "api/api_add-recrut"],

        ["DELETE", $api . "/add-recrut", "api/api_add-recrut"],

        ["PATCH", $api . "/add-recrut", "api/api_add-recrut"],
    ])

    /***************************************************************************************************************************************************/
    /***************************************************************************************************************************************************/
    /***************************************************************************************************************************************************/


    ->get($clients, "clients/index")

    ->get($clients . "rejoindre", "clients/rejoindre")

    ->get($clients . "qui-sommes-nous", "clients/qui-sommes-nous")

    ->get($clients . "togo-en-quelques-mots", "clients/togo-en-quelques-mots")

    ->get($clients . "acheter", "clients/acheter")

    ->get($clients . "acheter/all", "clients/acheter-all")

    ->get($clients . "vendre", "clients/vendre")

    ->get($clients . "vendre/all", "clients/vendre-all")

    ->get($clients . "louer", "clients/louer")

    ->get($clients . "louer/all", "clients/louer-all")

    ->get($clients . "investir", "clients/investir")

    ->get($clients . "faire-gerer", "clients/faire-gerer")

    ->get($clients . "faire-construire", "clients/faire-construire")

    ->get($clients . "contacts", "clients/contacts")

    ->get($clients . "recherche/[*:typebien]/[*:pays]/[*:ville]/[*:quart]", "clients/recherche")

    ->get($clients . "detail/[*:idel]/[*:reso]/[*:type]", "clients/detail")

    /**
     * Resources Clients 
     */
    ->resource([
        ["POST", $api . "/cli-ville", "api/api_cliville"],
        ["POST", $api . "/cli-quart", "api/api_cliquart"],
        ["POST", $api . "/form1", "api/api_form1"],
        ["POST", $api . "/form2", "api/api_form2"],
        ["POST", $api . "/form3", "api/api_form3"],
        ["POST", $api . "/form4", "api/api_form4"],
        ["POST", $api . "/reservation", "api/api_reservation"],

        ["POST", $api . "/contacts", "api/api_contacts"],
    ])

    ->run();