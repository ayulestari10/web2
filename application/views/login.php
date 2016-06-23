<style type="text/css">
	h2{text-align: center; margin-bottom: 15%;}
</style>
<?php echo form_open_multipart('site/validate_credentials'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>Masuk Sebagai Siswa</h2>
				<div class="form-group">
	                <label for="nis">Nomor Induk Siswa/NIS</label>
	                <input type="text" name="nis" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="password">Password</label>
	                <input type="password" name="password" class="form-control" />
	            </div>
			</div>
			
	    </div>
	    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-1 col-md-offset-3">
	            <input type="submit" value="Masuk" class="btn btn-success" />
	        </div>
		</div>
	</div>
<?php echo form_close(); ?>