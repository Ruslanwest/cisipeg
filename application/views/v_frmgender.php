<div class="container">
	<div class="jumbotron">
		<form action="<?=site_url("iotacrud/save4add/".$namamodel);?>" method="post">
			<h3>Form Input Gender</h3>
			<div class="form-group">
				<label for="rgender_kode">Kode Gender</label>
				<input type="text" class="form-control" id="rgender_kode" name="rgender_kode" value="<?=$rgender_kode;?>">
			</div> <br>
			<div class="form-group">
				<label for="rgender_nama">Nama Gender</label>
				<input type="text" class="form-control input-group-lg" name="rgender_nama" id="rgender_nama" value="<?=$rgender_nama;?>">
			</div>
			<div>
				<button class="btn btn-primary btn-lg" name="btn_submit" id="btn_submit" type="submit" value="tambah">Submit</button>
				<button class="btn btn-warning btn-lg" name="btn_reset" id="btn_reset" type="reset" value="reset">Reset</button>
			</div>
		</form>
	</div>
</div