<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{

    protected $table             = 'Genre';
    protected $primarykey        = 'id';
    protected $useAutoIncrement  = true;
    protected $allowFields       = [];

      public function getGenre(){

       $data =[
            [
                "nama_Genre"     => "Horor",
                "craeted_at"     => "",
                "updated_at"     => ""
            ],
            [
                "nama_Genre"     => "Drama",
                "craeted_at"     => "",
                "updated_at"     => ""
            ],
            [
                "nama_Genre"     => "Action",
                "craeted_at"     => "",
                "updated_at"     => ""
            ],
            [
                "nama_Genre"     => "komedi",
                "craeted_at"     => "",
                "updated_at"     => ""
            ]
         ];

            return $data;
      }  

      public function getAllData(){
        return $this->findAll();
      }

      public function getDataByID($id){
        return $this->find($id);
    }

    public function getDataBy($data){
        return $this->where("nama_Genre", $data)->findAll();
    }

    public function getOrderBy(){
        return $this->OrderBy("created_at", "desc")->findAll();
    }

    public function getLimit(){
        return $this->limit(5)->get()->getresultArray();
    }

}