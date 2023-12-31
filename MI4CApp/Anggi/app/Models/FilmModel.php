<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{

    protected $table        = 'film';
    protected $primarykey   = 'id';
    protected $useAutoIncrement  = true;
    protected $allowFields  = [];

      public function getFilm(){

       $data =[
            [
                "nama_film" => "Sewu Dino",
                "genre"     => "Horor",
                "duration"  => "1 jam 43 menit"
            ],
            [
                "nama_film"  => "Fast And Forious X",
                "genre"      => "action",
                "duration"    => "2 jam 9 menit"
            ],
            [
                "nama_film"  => "Teletabis The Movie",
                "genre"      => "Scient Fiction",
                "duration"    => "1 Jam  9 menit"
            ],
            [
                "nama_film"  => "Spidermen",
                "genre"      => "Action",
                "duration"    => "1 Jam  30 menit" 
            ],
            [
                "nama_film"  => "Miracle In Call 7",
                "genre"      => "Drama",
                "duration"    => "1 Jam  45 menit"  
            ]
            ];
            return $data;
    
      }  
      public function getAllDataJoin(){
        $query = $this->db->table("film")
        ->select("film.*, genre.nama_genre")
        ->join("genre", "genre.id = film.id_genre");
        return $query->get()->getResultArray();
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
        return $this->where("genre", $data)->findAll();
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