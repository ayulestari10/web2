<div class="pengumuman">
	<div class="col-md-7">
		<div class="judul">
			Hasil Seleksi Penerimaan Siswa Baru<br>
			SMK Muhammadiyah 2 Palembang
		</div>
		<table class="table table-striped">
			<thead style="text-align: left;">
				<th>No.</th>
				<th style="width:250px;">No Registrasi</th>
				<th style="width:250px;">Nama</th>
				<th style="width:250px;">Asal Sekolah</th>
				<th style="width:200px;">Hasil</th>
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
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>