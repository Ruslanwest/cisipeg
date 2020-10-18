<div class="continer">
	<div class="jumbotron">
		<div class="col-sm-10">
			<form action="<?=site_url("c_gender/save4add") ?>" method="post">
				<h3>Form Input Gender</h3>
				<div class="form-group row">
					<label for="rgender_kode">Kode Gender</label>
					<input type="text" class="form-control" id="rgender_kode" name="rgender_kode">
				</div>
				<div class="form-group row">
					<label for="rgender_nama">Nama Gender</label>
					<input type="text" name="rgender_nama" id="rgender_nama" class="form_control">
				</div>
				<div>
					<button name="btn_submit" id="btn_submit" type="submit" value="tambah">Submit</button>
					<button name="btn_reset" id="btn_reset" type="reset" value="reset">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>