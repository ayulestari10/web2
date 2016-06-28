<style type="text/css">
	a{list-style: none;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table class="table table-striped">
				<thead style="text-align: center;">
					<th>No</th>
					<th style="width:500px;">Username</th>
					<th style="width:500px;"></th>
				</thead>
				<tbody>
					<?php foreach($data as $col): ?>
					<tr>
						<td><?= $col->id_admin ?></td>
						<td><?= $col->username ?></td>
						<td>
							<a href="<?= base_url('admin/edit_admin/'.$col->username) ?>"><input type="submit" value="Edit" class="btn btn-info" /></a>
							<a href="<?= base_url('admin/delete_admin/'.$col->username) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>