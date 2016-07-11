<!DOCTYPE html>
<html>
<head>
	<title>Visi Misi | SMK Muhammadiyah 2 Palembang</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
	<?php include "base_url('style.css')" ; ?>
	<?php include "" ; ?>
</head>
<body class="yui3-skin-sam" onload="init();">

<div class="big">
	<div class="row">
		<div class="col-md-12">
			<div class="header">
				<img src="<?= base_url('images/depan.jpg') ?>" style="height: 150px; margin-right: 15px;" />
			</div>
		</div>
	</div>

	<div class="row">
		<div class="bigContent">
			<!-- Sidebar -->
				<div class="sidebar">
					<div class="col-md-2">
						<a href="<?= base_url('home') ?>">
							<div class="boxes">
								Home
							</div>
						</a><br>
						<a href="<?= base_url('home/visi_misi') ?>">
							<div class="boxes">
								Visi Misi				
							</div>
						</a><br>

						<a href="<?= base_url('home/struktur_organisasi') ?>">
							<div class="boxes" style="height: 50px;">
								Struktur<br>Organisasi
							</div>
						</a><br>

						<a href="<?= base_url('home/sejarah') ?>">
							<div class="boxes">
								Sejarah
							</div>
						</a><br>


						<a href="<?= base_url('register') ?>">
							<div class="boxes">
								Pendaftaran
							</div>
						</a><br>
						
						<a href="<?= base_url('login/siswa') ?>">
							<div class="boxes">
								Login
							</div>
						</a><br>

						<a href="<?= base_url('home/hasil_seleksi') ?>">
							<div class="boxes">
								Pengumuman
							</div>
						</a><br>
					</div>
				</div>
			<!-- End of sidebar -->

			<!-- Content -->
			<div class="content">
				<h3>Visi dan Misi<br> SMK Muhammadiyah 2 Palembang</h3>
				<div class="isi">
					<ul>
						<li>Visi</li>
							<p>Menghasilkan output yang unggul, mandiri, profesionalisme, produktif dan berjiwa wiraswasta sesuai tuntutan islam dan berasaskan pancasila.</p>
						<li>Misi</li>
						<ol>
							<li>Meningkatkan profesionalisme siswa, guru dan pegawai sesuai dengan bidang masing-masing.</li>
							<li>Terciptanya kerjasama saling menguntungkan dengan dinas/ instansi, dunia usaha dan dunia industri.</li>
							<li>SMK Muhammadiyah 2 Palembang menjadi sekolah yang bersifat ke-Islaman, ke-Indonesiaan, ke-Ilmuan dan Ke-Mandirian.</li>
						</ol>
					</ul>
				</div>
			</div>

			<!-- End of content -->			
		</div>
	</div>

	<!-- Clock & Calendar -->
	<div id="clock" class="jam">
		
	</div>

	<div class="kalender">
		<div id="mycalendar">
			
		</div>
	</div>
	<!-- Ended Clock and Calendar-->	

	<div class="row">
		<div class="footer">
			<h6>Copyright &copy; 2016 SMK Muhammadiyah 2 Palembang</h6> 
		</div>
	</div>

</div>


<script type="text/javascript">
	YUI().use('calendar', function (Y) {

	  // Create a new instance of Calendar, setting its width
	  // and height, allowing the dates from the previous
	  // and next month to be visible and setting the initial
	  // date to be November, 1982.
	  var calendar = new Y.Calendar({
	          contentBox: "#mycalendar",
	          height:'200px',
	          width:'200px',
	          showPrevMonth: true,
	          showNextMonth: true,
	          date: new Date(2016,07,12)}).render();

	});
</script>

</body>
</html>



