<?php
namespace Synext\APP;

use Synext\Components\Databases\Database;

class Recrutement{ 
    private $db ;

    public function __construct(){
        $this->db = new Database();
    }
    public function add($sql ,$data){ 
        return $this->db->insert($sql,$data);
    }

    public function get(int $id=null){
        if($id){
            return $this->db->select("SELECT * FROM recrutement WHERE id = :id ",false,["id" => $id]);
        }
        return $this->db->select('SELECT * FROM recrutement ORDER BY id DESC');
    }

    public function updt(string $sql,array $data){
        return $this->db->update($sql,$data);
    }

    public function del(int $id){
        return $this->db->delete("DELETE FROM recrutement WHERE id = :id",["id" => $id]);
    }
}