<?php

namespace App\Models;

use CodeIgniter\Model;

class PakaianModel extends Model
{
      public function getPakaian(){

       $data =[
            [
                "nama_pakaian" => "Kemeja",
                "Size"     => "Xl, L, M, S",
                "Warna"  => "Merah"
            ],
            [
                "nama_pakaian"  => "Rok",
                "Size"      => "L",
                "Warna"    => "Hitam"
            ],
            [
                "nama_pakaian"  => "Kaus",
                "Size"      => "M",
                "Warna"    => "Biru"
            ],
            [
                "nama_pakaian"  => "Surjan",
                "Size"      => "Xl",
                "Warna"    => "Coklat Hitam" 
            ],
            [
                "nama_pakaian"  => "Jubah",
                "Size"      => "52/22",
                "Warna"    => "Hijau"  
            ]
            ];
            return $data;
      }  
}