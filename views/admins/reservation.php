<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Immo;
$db_Immo = (new Immo);

?> 


<!-- Page Heading -->
<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Liste des Visites </h1> 
    <form id="search_p" class="h4 text-info font-weight-bolder" method="post">
        <?php 
            $func = $db_Immo->count_reser();
            if( $func[0]->count > 1){ echo $func[0]->count.' visites en attente'; } else { echo $func[0]->count.' réservation en attente'; }
        ?>
    </form>
</div>

<div class="table-responsive">
    <table width="100%" class="table table-hover" style="font-size: 16px;"> 
        <thead>
            <tr class="text-dark font-weight-bolder table-info">
                <th class="text-dark font-weight-bolder" scope="col">Nom</th>
                <th class="text-dark font-weight-bolder" scope="col">Mail</th>
                <th class="text-dark font-weight-bolder" scope="col">Tel</th>
                <th class="text-dark font-weight-bolder" scope="col">Date et Heure</th>
                <th class="text-dark font-weight-bolder" scope="col"> Article </th>
            </tr>
        </thead>
        <tbody id="t_body">
            <?php
                foreach ($db_Immo->find_reservation() as $fetch) {
                    echo  '
                        <tr>
                            <td>'.$fetch->nom.'</td>
                            <td>'.$fetch->mail.'</td>
                            <td>'.$fetch->tel.'</td>
                            <td>le '.date("d/m/Y",$fetch->date_reservation).' à '.date("H:i:s",$fetch->date_reservation).'</td>
                            <td>'.$fetch->titre.'</td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>
</div>

