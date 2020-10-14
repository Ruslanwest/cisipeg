<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Gender yang disimpan</title>
</head>
<body>
    <h2>Data Gender Yang disimpan</h2>
    Kode Gender : <?php echo $kodegender; ?> <br>
    Nama Gender : <?php echo $namagender; ?> <br>

    <?php echo anchor("c_gender/inputdbmdl","Tambah Gender!")  ?>
</body>
</html>