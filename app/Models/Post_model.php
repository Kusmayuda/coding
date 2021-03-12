<?php

namespace App\Models;

use CodeIgniter\Model;

class Post_model extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'judul', 'content', 'postby', 'thumbnail', 'deskripsi', 'startdate', 'enddate', 'status', 'id_matkul'];
    protected $useTimestamps = true;

    public function tambah_data($data)
    {
        return $this->insert($data);
    }
    public function edit_data($data, $id)
    {

        return $this->update($id, $data);
    }

    public function hapusPost($id)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("DELETE from post where id=$id");
        $results = $query->getResultArray();
        return $results;
    }
    public function editPost($id)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("Select * from post where id=$id");
        $results = $query->getResultArray();
        return $results;
    }
    public function ambilDataPost()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM post order by id');
        $results = $query->getResultArray();

        return $results;
    }
    public function hitungJumlah()
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT count(matkul_nama) as jumlah FROM matkul");
        $results = $query->getResultArray();
        $query1   = $db->query("SELECT * from matkul order by id");
        $hasil = $query1->getResultArray();
        $ar = array();
        $arr = array();
        foreach ($hasil as $nilai) {
            $id = $nilai['id'];
            $query2   = $db->query("SELECT count(judul) as jumlah_judul FROM post where id_matkul='$id'");
            $hasil2 = $query2->getResultArray();
            // dd($hasil2);
            array_push($ar, $hasil2);
        }
        for ($co = 0; $co < $results[0]['jumlah']; $co++) {
            array_push($arr, (int)$ar[$co][0]['jumlah_judul']);
        }
        //dd($arr);
        // dd($results[0]['jumlah']);
        return $arr;
    }
    public function getNama()
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from matkul order by id");
        $hasil = $query->getResultArray();
        $ar = array();
        foreach ($hasil as $nilai) {
            array_push($ar, $nilai['singkatan']);
        }

        //dd($ar);
        // dd($results[0]['jumlah']);
        return $ar;
    }
    public function ubahStatus($id, $status)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("UPDATE post set status=$status where id=$id");
        $results = $query->getResultArray();
        return $results;
    }
    // public function listPost()
    // {
    //     return $this->findAll();
    // }
    // public function ambil_post($id)
    // {
    //     $db = \Config\Database::connect();
    //     $query   = $db->query("SELECT * from article where id=" . $id);
    //     $results = $query->getResultArray();

    //     return $results;
    // }


}
