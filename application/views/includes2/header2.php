<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('style.css') ?>">
	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/freelancer.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>	
	<style type="text/css">
		body{
			background-image: url('<?= base_url("images/bg2.jpg") ?>');
			background-size: cover;
		}
		.home{width: 1300px; height: 400px; border: 1px solid black;}
		.home img{width: 100%; height: 100%;}
		.boxes{
			width: 100%; height: 50px; border: 1px solid white; border-radius: 10%;
			font-size: 22px;  text-align: center; font-color: white;
			background-color: black;
		}
		.box{
			width: 100%; height: 270px; margin-left: -2%;
			background-color: white; border: 2px solid black; 
		}
		a{list-style: none;}
		h1{text-align: center}
		h3{padding-left: 4%;}
		#title{
			width: 100%; height: 200px; margin-bottom: 6%; margin-top: 5%; margin-left: -2%;
			background-color: white; border: 2px solid black;		}
		ol li{text-align: justify-all;}
		.content{margin-bottom: 5%;}
		.sidebar{margin-top: -400px;}
		.clock{width: 50px; height: 50px; margin-left: 80%; margin-top: 10%;}
	</style>
</head>
<body>
	<!-- Header -->
		<div class="header">
			<div class="row">
				<div class="col-md-12">
					<div class="home">
						<img src="<?= base_url('images/depan.jpg') ?>">
					</div>
				</div>
			</div>
		</div>
	<!-- End of Header -->

<div class="row">
	<!-- Sidebar -->
		<div class="col-md-2" style="margin-left: 2%;">
			<div class="sidebar" style="position: fixed;">
				<a href="<?= base_url('home') ?>">
					<div class="boxes" style="margin-top: 4%;">
						Home
					</div>
				</a><br>
				<a href="<?= base_url('home/index#titlevm') ?>">
					<div class="boxes">
						Visi Misi				
					</div>
				</a><br>

				<a href="#">
					<div class="boxes" style="height: 65px; font-size: 20px;">
						Struktur<br>Organisasi
					</div>
				</a><br>

				<a href="#">
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
	<!-- End of Sidebar -->

	<!-- Content -->
		<div class="col-md-7" style="margin-left: 2%;">
			<div class="content">
				<div id="title">
					<h1>Selamat Datang di Website<br>SMK Muhammadiyah 2 Palembang</h1> 
				</div>
				
				<div class="box">
					<h3>Syarat-syarat pendaftaran :</h3>
 					<ol>
 						<li>Pendaftaran dimulai tanggal 1 Juni 2016 – 10 Juli 2016</li>
 						<li>Nilai Ujian Nasional untuk mata pelajaran Bahasa Inggris, Bahasa Indonesia, Matematika dan IPA minimal 65</li>
 						<li>Mengisi Formulir secara online pada menu Pendaftaran yang ada di website ini</li>
 						<li>Sehat jasmani dan rohani</li>
 						<li>Berasal dari SMP/ MTs Negeri dan Swasta di seluruh Indonesia</li>
 						<li>Mengikuti ujian tertulis pada hari Senin, 11 Juli 2016 dengan membawa nomor ujian</li>
 						<li>Hasil akhir akan diumumkan melalui website ini pada hari Senin, 18 Juli 2016</li>
 					</ol>
				</div>
			</div>
		</div>
	<!-- End of Content -->

	<!-- Clock -->
		<div class="clock">
			<div class="col-md-3">
			    <div id="a">
					<div id="b">
						<div id="c">
							<div id="d">
								<div id="sh">
									<div class="hh">
										<div class="h"></div>
									</div>
									<div class="mm">
										<div class="m"></div>
										<div class="mr"></div>
									</div>
									<div class="ss">
										<div class="s"></div>
									</div>
								</div>
								<div id="ii">
								<b><i></i><i></i><i></i><i></i></b>
								<b><i></i><i></i><i></i><i></i></b>
								<b><i></i><i></i><i></i><i></i></b>
								<b><i></i><i></i><i></i><i></i></b>
								<b><i></i><i></i><i></i><i></i></b>
								<b><i></i><i></i><i></i><i></i></b>
								</div>
								<div id="e">
									<div id="f">
										<u>12<u>1<u>2<u>3</u>4</u>5</u></u>
									</div>
									<div id="g">
										<u><u>11<u>10<u>9</u>8</u>7</u>6</u>
									</div>
									<div id="q"><a href="" style="position:relative;z-index:1000;color:#222;text-decoration:none;">Clock</a></div>
								</div>
								<div class="hh">
									<div class="h"></div>
								</div>
								<div class="mm">
									<div class="m"></div>
									<div class="mr"></div>
								</div>
								<div class="ss">
									<div class="s"></div>
									<div class="sr"></div>
								</div>
								<div id="k"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End of Clock -->

	<!-- Calender -->

	<!-- End Of Calender -->
</div>