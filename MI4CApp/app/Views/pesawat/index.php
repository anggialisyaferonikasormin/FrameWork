<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data pesawat</h1>
    <table border="1" collspacing="0" cellpadding="4">
        <tr>
            <th>No</th>
            <th>Nama pesawat</th>
            <th>flay</th>
            <th>landas</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_pesawat as $row); ?>
        <tr>
            
            <td><?= $i++; ?></td>
            <td><?php echo $row['nama_pesawat'] ?></td>
            <td><?php echo $row['flay'] ?></td>
            <td><?= $row['landas'] ?></td>
        </tr>
</php endforeach; ?>
    </table>
</body>
</html>