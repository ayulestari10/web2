<style type="text/css">
	#foto img{width: 144px; height: 216px; border: 1px solid grey; margin-bottom: 2%;}	
</style>

<div class="container">
	<!-- Biodata Diri -->
		<div class="biodata">
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h1>Pendaftaran</h1>
					<h2 style="margin-bottom: 4%;">BIODATA CALON SISWA</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td style="width: 300px;">Nomor Pendaftaran</td>
								<td style="width: 43px;">:</td>
								<td>
									<input type="text" name="no_pendaftaran" class="form-control" value="<?= $data->no_pendaftaran ?>"/>
								</td>
							</tr>

							<tr>
								<td>Nama Calon Siswa</td>
								<td>:</td>
								<td>
									<input type="text" name="nama" class="form-control" value="<?= $data->nama ?>"/>
								</td>
							</tr>

							<tr>
								<td>Foto</td>
								<td></td>
								<td>
									<img src="<?= base_url('foto/'.$data->id_siswa.'.png') ?>">
								</td>
							</tr>

							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td>
									<input type="text" name="jenis_kelamin" class="form-control" value="<?= $data->jenis_kelamin ?>"/>
								</td>
							</tr>

							<tr>
								<td>Tempat Tanggal Lahir</td>
								<td>:</td>
								<td>
									<input type="text" name="tempat_lahir" class="form-control" value="<?= $data->tempat_lahir ?>"/><br><input type="text" name="tanggal" value="<?= $data->tanggal ?>"/> - <input type="text" name="bulan" value="<?= $data->bulan ?>"/> - <input type="text" name="tahun" value="<?= $data->tahun ?>"/>
								</td>
							</tr>

							<tr>
								<td>No Telp/Hp</td>
								<td>:</td>
								<td>
									<input type="text" name="no_telp_hp" class="form-control" value="<?= $data->no_telp_hp ?>"/>
								</td>
							</tr>

							<tr>
								<td>Email</td>
								<td>:</td>
								<td>
								<input type="text" name="email" class="form-control" value="<?= $data->email ?>"/>
								</td>
							</tr>

							<tr>
								<td>Kompetensi keahlian yang diinginkan</td>
								<td>:</td>
								<td>
									<input type="text" name="keahlian" class="form-control" value="<?= $data->keahlian ?>"/>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<!-- End of Biodata Diri -->

	<!-- Data Sekolah -->
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 style="margin-bottom: 3%;">DATA SEKOLAH ASAL</h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td style="width: 300px;">Nama Sekolah</td>
							<td>:</td>
							<td>
								<input type="text" name="nama_sekolah" class="form-control" value="<?= $data->nama_sekolah ?>"/>
							</td>
						</tr>

						<tr>
							<td>Tahun Lulus</td>
							<td>:</td>
							<td>
							<input type="text" name="tahun_lulus" class="form-control" value="<?= $data->tahun_lulus ?>"/>
							</td>
						</tr>

						<tr>
							<td>No STTB SMP</td>
							<td>:</td>
							<td>
								<input type="text" name="no_sttb" class="form-control" value="<?= $data->no_sttb ?>"/>
							</td>
						</tr>

						<tr>
							<td>Nomor Induk Siswa Nasional (NISN)</td>
							<td>:</td>
							<td>
								<input type="text" name="nisn" class="form-control" value="<?= $data->nisn ?>"/>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<!-- End of Data Sekolah -->

	<!-- Data Nilai -->
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 style="margin-bottom: 4%;">NILAI UJIAN</h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Bahasa Inggris</td>
							<td>:</td>
							<td>
								<input type="text" name="nilai_bing" class="form-control" value="<?= $data->nilai_bing ?>"/>
							</td>
						</tr>

						<tr>
							<td>Bahasa Indonesia</td>
							<td>:</td>
							<td>
								<input type="text" name="nilai_bindo" class="form-control" value="<?= $data->nilai_bindo ?>"/>
							</td>
						</tr>

						<tr>
							<td>Matematika</td>
							<td>:</td>
							<td>
								<input type="text" name="nilai_matematika" class="form-control" value="<?= $data->nilai_matematika ?>"/>
							</td>
						</tr>

						<tr>
							<td>IPA</td>
							<td>:</td>
							<td>
								<input type="text" name="nilai_ipa" class="form-control" value="<?= $data->nilai_ipa ?>"/>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<!-- End of Data Nilai -->

	<!-- Biodata Orang Tua -->
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 style="margin-bottom: 4%;"><strong>BIODATA ORANG TUA</strong></h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Nama Orang Tua</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Nama Ayah</td>
							<td>:</td>
							<td>
								<input type="text" name="nama_ayah" class="form-control" value="<?= $data->nama_ayah ?>"/>
							</td>
						</tr>

						<tr>
							<td>Nama Ibu</td>
							<td>:</td>
							<td>
								<input type="text" name="nama_ibu" class="form-control" value="<?= $data->nama_ibu ?>"/>
							</td>
						</tr>

						<tr>
							<td>Pekerjaan Ayah</td>
							<td>:</td>
							<td>
								<input type="text" name="pekerjaan_ayah" class="form-control" value="<?= $data->pekerjaan_ayah ?>"/>
							</td>
						</tr>

						<tr>
							<td>Pekerjaan Ibu</td>
							<td>:</td>
							<td>
								<input type="text" name="pekerjaan_ibu" class="form-control" value="<?= $data->pekerjaan_ibu ?>"/>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" style="margin-bottom: 3%;">
			<div class="col-md-2 col-md-offset-4">
				<a href="<?= base_url('admin/edit_siswa') ?>" class="btn btn-success" name="edit_data">Edit</a>
			</div>
			<div class="col-md-2 col-md-offset-1">
				<a href="<?= base_url('admin') ?>" class="btn btn-success">Kembali</a>
			</div>
		</div>
	<!-- End of Biodata Orang Tua -->
</div>