<?php

namespace Synext\APP;

use Synext\Components\Databases\Database;

class Utilisateurs
{
    private $db;
    private $table = "users";

    public function __construct()
    {
        $this->db = new Database();
    }

    public function get(string $mail = null)
    {
        if ($mail) {
            // dd($mail);
            // exit();
            return $this->db->select("SELECT * from $this->table WHERE $this->table.mail = :mail", false, ["mail" => $mail]);
        }
        return $this->db->select("SELECT * from $this->table ORDER BY id_users DESC");
    }

    public function auth(string $mail = null, string $pass = null)
    {
        return $this->db->select("SELECT * from $this->table WHERE $this->table.mail = :mail AND $this->table.pass = :pass", false, ["mail" => $mail, "pass" => $pass]);
    }

    public function gotpass(string $mail = null)
    {
        return $this->db->select("SELECT * from $this->table WHERE $this->table.mail = :mail", false, ["mail" => $mail]);
    }

    public function updt(string $sql, array $data)
    {
        return $this->db->update($sql, $data);
    }
}