<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//1
use App\Models\FilmModel;

class Film extends BaseController
{
    //2
    protected $film;                                                                                        
    //3 fungsi constract
    public function __construct()
    {
        //4 melakukan inisiasi di class film
        $this->film = new FilmModel();
    }

    public function index()
    {
        //5
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }

    public function All()
    {
        $data['semuafilm'] = $this->film->getAllDataJoin();
        return view("film/semuafilm", $data);
    }
    public function film_by_id()
    {
        dd($this->film->getDataByID(1));
    }
    public function film_by_genre()
    {
        dd($this->film->getDataBy("horor"));
    }
    public function film_order()
    {
        dd($this->film->getOrderBy());
    }
    public function film_limit_five()
    {
        dd($this->film->getLimit());
    }
    
}
