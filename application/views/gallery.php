<!DOCTYPE html>
<html>
<head>
	<title>CI Gallery</title>
</head>
<body>

<div id="gallery">
	
</div>

<div id="upload">
	<?php echo form_open_multipart('gallery'); ?>
	<?php echo form_upload('userfile'); ?>
	<?php echo form_submit('upload', 'Upload'); ?>
	<?php echo form_close(); ?>
</div>

</body>
</html>