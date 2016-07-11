<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan Siswa Baru | SMK Muhammadiyah 2 Palembang</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>

	<style type="text/css">
		.big{
			width: 1000px; height: 545px;
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
		.kalender{margin-bottom: 30px; height: 200px; width: 170px;}
		.jam{
			margin-bottom: -10px; height: 100px; width: 170px;
			font-family: 'Open Sans', Arial, Helvetica, sans-serif;
			font-size: 12px;
		}
		#clock {
			position: absolute;
			width: 170px;
			height:100px;
		}
		.aclock_container {
			position: absolute;
			width: 98%;
			height: 98%;
			top: 1%;
			left: 1%;			
		}
		.aclock_clock_container {
			position: absolute;
			width: 100%;
			height: 100%;
			top: -10px;
			left: -10px;
			-webkit-border-radius: 50%;				
			border: 10px solid blue;
		}
		.aclock_dial {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0%;
			left: 0%;
			background: -moz-linear-gradient(left, rgba(30,87,153,1) 0%, rgba(133,247,239,0) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(133,247,239,0))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* Opera11.10+ */
			background: -ms-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* IE10+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#0085f7ef',GradientType=1 ); /* IE6-9 */
			background: linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* W3C */
			-webkit-border-radius: 50%;
		}
		.aclock_small_mark {
			position: absolute;
			width: 1%;
			height: 2%;
			top: 0%;
			left: 49.5%;
			background: black;	
		}
		.aclock_big_mark {
			position: absolute;
			width: 2%;
			height: 3%;
			top: 0%;
			left: 49%;
			background: red;	
		}
		.aclock_hand_container {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0%;
			left: 0%;
		}
		.aclock_hour_hand {
			position: absolute;
			width: 3%;
			height: 35%;
			bottom: 45%;
			left: 48.5%;
			background: #222;
		}
		.aclock_minute_hand {
			position: absolute;
			width: 2%;
			height: 45%;
			bottom: 45%;
			left: 49%;
			background: #111;	
		}
		.aclock_second_hand {
			position: absolute;
			width: 1%;
			height: 55%;
			bottom: 40%;
			left: 49.5%;
			background: red;	
		}
		.aclock_milli_hand {
			position: absolute;
			width: 1%;
			height: 25%;
			bottom: 45%;
			left: 49.5%;
			background: red;	
		}
		.aclock_screw {
			position: absolute;
			width: 5%;
			height: 5%;
			bottom: 47.5%;
			left: 47.5%;
			-webkit-border-radius: 50%;
			background: red;
		}
</style>

<script type="text/javascript">
	new AnalogClock({parentId: 'aclock', milliSecond: true});
	var AnalogClock = function(conf) {
			if(!conf.parentId) return;
			
			this.parent = document.getElementById(conf.parentId);
			if(!this.parent) return;				
			
			this.milliSecond = !!conf.milliSecond;
			
			this.refreshRate = 1000;
			if(this.milliSecond) this.refreshRate = 1;
			
			this.buildHTML();
			this.start();
		};
		
		AnalogClock.prototype.buildHTML = function() {
			this.container = build(this.parent, 'aclock_container');
			this.clockContainer = build(this.container, 'aclock_clock_container');
			
			for(var i = 0; i < 360; i += 6) {
				if(!(i%5)) {
					var markContainer = build(this.container, 'aclock_hand_container');
					build(markContainer, 'aclock_big_mark');
					this.rotate(markContainer, i);
				} else {
					var markContainer = build(this.container, 'aclock_hand_container');
					build(markContainer, 'aclock_small_mark');
					this.rotate(markContainer, i);
				}
			}
			
			this.hourContainer = build(this.container, 'aclock_hand_container');
			this.hourHand = build(this.hourContainer, 'aclock_hour_hand');
			this.minuteContainer = build(this.container, 'aclock_hand_container');
			this.minuteHand = build(this.minuteContainer, 'aclock_minute_hand');
			this.secondContainer = build(this.container, 'aclock_hand_container');
			this.secondHand = build(this.secondContainer, 'aclock_second_hand');
			
			if(this.milliSecond) {
				this.milliContainer = build(this.container, 'aclock_hand_container');
				this.milliHand = build(this.milliContainer, 'aclock_milli_hand');
			}
			
			this.screw = build(this.container, 'aclock_screw');
			
			this.dial = build(this.container, 'aclock_dial');
			
			function build(parent, css) {
				if(!parent) return;
				
				var div = document.createElement('div');
				if(css) div.className = css;
				
				parent.appendChild(div);
				return div;
			}
		};
		
		AnalogClock.prototype.start = function() {
			var that = this;
			var refreshRate = 1000;
			setInterval(function() {
				var now = new Date();
				var h = now.getHours()%12;
				var m = now.getMinutes();
				var s = now.getSeconds();
			
				if(that.milliSecond) { 
					var milli = now.getMilliseconds();
					that.rotate(that.milliContainer, (360/1000)*milli);
				}
				
				that.rotate(that.hourContainer,  h*30 + (m/2));
				that.rotate(that.minuteContainer, 6*m);
				that.rotate(that.secondContainer, 6*s);
			}, this.refreshRate);
		};
		
		AnalogClock.prototype.rotate = function(hand, angle) {
			hand.style['-webkit-transform'] =  'rotate('+angle+'deg)';
		};
		
		function init() {
			var clock = new AnalogClock({parentId: 'clock', milliSecond: true});
		}
 		
</script>


</head>
<body class="yui3-skin-sam" onload="init();">

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
		<div id="clock">
			
		</div>

		<div class="kalender" id="mycalendar" style="margin-top: 30%;">
			
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
	          width:'170px',
	          showPrevMonth: true,
	          showNextMonth: true,
	          date: new Date(2016,07,12)}).render();

	});
</script>

</body>
</html>



