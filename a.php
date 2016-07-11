<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Analog Flash Clock. Example 2</title>
		<link rel="stylesheet" type="text/css" href="media/screen.css" />
		<script type="text/javascript" src="js/swfobject.js"></script>
	</head>

	<body>
	
		<h1>Analog flash clock. Example 2<span>(version 1.1)</span></h1>

		<p id="devAnalogClock"><a href="http://www.xorbin.com/">Analog flash clock widget</a></p>
		<script type="text/javascript">
			var flashvars = {
				clockSkin: 'media/skins/skin001.png'
			};
			swfobject.embedSWF(
				'media/devAnalogClock.swf', // path to the widget
				'devAnalogClock',
				'200', // width of the widget
				'200', // height of the widget
				'8',
				'media/expressInstall.swf',
				flashvars,
				{scale: 'noscale', wmode: 'transparent'}
			);
		</script>

		<p>This example shows how we use custom skin <i>skin001.png</i>.<br/>The skin is located in media/skins folder.</p>
		
		<p><a href="" onclick="window.location = 'view-source:' + window.location.href; return false;">View source</a> / <a href="index.html">Back</a></p>

		<p class="copyright">&copy; 2008-2009, <a href="http://www.xorbin.com/" title="Analog flash clock widget">XORBIN.COM</a> website. All rights reserved.</p>

	</body>
</html>
