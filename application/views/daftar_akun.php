<style type="text/css">
	h2{text-align: center; margin-bottom: 15%;}
</style>
<?php echo form_open_multipart('site/daftar_akun'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<h2>Daftar Akun</h2>
				<div class="form-group">
	                <label for="nis">Nomor Induk Siswa/NIS</label>
	                <input type="text" name="nis" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="nis">Password</label>
	                <input class="form-control" type="password" name="password" required>
	            </div>
	            <div class="form-group">
	                <label for="nis">Konfirmasi Password</label>
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