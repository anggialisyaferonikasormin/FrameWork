<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LK99</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK99</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/genre">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="/about">Tentang Kami</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
<h1>Data Genre</h1>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
        
            <tr>
                <th>NO</th>
                <th>Nama gGenre</th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach($data_genre as $genre): ?>
                <tr>
                <td><?= $i++; ?></td>
                <td><?= $genre ["nama_genre"] ?> </td>
                <td>
                <a href="#" class="btn btn-success">Update</a>
                <a href="#" class="btn btn-delete">Delete</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>