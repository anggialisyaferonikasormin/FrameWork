<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//1
use App\Models\PakaianModel;

class Pakaian extends BaseController
{
    //2
    protected $Pakaian;                                                                                        
    //3 fungsi constract
    public function __construct()
    {
        //4
        $this->pakaian = new PakaianModel();
    }

    public function index()
    {
        //5
        $data['data_pakaian'] = $this->pakaian->getPakaian();
        return view("pakaian/index", $data);
    }
}