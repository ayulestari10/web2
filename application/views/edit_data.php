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
					<label for="tempat_lahir" >Tempat Lahir</label>
					<input class="form-control" type="text" name="tempat_lahir" value="<?= $data->tempat_lahir ?>" />
				</div>
				<div class="form-group">
					<label for="jenis_kelamin" >Jenis Kelamin</label>
					<input class="form-control" type="text" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>" />
				</div>
				<div class="form-group">
					<label for="alamat_lengkap" >Alamat Lengkap</label>
					<input class="form-control" type="text" name="alamat_lengkap" value="<?= $data->alamat_lengkap ?>" />
				</div>
				<div class="form-group">
					<label for="no_telepon" >No Telepon/ hp</label>
					<input class="form-control" type="text" name="no_telp_hp" value="<?= $data->no_telp_hp ?>" />
				</div>
				<div class="form-group">
					<label for="email" >Email</label>
					<input class="form-control" type="text" name="email" value="<?= $data->email ?>" />
				</div>
			</div>

			<div class="col-md-5 col-md-offset-1">
				<h2 style="text-align: center;">Nilai Ujian Nasional</h2>
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