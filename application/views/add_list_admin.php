<style type="text/css">
	h2{text-align: center;}
</style>

<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		} 
		
		$username = $this->session->flashdata('username');
		if (isset($username)) {
		     echo form_open_multipart('admin/add_admin/'.$username);
		} else {
		     echo form_open_multipart('admin/add_admin');
		}
	?>
	<div class="row" style="margin-bottom: 3%;">
		<h2>Tambah Admin</h2>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" />
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" />
			</div>
		</div>
		<div class="col-md-2">
			<a href="<?= base_url('admin/add_admin') ?>" class="btn btn-success">Tambah</a>
		</div>
	</div>
	<?= form_close() ?>
	
	<div class="row">
		<div class="col-md-8" style="margin-top: 4%;">
			<h3>Daftar Admin</h3>
			<table class="table table-striped">
				<thead style="text-align: center;">
					<th style="width: 30px;">No</th>
					<th style="width: 80px;">Username</th>
					<th style="width: 20px;"></th>
				</thead>
				<tbody>
					<?php foreach($data as $col): ?>
					<tr>
						<td><?= $col->id_admin ?></td>
						<td><?= $col->username ?></td>
						<td>
							<a href="<?= base_url('admin/delete_admin/'.$col->username) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>