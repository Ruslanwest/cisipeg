<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Entry Kode Gender</title>
</head>

<body>
	<h2>Form Kode Gender</h2>
	<?php $this->load->helper("url"); ?>
    <form action="<?=site_url("c_gender/inputdata"); ?>" method = "post">
	Kode Gender : <input type="text" name="kodegender" value="<?php echo  $kodegender ?>"><br>
	Nama Gender : <input type="text" name="namagender" value="<?php echo  $namagender ?>"><br>
	<button type="submit">Simpan</button>
	<button type="Reset">Reset</button>
    </form>
</body>

</html>
