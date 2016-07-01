<style type="text/css">
	h1{text-align: center; margin-bottom: 4%;}
</style>

<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
 
		$username = $this->session->flashdata('username');
		if (isset($username)) {
		     echo form_open('announcement/edit_announce/'.$username);
		} else {
		     echo form_open('announcement/edit_announce');
		}
	?>
	<div class="row">
		<div class="col-md-8">
			<h1> Edit Pengumuman</h1>
			<div class="form-group">
				<label for="title" >Judul</label>
				<input class="form-control" type="text" name="title" value="<?= $data->title ?>" />
			</div>
			<div class="form-group">
				<label for="pelaksanaan" >Waktu Pelaksanaan</label>
				<input class="form-control" type="text" name="pelaksanaan" value="<?= $data->pelaksanaan ?>" />
			</div>
			<div class="form-group">
				<label for="detail" >Detail Pengumuman</label>
				<textarea class="form-control" name="detail"><?= $data->detail ?></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 2%; margin-top: 2%;">
	        <div class="col-md-1">
	            <input type="submit" value="edit_announce" class="btn btn-success" name="edit_announce_announce" />
	        </div>
	    </div>
	</div>
	<?php form_close(); ?>
</div>
