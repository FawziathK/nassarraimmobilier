<?php

use Synext\Components\Emails\SendMail;
use Synext\Requests\Http;
use Synext\Requests\Json;
use Synext\Sessions\Session;
use Synext\APP\Admins;

$db_Admins = (new Admins);

function htmlrender($title,$messages){ 
    return <<<HTML
    <!doctype html>
        <html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; requestsarset=UTF-8"><title>{$title}</title><style>@media only screen and (max-width:620px){ table[class=body] h1{ font-size:28px !important; margin-bottom:10px !important;} table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a{ font-size:16px !important;} table[class=body] .wrapper, table[class=body] .article{ padding:10px !important;} table[class=body] .content{ padding:0 !important;} table[class=body] .container{ padding:0 !important; width:100% !important;} table[class=body] .main{ border-left-width:0 !important; border-radius:0 !important; border-right-width:0 !important;} table[class=body] .btn table{ width:100% !important;} table[class=body] .btn a{ width:100% !important;} table[class=body] .img-responsive{ height:auto !important; max-width:100% !important; width:auto !important;}} @media all{ .ExternalClass{ width:100%;} .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{ line-height:100%;} .apple-link a{ color:inherit !important; font-family:inherit !important; font-size:inherit !important; font-weight:inherit !important; line-height:inherit !important; text-decoration:none !important;} #MessageViewBody a{ color:inherit; text-decoration:none; font-size:inherit; font-family:inherit; font-weight:inherit; line-height:inherit;} .btn-primary table td:hover{ background-color:#34495e !important;} .btn-primary a:hover{ background-color:#34495e !important; border-color:#34495e !important;}} </style></head><body class="" style="background-color:#f6f6f6; font-family:sans-serif; -webkit-font-smoothing:antialiased; font-size:14px; line-height:1.4; margin:0; padding:0; -ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;"><span class="preheader" style="color:transparent; display:none; height:0; max-height:0; max-width:0; opacity:0; overflow:hidden; mso-hide:all; visibility:hidden; width:0;">Mail Service Message.</span><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse:separate; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; background-color:#f6f6f6;"><tr><td style="font-family:sans-serif; font-size:14px; vertical-align:top;">&nbsp;</td><td class="container" style="font-family:sans-serif; font-size:14px; vertical-align:top; display:block; Margin:0 auto; max-width:580px; padding:10px; width:580px;"><div class="content" style="box-sizing:border-box; display:block; Margin:0 auto; max-width:580px; padding:10px;"><table class="main" style="border-collapse:separate; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; background:#ffffff; border-radius:3px;"><tr><td class="wrapper" style="font-family:sans-serif; font-size:14px; vertical-align:top; box-sizing:border-box; padding:20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%;"><tr><td style="font-family:sans-serif; font-size:14px; vertical-align:top;"><table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse:separate; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%; box-sizing:border-box;"><tbody><tr><td align="left" style="font-family:sans-serif; font-size:14px; vertical-align:top; padding-bottom:15px;"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;height:auto;"><tbody style="font-family:sans-serif; font-size:14px; font-weight:normal; margin:0; Margin-bottom:15px;">{$messages} </tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table><div class="footer" style="clear:both; Margin-top:10px; text-align:center; width:100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100%;"><tr><td class="content-block" style="font-family:sans-serif; vertical-align:top; padding-bottom:10px; padding-top:10px; font-size:12px; color:#999999; text-align:center;"><span class="apple-link" style="color:#999999; font-size:12px; text-align:center; font-family:Verdana; box-sizing:border-box; ">Envoyé avec ♥ par Dev Coding !</span></td></tr></table></div></div></td><td style="font-family:sans-serif; font-size:14px; vertical-align:top;">&nbsp;</td></tr></table></body></html>
HTML;
}

function messages(array $data_messages){
    $messages = "";
    foreach($data_messages as $key => $value){
        $messages.= "
        <tr>
            <td style='text-align: center; border: 1px solid rgb(241, 241, 241); font-size: 16px;'>{$key}</td>
            <td style='text-align: center; border: 1px solid rgb(241, 241, 241); font-size: 16px;'><strong>{$value}</strong></td>
        <tr>
        ";
    }
    return $messages;
}

