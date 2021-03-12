<?php

namespace App\Models;

use CodeIgniter\Model;

class Home_model extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';

    public function getData()
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from post where status=1 order by id desc limit 6");
        $results = $query->getResultArray();
        return $results;
    }
    public function getDatapengumuman()
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from post where status=1 order by id desc");
        $results = $query->getResultArray();
        return $results;
    }
    public function getnamaMatkul()
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from matkul");
        $results = $query->getResultArray();
        return $results;
    }
    public function getDatasingle($id)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from post where id=" . $id);
        $results = $query->getResultArray();
        return $results;
    }
}
