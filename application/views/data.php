<div class="container" style="margin-top: 4%;">
	<?php foreach ($data_siswa as $data): ?>
		<table>
			<tr colspan='2'>Data Pribadi</tr>
			<tr>
				<td>Nomor Induk Siswa / NIS</td>
				<td><?= $data->nis ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><?= $data->nama ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><?= $data->tempat_lahir ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?= $data->tanggal_lahir ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?= $data->jenis_kelamin ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><?= $data->agama ?></td>
			</tr>
			<tr>
				<td>Alamat Lengkap</td>
				<td><?= $data->alamat_lengkap ?></td>
			</tr>
			<tr>
				<td>No.Telepon</td>
				<td><?= $data->no_telepon ?></td>
			</tr>
			<tr>
				<td>No.HP</td>
				<td><?= $data->no_hp ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?= $data->email ?></td>
			</tr>

			<tr colspan='2'>Data Nilai</tr>
			<tr>
				<td> Kimia</td>
				<td><?= $data->nilai_kimia ?></td>
			</tr>
			<tr>
				<td>Biologi</td>
				<td><?= $data->nilai_biologi ?></td>
			</tr>
			<tr>
				<td>Matematika</td>
				<td><?= $data->nilai_matematika ?></td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td><?= $data->nilai_fisika ?></td>
			</tr>
			<tr>
				<td>Bahasa Indonesia</td>
				<td><?= $data->nilai_bindo ?></td>
			</tr>
			<tr>
				<td>Bahasa Inggris </td>
				<td><?= $data->nilai_bing ?></td>
			</tr>
		</table>
		

	<?= form_close() ?>
	<?php endforeach; ?>
</div>