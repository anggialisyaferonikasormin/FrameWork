<?php

namespace App\Models;

use CodeIgniter\Model;

class pesawatModel extends Model
{

    protected $table        = 'pesawat';
    protected $primarykey   = 'id';
    protected $useAutoIncrement  = true;
    protected $allowFields  = [];

      public function getpesawat(){

       $data =[
            [
                "nama_pesawat" => "Sewu Dino",
                "flay"     => "Horor",
                "landas"  => "1 jam 43 menit"
            ],
            [
                "nama_pesawat"  => "Leon Air X",
                "flay"      => "16.55",
                "landas"    => "20.30"
            ]
            ];
            return $data;
      }  

      public function getAllData()
      {
        return $this->findAll();
      }
      public function getDataByID($id)
      {
        return $this->find($id);
    }
    public function getDataBy($data)
    {
        return $this->where("flay", $data)->findAll();
    }
    public function getOrderBy()
    {
        return $this->OrderBy("created_at", "desc")->findAll();
    }
    public function getLimit()
    {
        return $this->limit(5)->get()->getresultArray();
    }

}