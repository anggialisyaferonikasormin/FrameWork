<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 99</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/semuafilm">Semua film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kategori film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Tentang film</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class ="container">
<div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h1>Semua film</h1>
                    </div>
                    <div class="col-6 text-end">
                        <a href="/film/add" class="btn btn-primary">Tambahkan Data Film</a>
                    </div>
                </div>
            </div>

  </div>
</div>

    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>Durasi</th>
            <th>Sampul</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($semuafilm as $film) : ?>
        <tr>
            
            <td><?= $i++; ?></td>
            <td><?= $film['nama_film'] ?></td>
            <td><?= $film['id_genre'] ?></td>
            <td><?= $film['duration'] ?></td>
            <td>
              <img style = "width:50px" src="/assets/cover/<?= $film['cover'] ?>"class=card-img-top">
        </td>
            <td>
                <a href="" class ="btn btn-success">Update</a>
                <a href="" class ="btn btn-danger">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
    </table>
    <script src="/assets/js/bootstrap.min.js"></script>
   

   </body>
   </html>