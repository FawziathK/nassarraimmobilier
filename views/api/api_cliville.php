<?php


use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\APP\Client;

$data_client = (new Client);
if (Http::methods("POST")) {
    $data = Json::input();
    $pays = $data["pays"];

    $r = " <option value='' style='font-family: Roboto;'>Ville</option>";
    foreach ($data_client->onchange($pays) as $key) {
        $r .= '
        <option value="' . $key->ville . '"style="font-family: Roboto;">' . $key->ville . '</option>
        ';
    }

    $val = array(
        "error" => false,
        "msg" => $r,
    );
    echo Json::to($val);
    exit;
}