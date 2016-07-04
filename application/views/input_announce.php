<style type="text/css">
	h1{text-align: center; margin-bottom: 4%;}
</style>

<?php echo form_open_multipart('announcement/input'); ?>
	<div class="container">
		<?php  
			$msg = $this->session->flashdata('msg');
			if(isset($msg)){
				echo $msg;
			}
		?>
		<div class="row">
			<div class="col-md-7 col-md-offset-2">
				<h1>Posting Pengumuman</h1>
				<div class="form-group">
					<label for="title" >Judul</label>
					<input class="form-control" type="text" name="title" />
				</div>
				<div class="form-group">
					<label for="pelaksanaan" >Waktu Pelaksanaan</label>
					<input class="form-control" type="text" name="pelaksanaan" />
				</div>
				<div class="form-group" style="margin-bottom: 1%;">
					<label for="detail" >Detail Pengumuman</label>
					<textarea class="form-control" name="detail"></textarea>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 2%; margin-top: 2%;">
	        <div class="col-md-1 col-md-offset-2" style="margin-top: -1%;">
	            <input type="submit" value="Submit" class="btn btn-success" name="input" />
	        </div>
	    </div>
	    
	</div>
<?php echo form_close(); ?>

<div class="container">
	<div class="col-md-1 col-md-offset-8" style="margin-top: -6%;">
	    <a href="<?= base_url('admin') ?>" class="btn btn-info">Kembali</a>
	</div>
</div>