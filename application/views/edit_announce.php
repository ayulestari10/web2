<style type="text/css">
	h1{text-align: center; margin-bottom: 4%;}
</style>

<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
		$username 		= $this->session->flashdata('username');

		echo form_open('announcement/edit_announce/'.$this->session->flashdata('id_announce'));
	?>
	<div class="row">
		<div class="col-md-8  col-md-offset-2">
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
	</div>
	<div class="col-md-1 col-md-offset-5" style="margin-bottom: 2%;">
        <input type="submit" value="Edit" class="btn btn-success" name="edit_announce" />
    </div>

	<?php form_close(); ?>
</div>
