<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Recrutement;
use Synext\APP\Admins;
$db_Recrutement = (new Recrutement);
$db_Admins = (new Admins);
$nrecrutement = $db_Admins->numberocur("recrutement")->count;

?> 


<!-- Page Heading -->
<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Recrutements </h1> 
    <form id="search_p" class="h4 text-info font-weight-bolder" method="post">
        <?php 
            if( $nrecrutement > 1){ echo $nrecrutement.' recrutement'; } else { echo $nrecrutement.' recrutements'; }
        ?>
    </form>
</div>

<div class="">
    <div class="accordion mb-4" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Formulaire d'ajout de recrutement
                </button>
            </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <label class="mb-1" style="font-weight :bold;" for="titre_recrut">Titre</label>
                <input class="form-control mb-3" type="text" id="titre_recrut">
                <label class="mb-1" style="font-weight :bold;" for="text_recrut">Text</label>
                <textarea class="form-control mb-3" id="text_recrut" rows="3"></textarea>
                <div class="row row-cols-2">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="add_recrut" class="btn btn-success">Ajouter <i class="fa fa-plus ml-2"></i></button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-hover" style="font-size: 16px;"> 
        <thead>
            <tr class="text-dark font-weight-bolder table-info">
                <th class="text-dark font-weight-bolder text-center" scope="col">Liste Complète</th>
            </tr>
        </thead>
        <tbody id="t_body">
            <?php 
                foreach ($db_Recrutement->get() as $key => $value) {
                    echo  <<<HTML
                        <tr>
                            <td>
                                <label class="mb-1" style="font-weight :bold;" for="">Titre</label>
                                <input class="form-control mb-2" type="text" value="{$value->titre}" id="titre_{$value->id}">
                                <label class="mb-1" style="font-weight :bold;" for="">Text</label>
                                <textarea class="form-control mb-2" id="text_{$value->id}" rows="3">{$value->text}</textarea>
                                <div class="row row-cols-2 mb-2">
                                    <div class="col-md-6">
                                        <button recrut_id="{$value->id}" class="btn btn-danger trash_recrut">Supprimer <i class="fa fa-trash ml-2"></i></button>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button recrut_id="{$value->id}" class="btn btn-success edit_recrut">Modifier <i class="fa fa-edit ml-2"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
HTML;
                }
            ?>
        </tbody>
    </table>
</div>

