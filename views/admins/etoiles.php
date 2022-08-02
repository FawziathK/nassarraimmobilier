<? #layout::themes/admin_cnct-interface; ?> 
<?php 

use Synext\APP\Etoilage;
$db_Etoilage = (new Etoilage);

?> 


<!-- Page Heading -->
<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Liste des Etoiles </h1> 
    <form id="search_p" class="h4 text-warning font-weight-bolder" method="post">
        <?php 
            $result = $db_Etoilage->sum_etoilage();
            if($result['note'] > 1)
            { echo $result['note'].' étoiles '.$result['etoile']; } 
            else 
            { echo $result['note'].' étoile  '.$result['etoile']; }
        ?>
    </form>
</div>

<div class="table-responsive" style="font-size: 16px;">
    <table width="100%" class="table table-hover"> 
        <thead>
            <tr class="text-dark font-weight-bolder table-warning">
                <th class="text-dark font-weight-bolder pt-3 pb-3" scope="col">Nom et Prénom (s)</th> 
                <th class="text-dark font-weight-bolder pt-3 pb-3" scope="col">Mail / Tel</th> 
                <th class="text-dark font-weight-bolder pt-3 pb-3" scope="col">Etoiles</th> 
            </tr>
        </thead>
        <tbody id="t_body">
            <?php 
                foreach ($db_Etoilage->all_etoilage() as $fetch) {
                    
                    echo ' 
                    <tr>
                        <td>'.$fetch->nom.' '.$fetch->prenoms.'</td>
                        <td>'.$fetch->mail.' / '.$fetch->tel.'</td>
                        <td>
                    '; 

                    for ($i=1; $i <= $fetch->note; $i++)
                    { 
                        echo '<i class=" text-warning fas fa-star check_admin"></i>';
                    }
                    for ($j=$i; $j <= 5; $j++)
                    { 
                        echo '<i class=" text-dark fas fa-star ban_admin"></i>';
                    }
                    
                    echo '</td> </tr>'; 
                }

            ?>
            
        </tbody>
    </table>
</div>