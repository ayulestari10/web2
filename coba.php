<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>

</head>
<body class="yui3-skin-sam">



<script>

	YUI().use('calendar', function (Y) {

	  // Create a new instance of Calendar, setting its width
	  // and height, allowing the dates from the previous
	  // and next month to be visible and setting the initial
	  // date to be November, 1982.
	  var calendar = new Y.Calendar({
	          contentBox: "#mycalendar",
	          height:'50px',
	          width:'220px',
	          showPrevMonth: true,
	          showNextMonth: true,
	          date: new Date(2016,7,12)}).render();

	});
</script>

</body>
</html>