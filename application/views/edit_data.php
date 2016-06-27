<style type="text/css">
	.form-group{margin-bottom: 4%;}
	h2{margin-bottom: 4%;}
</style>
<div class="container" style="margin-top: 4%;">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
	
	<?php 
	$nis = $this->session->flashdata('nis');
	if (isset($nis)) {
	     echo form_open('admin/edit/'.$nis);
	} else {
	     echo form_open('siswa/edit');
	}
	?>
		<div class="row">
			<div class="col-md-6">
				<h2>Data Pribadi</h2>
				<input type="hidden" name="id_siswa" value="<?= $data->id_siswa ?>" />
				<div class="form-group">
					<label for="nis" >Nomor Induk Siswa / NIS</label>
					<input class="form-control" type="text" name="nis" value="<?= $data->nis ?>" />
				</div>
				<div class="form-group">
					<label for="nama" >Nama</label>
					<input class="form-control" type="text" name="nama" value="<?= $data->nama ?>" />
				</div>
				<div class="form-group">
					<label for="tempat_lahir" >Tempat Lahir</label>
					<input class="form-control" type="text" name="tempat_lahir" value="<?= $data->tempat_lahir ?>" />
				</div>
				<div class="form-group">
					<label for="tanggal_lahir" >Tanggal Lahir</label>
					<input class="form-control" type="text" name="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" />
				</div>
				<div class="form-group">
					<label for="jenis_kelamin" >Jenis Kelamin</label>
					<input class="form-control" type="text" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>" />
				</div>
				<div class="form-group">
					<label for="agama" >Agama</label>
					<input class="form-control" type="text" name="agama" value="<?= $data->agama ?>" />
				</div>
				<div class="form-group">
					<label for="alamat_lengkap" >Alamat Lengkap</label>
					<input class="form-control" type="text" name="alamat_lengkap" value="<?= $data->alamat_lengkap ?>" />
				</div>
				<div class="form-group">
					<label for="no_telepon" >No Telepon</label>
					<input class="form-control" type="text" name="no_telepon" value="<?= $data->no_telepon ?>" />
				</div>
				<div class="form-group">
					<label for="no_hp" >No Hp</label>
					<input class="form-control" type="text" name="no_hp" value="<?= $data->no_hp ?>" />
				</div>
				<div class="form-group">
					<label for="email" >Email</label>
					<input class="form-control" type="text" name="email" value="<?= $data->email ?>" />
				</div>
			</div>

			<div class="col-md-4 col-md-offset-2">
				<h2>Data Nilai</h2>
				<div class="form-group">
					<label for="nilai_kimia" >Kimia</label>
					<input class="form-control" type="text" name="nilai_kimia" value="<?= $data->nilai_kimia ?>" />
				</div>
				<div class="form-group">
					<label for="nilai_biologi" >Biologi</label>
					<input class="form-control" type="text" name="nilai_biologi" value="<?= $data->nilai_biologi ?>" />
				</div>
				<div class="form-group">
					<label for="nilai_matematika" >Matematika</label>
					<input class="form-control" type="text" name="nilai_matematika" value="<?= $data->nilai_matematika ?>" />
				</div>
				<div class="form-group">
					<label for="nilai_fisika" >Fisika</label>
					<input class="form-control" type="text" name="nilai_fisika" value="<?= $data->nilai_fisika ?>" />
				</div>
				<div class="form-group">
					<label for="nilai_bindo" >Bahasa Indonesia</label>
					<input class="form-control" type="text" name="nilai_bindo" value="<?= $data->nilai_bindo ?>" />
				</div>
				<div class="form-group">
					<label for="nilai_bing" >Bahasa Inggris</label>
					<input class="form-control" type="text" name="nilai_bing" value="<?= $data->nilai_bing ?>" />
				</div>
			</div>
		</div>
		
		<div class="row" style="margin-bottom: 2%; margin-top: 2%;">
	        <div class="col-md-1">
	            <input type="submit" value="Edit" class="btn btn-success" name="edit" />
	        </div>
	    </div>

	<?= form_close() ?>
	<?php// endforeach; ?>
</div>