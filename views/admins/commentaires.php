<? #layout::themes/admin_cnct-interface; ?> 
<?php 
use Synext\APP\Admins;
use Synext\APP\Commentaires;
$db_Admins = (new Admins);
$db_Commentaires = (new Commentaires);
$comment = $db_Commentaires->getUsersCommentaires();
$ncomm = $db_Admins->numberocur("commentaire")->count;
?> 
<link rel="stylesheet" href="/templates/old/css/stylecommentaire.css">
<!-- Page Heading -->
<div class="d-xl-flex align-items-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Liste des Commentaires </h1> 
    <form id="search_p" class="h4 text-danger font-weight-bolder">
        <?php 
            if($ncomm > 1){ echo $ncomm.' commentaires'; } else { echo $ncomm.' commentaire'; }
        ?>
    </form>
</div>

<div id="testimonial" style="font-size: 16px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <br>
                </div>
                <br>
            </div>
        </div>
        <div class="row">

        <?php foreach ($db_Commentaires->getUsersCommentaires() as $fetch ): ?>
            <?php 
                $text = nl2br($fetch->text);
                $user = $fetch->nom.' '.$fetch->prenoms;
                $id_users = $fetch->id_users;
                $id_commentaire = $fetch->id_commentaire;
                $statut = $fetch->statut;
                $date = 'le '.date("d/m/Y",strtotime($fetch->date_commentaire)).' à '.date("H:i:s",strtotime($fetch->date_commentaire)).'';
            ?>

                <div class='col-md-12 mb-4' id="blockquote<?= $id_commentaire ?>">
                    <div class='testimony'>
                        <blockquote>

                            <p class='text-justify text-comment police '> <?= $text ?> </p>

                            <br><br>
                            <tr>
                                <form method='POST' action=''>

                                <div class='row row-cols-2 row-cols-md-2'>
                                    <div class='col-md-6' >
                                    <span>
                                        <?php 
                                            if ($statut == 1) {
                                                echo "<i class='btn btn-defaut text-success fas fa-check'></i>";
                                            } else {
                                                echo "<i id_commentaire='$id_commentaire' id='opt_valider$id_commentaire' class='btn btn-defaut text-success fas fa-thumbs-up opt_valider'></i> ";
                                            }
                                        ?> 
                                    </span>                                

                                    <span>
                                        <i id_commentaire='<?= $id_commentaire ?>' id='opt_supprimer<?= $id_commentaire ?>' class='btn btn-defaut text-danger fas fa-trash-alt opt_supprimer'></i>
                                    </span>
                                    
                                    </div>
                                    <div align='right' class='col-md-6 style_8' >
                                        <em> <?= $date ?> </em> 
                                    </div>
                                </div>
                                </td>

                                </form>
                                
                            </tr>

                        </blockquote><br>
                        <p class='author text-white name'><cite><b> <?= $user  ?></b></cite></p>
                    </div><br>
                </div>
        
        <?php endforeach; ?> 
            
        </div> 
    </div>	
</div>