function sendmail($from,$to,$reply_to,$subject,$message){
    $send_mail = SendMail::_to($from,$to,$reply_to,$subject,$message);
    if($send_mail){
        Http::status(200);
        echo Json::to([
             "error" => false,
             "msg" => "Un mail vous à été envoyer avec un nouveau mot de passe ..."   
        ]);exit;
    }else{
        Http::status(406);
        echo Json::to([
             "error" => true,
             "msg" => "Erreur lors de l'envoi du mail ..."
        ]);exit;
    }
}

function getToken2(){
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "1234567890";
    $codeAlphabet.= "abcdefghijkmnlopqrstuvwxyz";
    $token = "";
    
    $max = strlen($codeAlphabet); // edited
   for ($i=0; $i < 10; $i++) {
       $token .= $codeAlphabet[random_int(0, $max-1)];
   }
   return $token;
}

if(Http::methods("POST")){ 
    $data = Json::input();

    $mail = $data['mail'];
    $pass = sha1($data['pass']);
    
    if(isset($mail) AND !empty($mail) AND !empty($pass))
    {
        $resp = $db_Admins->auth($mail,$pass); 
        if ($resp == true) { 
            Session::check();
            $_SESSION['admine'] = $data['mail'];
            $val = array(
                "error"=>false,
                "msg"=>"Connexion validé ...",
            );
            echo Json::to($val);
            exit;
        } else {
            $val = array(
                "error"=>true,
                "msg"=>"Ce compte n'existe pas ...",
            );
            echo Json::to($val);
            exit;
        }
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Vous devez remplir tous les champs ...",
        );
        echo Json::to($val);
        exit;
    }  
} else if(Http::methods("DELETE")){ 
    $data = Json::input();

    $mail = $data['mail'];
    
    if(isset($mail) AND !empty($mail))
    {
        $resp = $db_Admins->gotpass($mail); 
        if ($resp == true) { 
            $getToken2 = getToken2();
            $pass = sha1($getToken2);
            $data_updt = [
                'pass' => $pass,
                'mail' => $mail
            ];

            $insert="UPDATE admine SET pass = :pass WHERE mail = :mail"; 
            $updt_pass = $db_Admins->updt($insert,$data_updt); 
            if ($updt_pass == true) { 
                $from = "le webmail du site";
                $to = $mail;
                $reply_to = $from;
                $subject = "Réinitialisation du mot de passe";
                $data_message = [
                    'New Passe' => $getToken2
                ];
                sendmail($from,$to,$reply_to,$subject,htmlrender($subject,messages($data_message)));
            } else {
                $val = array(
                    "error"=>true,
                    "msg"=>"Ereur lors de la modification",
                );
                echo Json::to($val);
                exit;
            }

        } else {
            $val = array(
                "error"=>true,
                "msg"=>"Ce mail ne correspond pas au compte administrateur ...",
            );
            echo Json::to($val);
            exit;
        }
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Vous devez remplir le champs ...",
        );
        echo Json::to($val);
        exit;
    }
} else if(Http::methods("GET")){
    Session::destroy();
    $val = array(
        "error"=>false,
        "msg"=>"OK!",
    );
    echo Json::to($val);
    exit;
} else if(Http::methods("PATCH")){
    
    $data = Json::input();
    $ses_mail = Session::get("admine");

    $resp = $db_Admins->auth($ses_mail,sha1($data['mail'])); 
    if ($resp == true) { 
        $data['mail'] = $ses_mail;
        $data['pass'] = sha1($data['pass']);

        $insert="UPDATE admine SET pass = :pass WHERE mail = :mail"; 
        $updt_pass = $db_Admins->updt($insert,$data); 
        if ($updt_pass == true) { 
            Session::destroy();
            $val = array(
                "error"=>false,
                "msg"=>"Mot de passe modifier avec succès",
            );
            echo Json::to($val);
            exit;
        } else {
            $val = array(
                "error"=>true,
                "msg"=>"Ereur lors de la modification",
            );
            echo Json::to($val);
            exit;
        }
    } else {
        $val = array(
            "error"=>true,
            "msg"=>"Erreur d'authentification ...",
        );
        echo Json::to($val);
        exit;
    }
}