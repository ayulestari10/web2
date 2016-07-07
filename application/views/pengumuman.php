<style type="text/css">
	.boxp{
		width: 100%, height: auto; border: 2px solid black; margin-top: 2%; 
		margin-bottom: 2%; padding: 2%; margin-left: 14%;
		background-color: white; 
	}
	h1,h2{text-align: center;}
	p{text-align: justify-all;}
</style>

<div class="container">
	<div class="col-md-12">
		<?php foreach ($data as $item): ?>
			<div class="row">
				<div class="boxp">
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
		<?php endforeach; ?>
	</div>
</div>