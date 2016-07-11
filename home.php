<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/jquery.datepicker.css">

	<link rel="stylesheet" type="text/css" href="assets/media/screen.css" />
	<script type="text/javascript" src="assets/js/swfobject.js"></script>

	<style type="text/css">
		.big{
			width: 1000px; height: 545px; margin-left: 5%;
			border: 1px solid blue; background-color: skyblue;
		}
		.header{
			width: 980px; height: 150px; margin-top: 5px; 
			margin-left: 1%;
			border: 1px solid blue; border-radius: 5%; 
		}
		.header img{width: 100%; height: 100%; border-radius: 5%; }
		.sidebar{margin-top: 1%;}
		.bigContent{
			margin-top: 1%; border: 1px solid blue; border-radius: 5%;
			background-color: white;
			margin-left: 20px; width: 800px; height: 360px;
		}
		.boxes{
			width: 100px; height: 30px; margin-bottom: -4%;
			border: 1px solid white; border-radius: 10%;
			font-size: 14px;  text-align: center; font-color: white;
			background-color: black;
		}
		.content{
			margin-left: 120px; width: 650px; height: 320px;
		}
		ol li{font-size: 14px;}
		h3{text-align: center;}
		.isi{margin-top: 5%; margin-left: 4%;}
		.footer{text-align: center; margin-top: 30px;}
		.jam{border: 1px solid black;}
		.plugin{
			margin-top: -350px; margin-left: 820px; width: 170px; 
		}
		.kalender{margin-bottom: 30px; height: 150px; width: 170px;}
		.jam{
			margin-bottom: -10px; height: 150px; width: 170px;
			font-family: 'Open Sans', Arial, Helvetica, sans-serif;
			font-size: 12px;
		}
</style>
</head>
<body>

<div class="big">
	<div class="row">
		<div class="col-md-12">
			<div class="header">
				<img src="images/depan.jpg" style="height: 150px; margin-right: 15px;" />
			</div>
		</div>
	</div>

	<div class="row">
		<div class="bigContent">
			<!-- Sidebar -->
				<div class="sidebar">
					<div class="col-md-2">
						<a href="#">
							<div class="boxes">
								Home
							</div>
						</a><br>
						<a href="#">
							<div class="boxes">
								Visi Misi				
							</div>
						</a><br>

						<a href="#">
							<div class="boxes" style="height: 50px;">
								Struktur<br>Organisasi
							</div>
						</a><br>

						<a href="#">
							<div class="boxes">
								Sejarah
							</div>
						</a><br>


						<a href="#">
							<div class="boxes">
								Pendaftaran
							</div>
						</a><br>
						
						<a href="#">
							<div class="boxes">
								Login
							</div>
						</a><br>

						<a href="#">
							<div class="boxes">
								Pengumuman
							</div>
						</a><br>
					</div>
				</div>
			<!-- End of sidebar -->

			<!-- Content -->
			<div class="content">
				<h3>Selamat Datang di Website<br>SMK Muhammadiyah 2 Palembang</h3>
				<div class="isi">
					<h5>Syarat-syarat pendaftaran :</h5>
					<ol>
						<li>Pendaftaran dimulai tanggal 1 Juni 2016 sampai 10 Juli 2016</li>
						<li>Nilai Ujian Nasional untuk mata pelajaran Bahasa Inggris, Bahasa Indonesia, Matematika dan IPA minimal 65</li>
						<li>Mengisi Formulir secara online pada menu Pendaftaran yang ada di website ini</li>
						<li>Sehat jasmani dan rohani</li>
						<li>Berasal dari SMP/ MTs Negeri dan Swasta di seluruh Indonesia</li>
						<li>Mengikuti ujian tertulis pada hari Senin, 11 Juli 2016 dengan membawa nomor ujian</li>
						<li>Hasil akhir akan diumumkan melalui website ini pada hari Senin, 18 Juli 2016</li>
					</ol> 
				</div>
			</div>

			<!-- End of content -->			
		</div>
	</div>

	<!-- Clock & Calendar -->
	<div class="plugin">
		<div class="kalender">
			<div class="input-group">
				<input type="text" class="form-control" name="date" id="date" data-select="datepicker" placeholder="dd/mm/yyyy">
				<span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
			</div>
		</div>

		<div class="jam">
			<p id="devAnalogClock"><a href="http://www.xorbin.com/">Analog flash clock widget</a></p>
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
	formatDate: function(date) {
	    var formatted = $.datePicker.utils.pad(date.getDate(), 2) + '/' + $.datePicker.utils.pad(date.getMonth() + 1, 2) + '/' + date.getFullYear();
	    return formatted;
	},
	parseDate: function(string) {
	    var date = new Date();
	    var parts = string.match(/(\d{1,2})\/(\d{1,2})\/(\d{4})/);
	    if ( parts && parts.length == 4 ) {
	        date = new Date( parts[3], parts[2] - 1, parts[1] );
	    }
	    return date;
	}
</script>

<script type="text/javascript">
	var flashvars = {
		clockSkin: 'media/skins/skin001.png'
	};
	swfobject.embedSWF(
		'media/devAnalogClock.swf', // path to the widget
		'devAnalogClock',
		'170', // width of the widget
		'150', // height of the widget
		'8',
		'media/expressInstall.swf',
		flashvars,
		{scale: '500', wmode: 'transparent'}
	);
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.datepicker.js"></script>

</body>
</html>



