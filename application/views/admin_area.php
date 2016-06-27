<style type="text/css">
	a{list-style: none;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table class="table table-striped">
				<thead style="text-align: center;">
					<th>No</th>
					<th style="width:500px;">Nomor Induk Siswa</th>
					<th style="width:500px;">Nama</th>
					<th style="width:500px;">Alamat</th>
					<th style="width:500px;"></th>
				</thead>
				<tbody>
					<?php foreach($dt as $data): ?>
					<tr>
						<td><?= $data->id_siswa ?></td>
						<td><?= $data->nis ?></td>
						<td><?= $data->nama ?></td>
						<td><?= $data->alamat_lengkap ?></td>
						<td>
							<a href="<?= base_url('admin/edit/'.$data->nis) ?>"><input type="submit" value="Edit" class="btn btn-info" /></a>
							<a href="<?= base_url('admin/delete/'.$data->nis) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>