<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Immo;
use Synext\APP\Admins;
$db_Immo = (new Immo);
$db_Admins = (new Admins);
$nmaison_louer = $db_Admins->numberocur("maison_louer")->count;

?> 


  
<div id="allbody">
  <div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <span class="h2 text-info font-weight-bolder">
      <?php if($nmaison_louer > 1){ echo $nmaison_louer; } else { echo $nmaison_louer; } ?>
    </span> Maison(s) ou Appartement(s) à louer</h1> 
    <form id="search_p" class="h4 text-info font-weight-bolder form-inline" method="post" style="min-width:45%;">
      <?php if($nmaison_louer != 0) {  ?> 
        <input type="search" class="form-control mr-sm-2 w-100" name="rech_vente" id="rech_vente" table="maison_louer" placeholder="Recherche ...">
      <?php } ?>   
    </form>
  </div>

  <div class="table-responsive" style="font-size: 16px;">
      <table width="100%" class="table table-hover table-striped"> 
          <thead>
            <tr class="text-dark font-weight-bolder table-info">
              <th class="text-dark p-3 font-weight-bolder" scope="col">Type</th>
              <th class="text-dark p-3 font-weight-bolder" scope="col">Ville</th>
              <th class="text-dark p-3 font-weight-bolder" scope="col">Prix (FCFA)</th>
              <th class="text-dark p-3 font-weight-bolder" scope="col">Titre</th>
              <th class="text-dark p-3 font-weight-bolder" scope="col">Pays</th>
              <th class="text-dark p-3 font-weight-bolder" scope="col">Quatier</th>
              <th class="text-dark p-3 font-weight-bolder" scope="col" style="text-align:right;">Options</th>
            </tr>
            <tr>
              <td colspan="7"></td>
            </tr>
          </thead>
          <tbody id="rest_recherche">
            <?php if($nmaison_louer == 0) { ?>
              <tr>
                  <td colspan="7">
                      <div class="card mb-3">
                          <img src="/storages/imgs/img/Droit-immobilier.gif" class="card-img-top " alt="..." style="height:600px">
                      </div>
                  </td>
              </tr>
            <?php } else { ?> 
            <?php $query_projep = $db_Immo->locas(); foreach ($query_projep as $fetch) { ?>
              <tr>
                <th style="font-weight: bold; font-family:'Courier New', Courier, monospace;">
                  <?php if ($fetch->type_log=="appart") { echo '<span class="text-info">Appartement</span>';} else { echo '<span class="text-danger">Maison</span>'; } ?>
                </th>
                <td><?=$fetch->ville?></td>
                <td><?=$fetch->prix?></td>
                <td><?=$fetch->titre?></td>
                <td><?=$fetch->pays?></td>
                <td><?=$fetch->quartier?></td>
                <td style="min-width: 15.2rem; text-align:right;"> 
                  <i data-toggle="collapse" data-target="#collapse_info<?=$fetch->id_article?>" aria-expanded="false" aria-controls="collapse_info<?=$fetch->id_article?>" class="ml-0 btn btn-default fa fa-info text-info colashow" aria-hidden="true" style="cursor: pointer"></i>
                  
                  <a href="/nadmin/connect_admin/upload/<?=$fetch->id_article?>/location"> <i class="btn btn-default fa fa-upload text-success" style="cursor: pointer"></i> </a>

                  <a href="/nadmin/connect_admin/galerie/<?=$fetch->id_article?>/location"> <i class="btn btn-default fa fa-image" style="cursor: pointer; color:#884D7A"></i> </a>

                  <i data-toggle="collapse" data-target="#collapse_edit<?=$fetch->id_article?>" aria-expanded="false" aria-controls="collapse_edit<?=$fetch->id_article?>" class="btn btn-default fa fa-edit text-primary colashow" aria-hidden="true" style="cursor: pointer"></i>
                
                  <i data-toggle="collapse" data-target="#collapse_trash<?=$fetch->id_article?>" aria-expanded="false" aria-controls="collapse_trash<?=$fetch->id_article?>" class="btn btn-default fa fa-trash text-danger colashow" aria-hidden="true" style="cursor: pointer"></i>
                </td>
              </tr>
              <tr>
                <td colspan="7">
                  <!-- infos -->
                  <div class="collapse" id="collapse_info<?=$fetch->id_article?>">
                    <div class="card mb-3 border border-info rounded p-3">
                      <p class="text-center h3 text-info">Informations Supplémentaires</p> <br>
                      <div class="row no-gutters"> 
                        <div class="col-md-4">
                          <table class="w-100">
                            <tr>
                              <td>Nombre de Salle de bain:</td>
                              <td><span style="font-size: 1.2em;" class="text-justify text-primary"> <?=$fetch->nbrSalbain?> </span></td>
                            </tr>
                            <tr>
                              <td>Nombre de Chambre:</td>
                              <td><span style="font-size: 1.2em;" class="text-justify text-primary"> <?=$fetch->nbrrchambre?> </span></td>
                            </tr>
                            <tr>
                              <td>Nombre de Cuisine:</td>
                              <td><span style="font-size: 1.2em;" class="text-justify text-primary"> <?=$fetch->nbr_cuisine?> </span></td>
                            </tr>
                            <tr>
                              <td>Nombre de Salon:</td>
                              <td><span style="font-size: 1.2em;" class="text-justify text-primary"> <?=$fetch->nbr_salon?> </span></td>
                            </tr>
                            <tr>
                              <td>Nombre de Piscine:</td>
                              <td><span style="font-size: 1.2em;" class="text-justify text-primary"> <?=$fetch->piscine?> </span></td>
                            </tr>
                            <tr>
                              <td>Nombre de Jardin:</td>
                              <td><span style="font-size: 1.2em;" class="text-justify text-primary"> <?=$fetch->jardin?> </span></td>
                            </tr>
                          </table>
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Description:</h5>
                            <p class="card-text">
                              <?=nl2br($fetch->descript)?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- trash -->
                  <div class="collapse" id="collapse_trash<?=$fetch->id_article?>">
                    <div class="card mb-3 border border-danger rounded p-3">
                      <p class="text-center h3 text-danger">Voulez-vraiment éffectuer cette action ?</p> <br>
                      <div class="row text-center">
                        <div class="col-sm-6 mb-3">
                          <button id="non_trash_<?=$fetch->id_article?>" data-toggle="collapse" data-target="#collapse_trash<?=$fetch->id_article?>" aria-expanded="false" aria-controls="collapse_trash<?=$fetch->id_article?>" aria-hidden="true" class="btn btn-success colashow">Non</button>
                        </div>
                        <div class="col-sm-6 mb-3">
                          <button id_article="<?=$fetch->id_article?>" class="btn btn-danger oui_trash_loca">Oui</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- edit -->
                  <div class="collapse" id="collapse_edit<?=$fetch->id_article?>">
                    <div class="card mb-3 border border-primary rounded p-3">
                      <p class="text-center h3 text-primary">Formulaire de modification...</p> <br>
                        <form method="post" id="edit_vente_immo">
                          <div class="form-row">
                            <div class="col-md-3 mb-3">
                              <label class="mb-2" for="ville_<?=$fetch->id_article?>">Ville</label>
                              <input type="text" class="form-control" id="ville_<?=$fetch->id_article?>" name="ville" value="<?=$fetch->ville?>">
                            </div>
                            <div class="col-md-3 mb-3">
                              <label class="mb-2" for="prix_<?=$fetch->id_article?>">Prix</label>
                              <input type="number" class="form-control" id="prix_<?=$fetch->id_article?>" name="prix" value="<?=$fetch->prix?>">
                            </div>
                            <div class="col-md-3 mb-3">
                              <label class="mb-2" for="quartier_<?=$fetch->id_article?>">Quartier</label>
                              <input type="text" class="form-control" id="quartier_<?=$fetch->id_article?>" name="quartier" value="<?=$fetch->quartier?>">
                            </div>
                            <div class="col-md-3 mb-3">
                              <label class="mb-2" for="pays_<?=$fetch->id_article?>">Pays</label>
                              <select class="custom-select" id="pays_<?=$fetch->id_article?>" name="pays">
                                <option value="">Selection d'un pays</option>
                                <option <?php if($fetch->pays == "France"){ echo "selected"; } ?> value="France">France</option>
                                <option <?php if($fetch->pays == "Benin"){ echo "selected"; } ?> value="Benin">Benin</option>
                                <option <?php if($fetch->pays == "Togo"){ echo "selected"; } ?> value="Togo">Togo</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label class="mb-2" for="titre_<?=$fetch->id_article?>">Titre</label>
                              <input type="text" class="form-control" id="titre_<?=$fetch->id_article?>" name="titre" value="<?=$fetch->titre?>">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="mb-2" for="type_log_<?=$fetch->id_article?>">Type</label>
                              <select class="custom-select" id="type_log_<?=$fetch->id_article?>" name="type_log">
                                <option value="">Selection un type</option>
                                <option <?php if($fetch->type_log == "home"){ echo "selected"; } ?> value="home">Maison</option>
                                <option <?php if($fetch->type_log == "appart"){ echo "selected"; } ?> value="appart">Appartement</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-2">
                                <label class="mb-2" for="nbrSalbain_<?=$fetch->id_article?>">Nombre salle de bain</label>
                                <input id="nbrSalbain_<?=$fetch->id_article?>" class="form-control mb-3" type="number" name="nbrSalbain" value="<?=$fetch->nbrSalbain?>">
                            </div>
                            <div class="col-md-2">
                                <label class="mb-2" for="nbrrchambre_<?=$fetch->id_article?>">Nombre de chambre</label>
                                <input id="nbrrchambre_<?=$fetch->id_article?>" class="form-control mb-3" type="number" name="nbrrchambre" value="<?=$fetch->nbrrchambre?>">
                            </div>
                            <div class="col-md-2">
                                <label class="mb-2" for="nbr_cuisine_<?=$fetch->id_article?>">Nombre Cuisine</label>
                                <input id="nbr_cuisine_<?=$fetch->id_article?>" class="form-control mb-3" type="number" name="nbr_cuisine" value="<?=$fetch->nbr_cuisine?>">
                            </div>
                            <div class="col-md-2">
                                <label class="mb-2" for="nbr_salon_<?=$fetch->id_article?>">Nombre Salon</label>
                                <input id="nbr_salon_<?=$fetch->id_article?>" class="form-control mb-3" type="number" name="nbr_salon" value="<?=$fetch->nbr_salon?>">
                            </div>
                            <div class="col-md-2">
                                <label class="mb-2" for="jardin_<?=$fetch->id_article?>">Nombre Jardin</label>
                                <input id="jardin_<?=$fetch->id_article?>" class="form-control mb-3" type="number" name="jardin" value="<?=$fetch->jardin?>">
                            </div>
                            <div class="col-md-2">
                                <label class="mb-2" for="piscine_<?=$fetch->id_article?>">Nombre Piscine</label>
                                <input id="piscine_<?=$fetch->id_article?>" class="form-control mb-3" type="number" name="piscine" value="<?=$fetch->piscine?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-12 mb-1">
                                <label class="mb-2" for="descript_<?=$fetch->id_article?>">Description</label>
                                <textarea name="descript" id="descript_<?=$fetch->id_article?>" rows="4" class="form-control mb-3"> <?=$fetch->descript?> </textarea>
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="text-right">
                      <button data-toggle="collapse" data-target="#collapse_edit<?=$fetch->id_article?>" aria-expanded="false" aria-controls="collapse_edit<?=$fetch->id_article?>" aria-hidden="true" id_article="<?=$fetch->id_article?>" class="btn btn-outline-primary font-weight-bold oui_edit_loca colashow">Modifier <i class="fa fa-edit"></i></button>
                    </div>
                  </div>

                </td>
              </tr>
            <?php } } ?>  
          </tbody>
        <tbody id="resultats"></tbody>
      </table>
  </div> 
</div>