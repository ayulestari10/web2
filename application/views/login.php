<style type="text/css">
	h2{text-align: center; margin-bottom: 15%;}
</style>
<?php echo form_open_multipart('login/siswa'); ?>
	<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>LOGIN</h2>
				<div class="form-group">
	                <label for="no_pendaftaran">Nomor Pendaftaran</label>
	                <input type="text" name="no_pendaftaran" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="password">Password</label>
	                <input type="password" name="password" class="form-control" />
	            </div>
			</div>
			
	    </div>
	    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-1 col-md-offset-3">
	            <input type="submit" value="Masuk" class="btn btn-success" name="login" />
	        </div>
		</div>
	</div>
<?php echo form_close(); ?>