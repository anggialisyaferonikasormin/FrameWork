<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table            = 'film';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_film', 'id_genre', 'duration', 'cover'];

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getAllDataJoin()
    {
        return $this->select('film.*, genre.nama_genre')
            ->join('genre', 'genre.id = film.id_genre')
            ->get()
            ->getResultArray();
    }

    public function getDataByID($id)
    {
        return $this->find($id);
    }

    public function getDataByGenre($genre)
    {
        return $this->where('id_genre', $genre)->findAll();
    }

    public function getOrderBy($column = 'created_at', $order = 'desc')
    {
        return $this->orderBy($column, $order)->findAll();
    }

    public function getLimit($limit = 5)
    {
        return $this->limit($limit)->findAll();
    }
}