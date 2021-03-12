<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_model extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';

    public function verifikasi($username,$password)
    {
        // dd($username);
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from user where username='$username'");
        $results = $query->getResultArray();
        foreach($results as $value){
            if($value['username']==$username){
                //dd(password_verify($password,$value['password'])); 
                if(password_verify($password,$value['password'])){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }
    public function getData($username)
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * from user where username='$username'");
        $results = $query->getResultArray();
        return $results;
    }
    public function password_update($username,$password)
    {
        $new_password=password_hash($password,PASSWORD_DEFAULT);
        $db = \Config\Database::connect();
        $query   = $db->query("UPDATE user set password='$new_password' where username='$username'");
        $results = $query->getResultArray();
        
    }
    
}
