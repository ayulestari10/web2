<style type="text/css">
	a{list-style: none;}
	h1{margin-bottom: 3%; text-align: center;}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1>List Pengumuman</h1>
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
						<td><?php  
							$rincian = substr($col->detail, 0, 100);
							echo $rincian.' ...';
						?></td>
						<td>
							<a href="<?= base_url('announcement/edit_announce/'.$col->id_announce) ?>"><input type="submit" value="Edit" class="btn btn-info" /></a>
							<a href="<?= base_url('announcement/delete_announce/'.$col->id_announce) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-2">
			<a href="<?= base_url('announcement/input') ?>" class="btn btn-default">Post Pengumuman</a>
		</div>
	</div>
</div>