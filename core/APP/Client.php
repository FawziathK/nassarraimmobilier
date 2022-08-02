<?php

namespace Synext\APP;

use Synext\Components\Databases\Database;
use Synext\Requests\Json;
use Synext\APP\Immo;

//$db_immo = (new Immo);

class Client
{
    private $db;
    private $db_immo;
    public function __construct()
    {
        $this->db = new Database();
        $this->db_immo = new Immo();
    }
    public function onchange(string $contry)
    {
        return $this->db->select('SELECT DISTINCT ville FROM articles WHERE pays=:contry ORDER BY ville ASC', true, ["contry" => $contry]);
    }
    public function onchangeq(string $contry)
    {
        return $this->db->select('SELECT DISTINCT quartier FROM articles WHERE ville=:contry ORDER BY quartier ASC', true, ["contry" => $contry]);
    }

    public function onSearch(string $type_art, string $pays, string $ville, string $quartier)
    {
        if ($type_art == 'vente') {
            $toto = $this->db->select('SELECT * FROM articles
            INNER JOIN maison_achat ON articles.id_article = maison_achat.id_article 
            WHERE articles.pays=:pays   AND articles.ville=:ville AND articles.quartier=:quartier', true, ["pays" => $pays, "ville" => $ville, "quartier" => $quartier]);
            if (!$toto) {
                //var_dump($toto);
                return 3;
            } else {
                return $toto;
            }
        } else if ($type_art == 'louer') {
            $toto = $this->db->select('SELECT * FROM articles
            INNER JOIN maison_louer ON articles.id_article = maison_louer.id_article 
            WHERE articles.pays=:pays   AND articles.ville=:ville', true, ["pays" => $pays, "ville" => $ville]);

            if (!$toto) {
                //var_dump($toto);
                return 3;
            } else {
                return $toto;
            }
        } else {
            return 3;
        }
    }
    public function Ondetail(string $detail, string $taille, string $type_art)
    {
        $chemin = '/storages/immos/';
        $photoart = '';

        $carou = '
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    
    ';
        $diapo = '<div class="carousel-inner">';
        $lis = '<ol class="carousel-indicators">';
        if ($type_art == 'louer') {
            $req1 = $this->db->select('SELECT * FROM maison_louer INNER JOIN articles ON maison_louer.id_article=articles.id_article WHERE maison_louer.id_article=:id_article', true, ["id_article" => $detail]);
        } else {
            $req1 = $this->db->select('SELECT * FROM maison_achat INNER JOIN articles ON maison_achat.id_article=articles.id_article WHERE maison_achat.id_article=:id_article', true, ["id_article" => $detail]);
        }

        $req2 = $this->db_immo->imgs($detail);
        $count = 0;
        foreach ($req1 as $lob) :


            if (count($req2) == 0) {

                $chemin = $chemin . 'ototo.jpg';
            } else {

                foreach ($req2 as $imog) :
                    if ($count == 0) {
                        $lis .= '
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $count . '" class="active"></li>';
                        $diapo .= '
            <div class="carousel-item active" >
            <img style="object-fit: contain;  height:' . $taille . 'px" src="' . $chemin . '' . $imog->photo . '" alt="First slide"  class="d-block w-100 ">
          </div>';
                    } else {

                        $lis .= '<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $count . '"></li>';


                        $diapo .= '<div class="carousel-item">
                          <img  style="object-fit: contain; height:' . $taille . 'px"  class="d-block w-100 "  src="' . $chemin . '' . $imog->photo . '" alt="Second slide">
                        </div>';
                    }
                    $count++;
                    $photoart = $imog->photo;


                endforeach;
            }
            $lis .= '</ol>';
            $diapo .= '</div>

                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>

                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <button type="button" for="mferme" style="position:fixed; top: 15px; right: 48%; " class="btn btn-outline-danger ferme" data-bs-dismiss="modal" >X</button>
                    ';

            $carou .= $lis;
            $carou .= $diapo;

            $ret = '';
            $ret .= ' 
                       <center>
                      <div class="card mb-3 border-0"> 
                    <div class="row no-gutters">
                      <div class="col-md-4">';
            if (count($req2) == 0) {
                $ret .= ' <img src="' . $chemin . '' . $photoart . '" class="card-img" alt="..."style="object-fit: cover; height:auto;">';
            } else {
                $ret .= ' <img src="' . $chemin . '' . $photoart . '" class="card-img" alt="..." data-bs-toggle="modal" data-bs-target="#diaspo" data-bs-toggle="tooltip" data-bs-placement="top" title="Cliquez pour voir plus..." style="cursor:pointer; object-fit: cover; height:auto;"> ';
            }
            $ret .= '            
                     
                      </div>

                      <div class="col-md-8" >
                            <div class="card w-75 mt-3" >
                            <div class="card-body">
                                <h3 class="card-title pt-0 "  style="font-family:\'Times New Roman\'">' . $lob->titre . '</h3>
                                <h5 class="card-title moncss text-info">Caractéristiques</h5>
                        
                    
                            </div>
                            </div>

                            
                      
                      </div>
        </div>
        <div class="text-justify" >
            <br>
        <em class="text-slider-items">' . $lob->descript . '</em>
        <span class="text-slider"></span>
            

            <div class="card mt-5" >
            <h5 class="card-header"><b>Details</b></h5>
            <div class="card-body">
              
            <div class="container" >
            <div class="row mt-5" style="display: flex;justify-content:space-between">
                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Prix:</b> ' . $lob->prix . ' FCFA</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Pays: </b>' . $lob->pays . '</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Ville: </b> ' . $lob->ville . '</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Quartier: </b> ' . $lob->quartier . '</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Salle de bain: </b> ' . $lob->nbrSalbain . '</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Cuisine: </b> ' . $lob->nbr_cuisine . '</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Salon: </b>' . $lob->nbr_salon . '</span></div>

                
                <div class="col-6 col-md-3 mb-3" ><span><b class="text-info">Chambre: </b> ' . $lob->nbrrchambre . '</span></div>

                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Piscine: </b> ' . $lob->piscine . '</span></div>
                
                <div class="col-6 col-md-3 mb-3"><span ><b class="text-info">Jardin: </b> ' . $lob->jardin . '</span></div>
               
            
            </div>
        </div>

            </div>
          </div>

        </div>

        </center>



        <div  class="modal fade bg-dark" id="diaspo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          ' . $carou . '
          <div hidden>
          div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary mferme" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div> 

          </div>
        </div>
        
            ';
        endforeach;

        return $ret;
    }

    public function Oncomment()
    {
        return $this->db->select('SELECT * FROM commentaire INNER JOIN users ON 
        commentaire.id_users = users.id_users WHERE statut=1 ORDER BY RAND()');
    }
    public function Onhome()
    {
        return $this->db->select(' SELECT * FROM articles INNER JOIN maison_achat ON articles.id_article = maison_achat.id_article ORDER BY RAND() LIMIT 12');
        //return $this->db->select(' SELECT * FROM articles INNER JOIN maison_achat ON articles.id_article = maison_achat.id_article INNER JOIN (SELECT DISTINCT photo,id_article FROM photo_article) AS toto ON articles.id_article=toto.id_article ORDER BY RAND() LIMIT 12');

    }
    public function Onhomerent()
    {
        return $this->db->select(' SELECT * FROM articles INNER JOIN maison_louer ON articles.id_article = maison_louer.id_article ORDER BY RAND()');
    }
    public function OntofHome(string $id_tof)
    {
        $pap = $this->db->select("SELECT photo FROM photo_article WHERE id_article = :id_tof ORDER BY RAND()", false, ["id_tof" => $id_tof]);
        $fuck = (string)json_encode($pap);
        $stoka = substr(strrchr($fuck, ":"), 1);
        $ptoka = substr($stoka, 0, -2);
        $ptoka = substr($ptoka, 1);
        return $ptoka;
    }
}