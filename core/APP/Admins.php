<?php
namespace Synext\APP;

use Synext\Components\Databases\Database;

class Admins{ 
    private $db ;
    private $table = "admine";

    public function __construct(){
        $this->db = new Database();
    }

    public function get($quet){ 
        return $this->db->select("$quet");
    }

    public function auth(string $mail=null, string $pass=null){ 
        return $this->db->select("SELECT * from $this->table WHERE $this->table.mail = :mail AND $this->table.pass = :pass",false,["mail" => $mail,"pass" => $pass]);
    }

    public function gotpass(string $mail=null){ 
        return $this->db->select("SELECT * from $this->table WHERE $this->table.mail = :mail",false,["mail" => $mail]); 
    }

    public function numberocur(string $table){ 
        return $this->db->select("SELECT COUNT(*) AS 'count' from $table",false);
    }

    public function stars(){ 
        if($this->numberocur('etoilage')->count > 0)
        {
            $count = $this->get('SELECT AVG(note) AS "moy" FROM etoilage');
            //$count[0]->moy;

            $sum = $this->get('SELECT SUM(note) AS "note" FROM etoilage');
            //$sum[0]->note;

            $note = intval($count[0]->moy);
            $result = '';
            $sortir = array();
            for ($i=1; $i <= $note; $i++)
            { 
                $result .=  '<i class=" text-warning fas fa-star check_admin"></i>';
            }
            for ($j=$i; $j <= 5; $j++)
            { 
                $result .=  '<i class=" text-dark fas fa-star ban_admin"></i>';
            }
            $sortir['note'] = $sum[0]->note;
            $sortir['etoile'] = $result;
        }
        else
        {
            $sortir['note'] = 0;
            $sortir['etoile'] = '<i class=" text-dark fas fa-star ban_admin"></i><i class=" text-dark fas fa-star ban_admin"></i><i class=" text-dark fas fa-star ban_admin"></i><i class=" text-dark fas fa-star ban_admin"></i><i class=" text-dark fas fa-star ban_admin"></i>';
        }
        return $sortir;
    }

    public function updt(string $sql,array $data){
        return $this->db->update($sql,$data);
    }
}