<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Utilisateurs;
use Synext\APP\Admins;
$db_Utilisateurs = (new Utilisateurs);
$db_Admins = (new Admins); 
$nusers = $db_Admins->numberocur('users')->count;

?> 

<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Liste des Utilisateurs </h1> 
    <form id="search_p" class="h4 text-info font-weight-bolder" method="post">
        <?php
            if($nusers > 1){ echo $nusers.' utilisateurs'; } else { echo $nusers.' utilisateur'; }
        ?>
    </form>
</div>

<div class="table-responsive" style="font-size: 16px;">
    <table width="100%" class="table table-hover"> 
        <thead>
            <tr class="text-dark font-weight-bolder table-info">
                <th class="text-dark font-weight-bolder pt-3 pb-3" scope="col">Nom</th>
                <th class="text-dark font-weight-bolder pt-3 pb-3" scope="col">Mail</th>
                <th class="text-dark font-weight-bolder pt-3 pb-3" scope="col">Tel</th>
            </tr>
        </thead>
        <tbody id="t_body">

            <?php foreach( $db_Utilisateurs->get() as $user): ?> 
                <tr>
                    <td> <?= $user->nom ?> </td>
                    <td> <?= $user->mail ?> </td>
                    <td> <?= $user->tel ?> </td>
                </tr>
            <?php endforeach; ?> 
            
        </tbody>
    </table>
</div>

