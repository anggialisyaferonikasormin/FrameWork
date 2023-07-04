<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Pakaian</h1>
    <table border="1" cellspacing="0" cellpading="5">
        <tr>
            <th>No</th>
            <th>Nama Pakaian</th>
            <th>Size</th>
            <th>Warna</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_pakaian as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $row['nama_pakaian'] ?></td>
                <td><?php echo $row['Size'] ?></td>
                <td><?php echo $row['Warna'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
