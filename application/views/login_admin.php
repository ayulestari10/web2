<style type="text/css">
	h2{text-align: center; margin-bottom: 2%;}
	a{list-style: none;}
	.pan{
		font-size: 22px; font-weight: bolder; font-family: Verdana; text-align: center;
		margin-bottom: 10%;
	}
</style>
<?php echo form_open_multipart('login/admin'); ?>
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
				<div class="pan">
					<a href="<?= base_url('login/siswa') ?>">SISWA</a> | <a href="<?= base_url('login/admin') ?>">ADMIN</a> 
				</div>
				<div class="form-group">
	                <label for="username">Username</label>
	                <input type="text" name="username" class="form-control" />
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