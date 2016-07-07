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
						<td><?= $data->no_pendaftaran ?></td>
						<td><?= $data->nama ?></td>
						<td><?= $data->alamat_lengkap ?></td>
						<td>
							<a href="<?= base_url('admin/edit_siswa/'.$data->no_pendaftaran) ?>"><input type="submit" value="Edit" class="btn btn-info" name="edit" /></a>
							<a href="<?= base_url('admin/delete/'.$data->no_pendaftaran) ?>"><input type="submit" value="Hapus" class="btn btn-danger" /></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-1" style="margin-top: 4%; margin-bottom: 2%;">
			<a href="<?= base_url('admin/edit_admin') ?>" class="btn btn-default">Admin</a>
		</div>
	    <div class="col-md-2" style="margin-bottom: 2%;">
           <a href="<?= base_url('announcement/input') ?>" class="btn btn-default">Input Pengumuman</a>
        </div>
        <div class="col-md-2" style="margin-bottom: 2%;">
           <a href="<?= base_url('announcement/') ?>" class="btn btn-default">List Pengumuman</a>
        </div>
        <div class="col-md-2" style="margin-bottom: 2%;">
           <a href="<?= base_url('announcement/announce') ?>" class="btn btn-default">Lihat Pengumuman</a>
        </div>
	</div>
</div>