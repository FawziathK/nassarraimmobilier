<?php
namespace Synext\APP;

use Synext\Components\Databases\Database;
use Synext\APP\Admins;
$db_Admins = (new Admins);

class Etoilage{ 
    private $db ;
    private $table = "etoilage";
    private $db_Admins;

    public function __construct()
    {
        $this->db = new Database();
        $this->db_Admins = (new Admins);
    }

    public function get($quet){ 
        return $this->db->select("$quet");
    }

    public function sum_etoilage() {
    
        if($this->db_Admins->numberocur('etoilage')->count > 0)
        {
            $count = $this->db->select('SELECT AVG(note) AS "moy" FROM etoilage');
    
            $sum = $this->db->select('SELECT SUM(note) AS "note" FROM etoilage');
            
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

    public function all_etoilage() {
        return $this->db->select('SELECT * FROM users INNER JOIN etoilage ON etoilage.id_users = users.id_users ORDER BY nom ,prenoms ASC');
    }

    public function updt(string $sql,array $data){
        return $this->db->update($sql,$data);
    }
}