<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Cisipeg</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><?=anchor("c_start","Home"); ?></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Referensi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><?=anchor("c_gender","Kode Gender"); ?></li>
							<li><?=anchor("c_eduleve","Kode Level Pendidikan")?></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Data Pegawai <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><?=anchor("c_pegawai","Data Pribadi");?></li>
							<li><?=anchor("c_anakpeg","Data Anak Pegawai");?></li>
							<li><?=anchor("c_edupeg","Data Riwayat Pendidikan");?></li>
						</ul>
					</li>
					<li>
						<a href="">Entri Kehadiran</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Laporan<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><?=anchor("c_rep_peg","Data Pegawai");?></li>
							<li><?=anchor("c_rep_hadir","Data Kehadiran");?></li>
						</ul>
                    </li>
                    <li><?=anchor("c_about","About")?></li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</div>
		</div>
	</div>
</nav>
