<?php foreach($data_siswa as $data): ?>
<h2 style="text-align: center;">Selamat Datang <?= $data->nama ?></h2>
<?php endforeach; ?>

<div class="row">
	<div class="col-md-4">
		<b>Petunjuk pendaftaran :</b>
		<ol>
			<li>Input data</li>
			<li>Periksa nilai sesuai dengan rapor</li>
		</ol>
	</div>
</div>