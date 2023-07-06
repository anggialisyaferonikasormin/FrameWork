<?= $this->extend('layout/pg_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="col-md-12"></div>
    <div class="card"></div>
    <div class="card-header">

    <div class="row">
      <div class="col-md-6">
        <h1>Semua Film</h1>
      </div>
      <div class="col-md-6 text-end">
        <a href="/film/add" class="btn btn-primary">Tambah Data</a>
      </div>
          </div>
              </div>
                    </div>
          
                <table class="table table-hover">
                    <tr>
                        <th>NO</th>
                        <th>Nama Film</th>
                        <th>Cover</th>
                        <th>Genre<th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    <?php  $i = 1;
                    foreach($data_film as $film) : ?>
                    
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?=$film["nama_film"] ?><td>
                            <td><img style="width: 50px;" src="/assets/cover/<?= $film["cover"] ?>" class="card-img-top">
                            <td><?=$film["nama_genre"] ?><td>
                            <td><?=$film["duration"] ?><td>
                            <td>
       <a href="/film/update/<?= encryptUrl($film["id"]); ?>" class="btn btn-success">Update</a>
      <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
</td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
    </div>
                    </div>
                    </div>
                    <!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= $film['id'] ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
  <!-- sampai sini -->
<?= $this->endSection() ?>