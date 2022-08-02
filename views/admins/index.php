<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Admins;
$db_Admins = (new Admins);

?>


<div class="row mt-5">

<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">  Vente </div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <span class="text-warning"> <?= $db_Admins->numberocur("maison_achat")->count; ?> </span>
            </div>
          </div>
          <div class="col-auto">
            <i class="fa fa-building-o fa-2x text-warning text-gray-300" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="col-xl-6   col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"> Location </div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <span class="text-dark"> <?= $db_Admins->numberocur("maison_louer")->count; ?> </span>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-home text-dark fa-2x text-gray-300"></i> 
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Photos des Maisons </div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <span class="text-info"> <?= $db_Admins->numberocur("photo_article")->count; ?> </span>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-image text-info fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"> reservation </div> 
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <span class="text-danger"> <?= $db_Admins->numberocur("reservation")->count; ?> </span>
            </div> 
          </div>
          <div class="col-auto">
            <i class="fa fa-ticket text-danger fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='papa'></div>


</div>