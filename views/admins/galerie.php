<? #layout::themes/admin_cnct-interface; ?> 
<?php 
use Synext\APP\Immo;
use Synext\Sessions\Session;
Session::check();
if(isset($params['id_article'])) {
    $_SESSION['id_article'] = $params['id_article'];
}
$db_Immo = (new Immo);
if ($params['retour'] == 'vente') {
    $table = 'maison_achat';
    $query_projet = $db_Immo->ventes($params['id_article']); 
} else {
    $table = 'maison_louer';
    $query_projet = $db_Immo->locas($params['id_article']); 
}
$query_img = $db_Immo->get_img($table,$params['id_article']);
?>


<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        Galerie des images de : <span class="text-primary"> <?=$query_projet->titre?> </span>
    </h1> 
    <form id="search_p" class="h4 text-primary font-weight-bolder" method="post">
        <a href="/nadmin/connect_admin/<?=$params['retour']?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Retour </a>
    </form>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach ($query_img as $key => $value): ?>
            <div id="row_<?=$value->id_photo_article?>" class="col mb-4">
                <div class="card h-100 border">
                    <img src="/storages/immos/<?=$value->photo?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <i class="fa fa-trash text-danger mr-3" style="cursor: pointer; font-size: 18px;" data-toggle="modal" data-target="#supsphoto_<?=$value->id_photo_article?>"></i>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php foreach ($query_img as $key => $value): ?>
        <div class="modal fade" id="supsphoto_<?=$value->id_photo_article?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header text-danger h5 font-weight-bolder text-center">
                    Suppression...
                    </div>
                    <div class="modal-body" >
                        <p class="text-center" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:1.7em">Cette action est irréverssible.</p><br>
                        <p class="text-center mb-4" style="font-size:1.4em">Voulez-vous vraiment effectuer cette opération?</p>
                        <div class="row row-cols-2 row-cols-md-2">
                            <div class="col-md-6">
                                <button class="btn btn-success" data-dismiss="modal">Non</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <button class="btn btn-danger del_img" id_photo_article="<?=$value->id_photo_article?>" data-dismiss="modal">Oui</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>