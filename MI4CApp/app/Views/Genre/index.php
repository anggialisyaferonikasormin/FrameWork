<html lang="en">
<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<h1>
    Data Genre
</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;?>
                <?php foreach ($data_genre as $genre) : ?></td>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $genre["nama_genre"] ?></td>
                        <td>
                            <a href="" class="btn btn-success">Update</class>
                            <a href="" class="btn btn-danger">Delete</class>
                         </td>
                     </tr>
                <?php endforeach;?>
            </table>
        </div>
     </div>
<script src="/assets/js/bootsrap.min.js"></script> 
                <?= $this->endSection() ?>
                $this->endSection();

