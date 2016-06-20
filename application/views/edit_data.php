<div class="container" style="margin-top: 4%;">
	<?php foreach ($data_siswa as $data): ?>
		<?= form_open('site/edit_data') ?>
			<h2>Data Diri</h2>
			<input type="hid_siswaden" name="id_siswa" value="<?= $data->id_siswa ?>" />
			<div class="form-group">
				<label for="nis" style="color: white;">Nomor Induk Siswa / NIS</label>
				<input class="form-control" type="text" name="nis" value="<?= $data->nis ?>" />
			</div>
			<div class="form-group">
				<label for="nama" style="color: white;">Nama</label>
				<input class="form-control" type="text" name="nama" value="<?= $data->nama ?>" />
			</div>
			<div class="form-group">
				<label for="tempat_lahir" style="color: white;">Tempat Lahir</label>
				<input class="form-control" type="text" name="tempat_lahir" value="<?= $data->tempat_lahir ?>" />
			</div>
			<div class="form-group">
				<label for="tanggal_lahir" style="color: white;">Tanggal Lahir</label>
				<input class="form-control" type="text" name="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" />
			</div>
			<div class="form-group">
				<label for="jenis_kelamin" style="color: white;">Jenis Kelamin</label>
				<input class="form-control" type="text" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>" />
			</div>
			<div class="form-group">
				<label for="agama" style="color: white;">Agama</label>
				<input class="form-control" type="text" name="agama" value="<?= $data->agama ?>" />
			</div>
			<div class="form-group">
				<label for="alamat_lengkap" style="color: white;">Alamat Lengkap</label>
				<input class="form-control" type="text" name="alamat_lengkap" value="<?= $data->alamat_lengkap ?>" />
			</div>
			<div class="form-group">
				<label for="no_telepon" style="color: white;">No Telepon</label>
				<input class="form-control" type="text" name="no_telepon" value="<?= $data->no_telepon ?>" />
			</div>
			<div class="form-group">
				<label for="no_hp" style="color: white;">No Hp</label>
				<input class="form-control" type="text" name="no_hp" value="<?= $data->no_hp ?>" />
			</div>
			<div class="form-group">
				<label for="email" style="color: white;">Email</label>
				<input class="form-control" type="text" name="email" value="<?= $data->email ?>" />
			</div>

			<h2>Data Nilai</h2>
			<div class="form-group">
				<label for="nilai_kimia" style="color: white;">Kimia</label>
				<input class="form-control" type="text" name="nilai_kimia" value="<?= $data->nilai_kimia ?>" />
			</div>
			<div class="form-group">
				<label for="nilai_biologi" style="color: white;">Biologi</label>
				<input class="form-control" type="text" name="nilai_biologi" value="<?= $data->nilai_biologi ?>" />
			</div>
			<div class="form-group">
				<label for="nilai_matematika" style="color: white;">Matematika</label>
				<input class="form-control" type="text" name="nilai_matematika" value="<?= $data->nilai_matematika ?>" />
			</div>
			<div class="form-group">
				<label for="nilai_fisika" style="color: white;">Fisika</label>
				<input class="form-control" type="text" name="nilai_fisika" value="<?= $data->nilai_fisika ?>" />
			</div>
			<div class="form-group">
				<label for="nilai_bindo" style="color: white;">Bahasa Indonesia</label>
				<input class="form-control" type="text" name="nilai_bindo" value="<?= $data->nilai_bindo ?>" />
			</div>
			<div class="form-group">
				<label for="nilai_bing" style="color: white;">Bahasa Inggris</label>
				<input class="form-control" type="text" name="nilai_bing" value="<?= $data->nilai_bing ?>" />
			</div>

			<input type="submit" class="btn btn-success" value="Edit" />
		<?= form_close() ?>
	<?php endforeach; ?>
</div>