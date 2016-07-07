<style type="text/css">
	.box{width: 100%, height: 100%; border: 2px solid black; margin-top: 2%; margin-bottom: 2%; padding: 2%;}
	h1,h2{text-align: center;}
	p{text-align: justify-all;}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="<?= base_url('admin') ?>" class="btn btn-info">Kembali</a>
		</div>
	</div>
	<?php foreach ($data as $item): ?>
		<div class="col-md-12">
			<div class="row">
				<div class="box">
					<div style="margin-bottom: 5%;">
						<h1><strong>Pengumuman</strong></h1>
						<h2><strong><?= $item->title ?></strong></h2>
					</div>
					<div class="content">
						<p>Waktu Pelaksanaan : <?= $item->pelaksanaan ?></p>
						<p><?= $item->detail ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>