<?php
namespace Synext\APP;

use Synext\Components\Databases\Database;

class Commentaires{ 
    private $db ;
    private $table = "commentaire";

    public function __construct(){
        $this->db = new Database();
    }

    public function get(string $mail=null){ 
        if($mail){
            return $this->db->select("SELECT * from $this->table WHERE $this->table.mail = :mail",false,["mail" => $mail]);
        }
        return $this->db->select("SELECT * from $this->table ORDER BY id_commentaire DESC");
    }

    public function getUsersCommentaires(){ 
        return $this->db->select("SELECT * FROM $this->table INNER JOIN users ON $this->table.id_users = users.id_users ORDER BY statut,id_commentaire DESC");
    }

    public function updt(string $sql,array $data){
        return $this->db->update($sql,$data);
    }
}