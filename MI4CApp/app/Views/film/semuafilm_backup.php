<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data film</title>
    
</head>
<body>
    <h1>Data Film</h1>
    <table border="1" cellspacing="0" cellpading="5">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama film</th>
            <th>nama Genre</th>
            <th>Duration</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($semuafilm as $film) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td>
                    <img style="width: 50px;"src="/assets/cover/<?= $film ['cover'] ?>" alt="">
                </td>
                <td><?php echo $film['nama_film'] ?></td>
                <td><?php echo $film['nama_genre'] ?></td>
                <td><?php echo $film['duration'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>