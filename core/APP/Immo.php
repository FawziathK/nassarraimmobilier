<?php
namespace Synext\APP;

use Synext\Components\Databases\Database;

class Immo{ 
    private $db ;

    public function __construct(){
        $this->db = new Database();
    }
    public function add($sql ,$data){ 
        return $this->db->insert($sql,$data);
    }

    public function count_reser() {    
        return $this->db->select("SELECT COUNT(*) AS 'count' FROM reservation INNER JOIN users ON users.id_users = reservation.id_users INNER JOIN articles ON articles.id_article = reservation.id_article WHERE reservation.date_reservation >= ".time());
    }

    public function find_reservation() {    
        return $this->db->select("SELECT * FROM reservation INNER JOIN users ON users.id_users = reservation.id_users INNER JOIN articles ON articles.id_article = reservation.id_article WHERE reservation.date_reservation >= ".time());
    }

    public function ventes(string $id_article=null){
        if($id_article){
            return $this->db->select("SELECT * FROM maison_achat INNER JOIN articles ON articles.id_article=maison_achat.id_article WHERE articles.type_art='vente' AND maison_achat.id_article = :id_article",false,["id_article" => $id_article]);
        }
        return $this->db->select('SELECT * FROM maison_achat 
        INNER JOIN articles ON articles.id_article = maison_achat.id_article 
        WHERE articles.type_art = "vente" 
        ORDER BY RAND() 
        ');
    }

    public function ventes_limit(string $id_article=null){
        if($id_article){
            return $this->db->select("SELECT * FROM maison_achat INNER JOIN articles ON articles.id_article=maison_achat.id_article WHERE articles.type_art='vente' AND maison_achat.id_article = :id_article",false,["id_article" => $id_article]);
        }
        return $this->db->select('SELECT * FROM maison_achat 
        INNER JOIN articles ON articles.id_article = maison_achat.id_article 
        WHERE articles.type_art = "vente" 
        ORDER BY RAND()  
        LIMIT 6 
        ');
    }

    public function locas(string $id_article=null){
        if($id_article){
            return $this->db->select("SELECT * FROM maison_louer INNER JOIN articles ON articles.id_article=maison_louer.id_article WHERE articles.type_art='louer' AND maison_louer.id_article = :id_article",false,["id_article" => $id_article]);
        }
        return $this->db->select('SELECT * FROM maison_louer 
        INNER JOIN articles ON articles.id_article=maison_louer.id_article 
        WHERE articles.type_art="louer" 
        ORDER BY RAND()
        ');
    }

    public function locas_limit(string $id_article=null){
        if($id_article){
            return $this->db->select("SELECT * FROM maison_louer 
            INNER JOIN articles ON articles.id_article=maison_louer.id_article 
            WHERE articles.type_art='louer' AND maison_louer.id_article = :id_article",false,["id_article" => $id_article]);
        }
        return $this->db->select('SELECT * FROM maison_louer 
        INNER JOIN articles ON articles.id_article=maison_louer.id_article 
        WHERE articles.type_art="louer"          
        ORDER BY RAND()  
        LIMIT 6 
        ');
    }

    public function get_img(string $table, string $id_article) {
        return $this->db->select("SELECT * FROM photo_article as tbphoto 
        LEFT JOIN $table as tbhome ON tbphoto.id_article = tbhome.id_article 
        LEFT JOIN articles as tbarticles ON tbphoto.id_article = tbarticles.id_article 
        WHERE tbphoto.id_article = :id_article",true,["id_article" => $id_article]);
    }

    public function imgs(string $id_article) {
        return $this->db->select("SELECT * FROM photo_article 
        WHERE id_article = :id_article",true,["id_article" => $id_article]);
    }

    public function img_by_artcl(string $id_article) {
        return $this->db->select("SELECT photo FROM photo_article 
        WHERE id_article = :id_article ORDER BY RAND()",false,["id_article" => $id_article]);
    }

    public function imgss(string $id_photo_article) {
        return $this->db->select("SELECT * FROM photo_article 
        WHERE id_photo_article = :id_photo_article",false,["id_photo_article" => $id_photo_article]);
    }

    public function rech(string $rech=null,string $table=null){ 
        $rech = '%'.$rech. '%';
        if($rech){
            return $this->db->select("SELECT * FROM articles INNER JOIN $table ON articles.id_article=$table.id_article WHERE type_log like :rech OR ville like :rech OR prix like :rech OR titre like :rech OR pays like :rech OR quartier like :rech",true,["rech" => $rech]);
        }
        return $this->db->select("SELECT * FROM $table INNER JOIN articles ON articles.id_article=$table.id_article WHERE articles.type_art='vente' ORDER BY $table.id_maison_achat DESC");
    }

    public function del_immo(string $table, string $id_article){
        return $this->db->delete("DELETE FROM $table WHERE $table.id_article = :id_article",["id_article" => $id_article]);
    }

    public function updt(string $sql,array $data){
        return $this->db->update($sql,$data);
    }

    public function del(int $id_photo_article){
        return $this->db->delete("DELETE FROM photo_article WHERE id_photo_article = :id_photo_article",["id_photo_article" => $id_photo_article]);
    }
}