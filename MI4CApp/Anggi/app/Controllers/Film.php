<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//1
use App\models\FilmModel;
use App\Models\GenreModel;

class Film extends BaseController


{
   
    //2
    protected $film; 
    protected $genre;                                                                                       
    //3 fungsi constract
    public function __construct()
    {
        //step 4
        $this->film = new FilmModel();
        $this->genre = new GenreModel(); //add2
    }
    public function add()
    {
        $data["genre"] = $this->genre->getAllData();
        $data["errors"] = session('errors');
        return view("film/add", $data);
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
    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover'     => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        $image = $this->request->getFile('cover');
        $imageName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName,
        ];
        $this->film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/film');
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