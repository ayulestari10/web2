<style type="text/css">
	a{list-style: none;}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table class="table table-striped">
				<thead style="text-align: center;">
					<th>No</th>
					<th style="width:500px;">Title</th>
					<th style="width:500px;">Waktu Pelaksanaan</th>
					<th style="width:500px;">Detail</th>
					<th style="width:500px;"></th>
				</thead>
				<tbody>
					<?php foreach($data as $col): ?>
					<tr>
						<td><?= $col->id_announce ?></td>
						<td><?= $col->title ?></td>
						<td><?= $col->pelaksanaan ?></td>
						<td><?= $col->detail ?></td>
						<td>
							<a href="<?= base_url('admin/edit_announce/'.$col->id_announce) ?>"><input type="submit" value="Edit" class="btn btn-info" /></a>
							<a href="<?= base_url('admin/delete_announce/'.$col->id_announce) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-2">
			<a href="<?= base_url('admin/input') ?>"><button class="btn btn-default">Input Announce</button></a>
		</div>
	</div>
</div>