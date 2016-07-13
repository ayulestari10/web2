<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  	<script type="text/javascript" src="assets/js/jquery.js"></script>
  	<style type="text/css">
  		.menu{}
  	</style>
</head>
<body>

<div id="biodata1">
	<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h1>Pendaftaran</h1>
					<h2 style="margin-bottom: 4%;">BIODATA CALON SISWA</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td style="width: 200px">Nomor Pendaftaran</td>
								<td>:</td>
								<td><?= $data->no_pendaftaran ?></td>
							</tr>

							<tr>
								<td>Nama Calon Siswa</td>
								<td>:</td>
								<td><input type="text" name="nama" class="form-control" /></td>
							</tr>

							<tr>
								<td>Upload Foto</td>
								<td></td>
								<td><input type="file" name="userfile" /></td>
							</tr>

							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td>
									<input type="radio" name="jenis_kelamin" value="Laki-laki"/>Laki-laki<br>
									<input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan
								</td>
							</tr>

							<tr>
								<td>Tempat Tanggal Lahir</td>
								<td>:</td>
								<td>
									<input type="text" name="tempat_lahir" class="form-control" />
									 <span>DD/ MM/ YYYY</span><br>
									<input type="text" name="tanggal"/> / <input type="text" name="bulan"/> / <input type="text" name="tahun"/>
								</td>
							</tr>

							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td>
									<textarea name="alamat_lengkap" class="form-control"></textarea>
								</td>
							</tr>

							<tr>
								<td>No Telp/Hp</td>
								<td>:</td>
								<td><input type="text" name="no_telp_hp" class="form-control" /></td>
							</tr>

							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input type="text" name="email" class="form-control" /></td>
							</tr>

							<tr>
								<td>Kompetensi keahlian yang diinginkan<td>
								
								<td>
									<select name="keahlian" class="form-control">
										<option value="Akuntansi">Akuntansi</option>
										<option value="Pemasaran">Pemasaran</option>
										<option value="TKJ">TKJ</option>
										<option value="Multimedia">Multimedia</option>	
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row" style="margin-bottom: 3%;">
			<div class="col-md-2 col-md-offset-5">
				<button id="lanjut1" class="btn btn-info">Selanjutnya</button>
			</div>
		</div>
	<button id="lanjut1" class="btn btn-default">Lanjut</button>
</div>

<div id="biodata2">
	<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h2 style="margin-bottom: 4%;">DATA SEKOLAH ASAL</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Nama Sekolah</td>
								<td>:</td>
								<td><input type="text" name="nama_sekolah" class="form-control" /></td>
							</tr>

							<tr>
								<td>Tahun Lulus</td>
								<td>:</td>
								<td><input type="text" name="tahun_lulus" class="form-control" /></td>
							</tr>

							<tr>
								<td>No STTB SMP</td>
								<td>:</td>
								<td><input type="text" name="no_sttb" class="form-control" /></td>
							</tr>

							<tr>
								<td>Nomor Induk Siswa Nasional (NISN)</td>
								<td>:</td>
								<td><?= $data->nisn ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row" style="margin-bottom: 3%">
				<div class="col-md-2 col-md-offset-5">
					<button id="lanjut2" class="btn btn-info">Selanjutnya</button>
				</div>
			</div>
	<button id="lanjut2" class="btn btn-default">Lanjut</button>
</div>

<div id="biodata3">
	<h1>Data nilai</h1>
	<button id="lanjut3" class="btn btn-default">Lanjut</button>
</div>

<div id="biodata4">
	<h1>Data ortu</h1>
</div>

<script type="text/javascript">
	$("#biodata2").hide();
	$("#biodata3").hide();
	$("#biodata4").hide();

	$("#lanjut1").click(function(){
		$("#biodata1").hide();
		$("#biodata2").show();
	});

	$("#lanjut2").click(function(){
		$("#biodata2").hide();
		$("#biodata3").show();
	});

	$("#lanjut3").click(function(){
		$("#biodata3").hide();
		$("#biodata4").show();
	});
</script>

</body>
</html>