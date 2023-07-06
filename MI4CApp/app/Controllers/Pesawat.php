<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//1
use App\Models\pesawatModel;

class pesawat extends BaseController
{
    //2
    protected $pesawat;                                                                                        
    //3 fungsi constract
    public function __construct()
    {
        //4 melakukan inisiasi di class pesawat
        $this->pesawat = new pesawatModel();
    }

    public function index()
    {
        //5
        $data['data_pesawat'] = $this->pesawat->getpesawat();
        return view("pesawat/index", $data);
    }
}
