<? #layout::themes/admin_cnct-interface; ?> 
<?php 
use Synext\APP\Immo;
use Synext\Sessions\Session;
use Synext\Requests\Redirect;
Session::check();
if(isset($params['id_article'])) {
    $_SESSION['id_article'] = $params['id_article'];
}
$db_Immo = (new Immo);
if ($params['retour'] == 'vente') {
  $query_projet = $db_Immo->ventes($params['id_article']); 
} else {

  $query_projet = $db_Immo->locas($params['id_article']); 
}
?> 

<?php 
  if(isset($_POST['send']))
  {
    // compte le nombre de fichiers
    $countfiles = count($_FILES['img']['name']);
    // boucler sur les fichiers
    for($i=0;$i<$countfiles;$i++)
    {
      if ($_FILES['img']['size'][$i] <= 1310720)
      {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['img']['name'][$i]);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            $filename = $_FILES['img']['name'][$i];
            $newname = 'IMMO_VENTE_NAS_SARA_'.rand(0,9).'_'.rand(0,999999999999999);
            $filename = htmlentities($newname .".". $extension_upload); 

            move_uploaded_file($_FILES['img']['tmp_name'][$i],dirname(__DIR__,2).'/public_html/storages/immos/'.$filename);

            $add='INSERT INTO photo_article(photo,id_article) VALUES(:photo,:id_article)'; 
            $data_add = [
              'photo' => $filename,
              'id_article' => $_SESSION['id_article']
            ];
            $db_Immo->add($add,$data_add);
        }
      }               
    }
    // recharger la page pour vider la form et eviter que les fichers soit deposer plusieurs fois
    Redirect::to($_SERVER['REQUEST_URI']);
  }
?>


<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        Ajouter des images à : <span class="text-primary"> <?=$query_projet->titre?> </span>
    </h1> 
    <form id="search_p" class="h4 text-primary font-weight-bolder" method="post">
        <a href="/nadmin/connect_admin/<?=$params['retour']?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Retour </a>
    </form>
</div>

<div class="container">
  <form class="container-fluid" method="post" id="img_form" enctype="multipart/form-data">
  <div hidden>
        <input type="text" id="id_prod" name="id_prod" value="'.$_POST['id_prod'].'">
    </div>
    <div class="custom-file mb-3">
        <input type="file" multiple="multiple" name="img[]" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choisisez les images ...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
    <button type="submit" name="send" id="add_img_btn" class="btn btn-outline-success">
        Envoyer les images <i class="ml-2 fa fa-paper-plane" aria-hidden="true"></i>
    </button>          
  </form>
</div>

<script src="/templates/old/js/jquery.js"></script> 