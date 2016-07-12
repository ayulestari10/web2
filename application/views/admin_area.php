<style type="text/css">
	a{list-style: none;}
	table{margin-top: 5%;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h2 style="text-align: center;">Data Calon Siswa</h1>
			<table class="table table-striped">
				<thead style="text-align: center;">
					<th>No.</th>
					<th style="width:250px;">No Registrasi</th>
					<th style="width:250px;">Nama</th>
					<th style="width:250px;">Asal Sekolah</th>
					<th style="width:200px;">Hasil</th>
					<th style="width:500px;"></th>
				</thead>
				<tbody>
					<?php $i = 0; ?>
					<?php foreach($dt as $data): ?>
					<tr>
						<td><?= ++$i ?></td>
						<td><?= $data->no_pendaftaran ?></td>
						<td><?= $data->nama ?></td>
						<td><?= $data->nama_sekolah ?></td>
						<td><?= $data->hasil ?></td>
						<td>
							<a href="<?= base_url('admin/edit_siswa/'.$data->nisn) ?>"><input type="submit" value="Edit" class="btn btn-info" name="edit" /></a>
							<a href="<?= base_url('admin/delete_siswa/'.$data->nisn) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>