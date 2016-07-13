<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>slideUp demo</title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
  <style>
  div {
    background: #3d9a44;
    margin: 3px;
    width: 80px;
    height: 40px;
    float: left;
  }
  </style>
</head>
<body>
 
Click me!
<div id="a">a</div>
<div id="b">b</div>

 
<script>
$( document.body ).click(function() {
  if ( $( "#a" ).is( ":hidden" ) ) {
    $( "#b" ).show( "slow" );
  } else {
    $( "#b" ).slide();
  }
});
</script>
 
</body>
</html>