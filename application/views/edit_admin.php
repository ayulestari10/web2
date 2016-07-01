<style type="text/css">
	.form-group{margin-bottom: 4%;}
	h2{margin-bottom: 4%;}
</style>
<div class="container" style="margin-top: 4%;">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
	
	<?php 
	$username = $this->session->flashdata('username');
	if (isset($username)) {
	     echo form_open('admin/edit_admin/'.$username);
	} else {
	     echo form_open('admin/edit_admin');
	}
	?>
		<div class="row">
			<div class="col-md-6">
				<h2>Edit Admin</h2>
				<input type="hidden" name="id_admin" value="<?= $data->id_admin ?>" />
				<div class="form-group">
					<label for="username" >Username</label>
					<input class="form-control" type="text" name="username" value="<?= $data->username ?>" />
				</div>
				<div class="form-group">
					<label for="password" >Password</label>
					<input class="form-control" type="text" name="password" />
				</div>
		</div>
		
		<div class="row" style="margin-bottom: 2%; margin-top: 2%;">
	        <div class="col-md-1">
	            <input type="submit" value="Edit" class="btn btn-success" name="edit_admin" />
	        </div>
	    </div>

	<?= form_close() ?>
</div>