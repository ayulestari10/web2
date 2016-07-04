<style type="text/css">
	.form-group{margin-bottom: 4%;}
	h2{margin-bottom: 4%;}
	#foto img{width: 144px; height: 216px; border: 1px solid grey; margin-bottom: 2%;}
</style>
<div class="container" style="margin-top: 4%;">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
	
	<?php 
	$no_pendaftaran = $this->session->flashdata('no_pendaftaran');
	if (isset($no_pendaftaran)) {
	     echo form_open('admin/edit/'.$no_pendaftaran);
	} else {
	     echo form_open_multipart('siswa/edit');
	}
	?>
		<div class="row">
			<div class="col-md-6">
				<h2>Data Pribadi</h2>
				<input type="hidden" name="id_siswa" value="<?= $data->id_siswa ?>" />
				<div class="form-group" id="foto">
					<img src="<?= base_url('foto/'. $data->id_siswa.'.png') ?>"><br>
	                <label for="foto">Upload Foto Close Up</label>
	                <?php echo form_upload('userfile'); ?>
	            </div>
				<div class="form-group">
					<label for="no_pendaftaran" >Nomor Induk Siswa / no_pendaftaran</label>
					<input class="form-control" type="text" name="no_pendaftaran" value="<?= $data->no_pendaftaran ?>" />
				</div>
				<div class="form-group">
					<label for="nama" >Nama</label>
					<input class="form-control" type="text" name="nama" value="<?= $data->nama ?>" />
				</div>
				<div class="form-group">
					<label for="asal_sekolah" >Asal Sekolah</label>
					<input class="form-control" type="text" name="asal_sekolah" value="<?= $data->asal_sekolah ?>" />
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
					<label for="jeno_pendaftaran_kelamin" >Jeno_pendaftaran Kelamin</label>
					<input class="form-control" type="text" name="jeno_pendaftaran_kelamin" value="<?= $data->jeno_pendaftaran_kelamin ?>" />
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

			<div class="col-md-5 col-md-offset-1">
				<h2 style="text-align: center;">Nilai Ujian Nasional</h2>
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
	        <div class="col-md-1">
	            <a href="<?= base_url('siswa/kartu_peserta') ?>"><input type="submit" value="Download Kartu Peserta" class="btn btn-info"/></a>
	        </div>
	    </div>

	<?= form_close() ?>
</div>