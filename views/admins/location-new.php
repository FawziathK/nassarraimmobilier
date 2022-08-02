<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Admins;
$db_Admins = (new Admins);

?> 

<style>
label {
    font-weight: bold;
}
</style>

<!-- Page Heading -->
<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Ajouter à louer </h1> 
    <form id="search_p" class="h4 text-primary font-weight-bolder" method="post">
        <?php 
            echo $db_Admins->numberocur('maison_louer')->count." en location";
        ?>
    </form>
</div>


    <p class="text-center text-primary font-weight-bold h4">Formulaire d'ajout de bien immobilier en location</p> <br>

<div class="container">
<form method="post" id="add_vente_immo">
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label class="mb-2" for="ville">Ville</label>
      <input type="text" class="form-control" id="ville" name="ville">
    </div>
    <div class="col-md-3 mb-3">
      <label class="mb-2" for="prix">Prix</label>
      <input type="number" class="form-control" id="prix" name="prix">
    </div>
    <div class="col-md-3 mb-3">
      <label class="mb-2" for="quartier">Quartier</label>
      <input type="text" class="form-control" id="quartier" name="quartier">
    </div>
    <div class="col-md-3 mb-3">
      <label class="mb-2" for="pays">Pays</label>
      <select class="custom-select" id="pays" name="pays">
        <option value="">Selection d'un pays</option>
        <option value="France">France</option>
        <option value="Benin">Benin</option>
        <option value="Togo">Togo</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label class="mb-2" for="titre">Titre</label>
      <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="col-md-6 mb-3">
      <label class="mb-2" for="type_log">Type</label>
      <select class="custom-select" id="type_log" name="type_log">
        <option value="">Selection un type</option>
        <option value="home">Maison</option>
        <option value="appart">Appartement</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-2">
        <label class="mb-2" for="nbrSalbain">Nombre salle de bain</label>
        <input id="nbrSalbain" class="form-control mb-3" value="1" type="number" min="0" name="nbrSalbain">
    </div>
    <div class="col-md-2">
        <label class="mb-2" for="nbrrchambre">Nombre de chambre</label>
        <input id="nbrrchambre" class="form-control mb-3" value="1" type="number" min="0" name="nbrrchambre">
    </div>
    <div class="col-md-2">
        <label class="mb-2" for="nbr_cuisine">Nombre Cuisine</label>
        <input id="nbr_cuisine" class="form-control mb-3" value="1" type="number" min="0" name="nbr_cuisine">
    </div>
    <div class="col-md-2">
        <label class="mb-2" for="nbr_salon">Nombre Salon</label>
        <input id="nbr_salon" class="form-control mb-3" value="0" type="number" min="0" name="nbr_salon">
    </div>
    <div class="col-md-2">
        <label class="mb-2" for="jardin">Nombre Jardin</label>
        <input id="jardin" class="form-control mb-3" value="0" type="number" min="0" name="jardin">
    </div>
    <div class="col-md-2">
        <label class="mb-2" for="piscine">Nombre Piscine</label>
        <input id="piscine" class="form-control mb-3" value="0" type="number" min="0" name="piscine">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-1">
        <label class="mb-2" for="descript">Description</label>
        <textarea name="descript" id="descript" rows="4" class="form-control mb-3"></textarea>
    </div>
  </div>
</form>
  <button id="addl" class="btn btn-outline-primary font-weight-bold mb-5" >Ajouter <i class="fa fa-plus"></i></button>
</div>

