<style type="text/css">
	h2{text-align: center; margin-bottom: 15%;}
</style>
<?php echo form_open_multipart('register/regist'); ?>
	<div class="container">
	<?php  
		$msg = $this->session->userdata('msg');
		if(isset($msg)){
			echo $msg;
		}
		$this->session->unset_userdata('msg');
	?>
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<h2>Daftar Akun</h2>
				<div class="form-group">
	                <label for="nama">Nama Calon Siswa</label>
	                <input type="text" name="nama" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="password">Password</label>
	                <input class="form-control" type="password" name="password" required>
	            </div>
	            <div class="form-group">
	                <label for="password2">Konfirmasi Password</label>
	                <input class="form-control" type="password" name="password2" required>
	            </div>
			</div>	
	    </div>
	    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-1 col-md-offset-3">
	            <input type="submit" value="Daftar" class="btn btn-success" />
	        </div>
		</div>
	</div>
<?php echo form_close(); ?>