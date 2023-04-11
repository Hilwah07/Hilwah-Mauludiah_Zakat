<?php

namespace App\Models;

use CodeIgniter\Model;

class MData extends Model
{
    public function getData()
    {
        $query = $this->db->query("select * from tbl_fitrah");
        return $query->getResult();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tbl_fitrah')->insert($data);
        return $query;
    }
    public function getSelectData($nik)
    {
        $query = $this->db->query("select * from tbl_fitrah where nik = $nik");
        return $query->getResult();
    }
    public function saveEditData($data,$nik)
    {
        $query = $this->db->table('tbl_fitrah')
        ->where('nik',$nik)
        ->update($data);
        return $query;
    }
    public function hapusData($nik)
    {
        $query = $this->db->table('tbl_fitrah')
        ->where('nik',$nik)
        ->delete();
        return $query;
    }
}