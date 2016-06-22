<style type="text/css">
	a{list-style: none;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table class="table table-striple">
				<thead style="text-align: center;">
					<th>No</th>
					<th style="width:500px;">Nomor Induk Siswa</th>
					<th style="width:500px;">Nama</th>
					<th style="width:500px;">Alamat</th>
					<th style="width:500px;"></th>
				</thead>
				<?php foreach($db->result() as $col): ?>
				<tbody>
					<td><?= $col->id_siswa ?></td>
					<td><?= $col->nis ?></td>
					<td><?= $col->nama ?></td>
					<td><?= $col->alamat_lengkap ?></td>
					<td>
						<a href="<?= base_url('site/edit/'.$col->id_siswa) ?>"><input type="submit" value="Edit" class="btn btn-info" /></a>
						<a href="<?= base_url('site/hapus/'.$col->id_siswa) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
					</td>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>