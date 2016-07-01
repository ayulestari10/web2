<style type="text/css">
	h1{text-align: center; margin-bottom: 4%;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1> Pengumuman</h1>
			<div class="form-group">
				<label for="title" >*Judul</label>
				<input class="form-control" type="text" name="title" value="<?= $data->title ?>" />
			</div>
			<div class="form-group">
				<label for="pelaksanaan" >Waktu Pelaksanaan</label>
				<input class="form-control" type="text" name="pelaksanaan" value="<?= $data->pelaksanaan ?>" />
			</div>
			<div class="form-group">
				<label for="images" >Images</label>
				<input class="form-control" type="text" name="images" value="<?= $data->images ?>" />
			</div>
			<div class="form-group">
				<label for="detail" >Detail Pengumuman</label>
				<textarea class="form-control" name="detail"><?= $data->detail ?></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom: 2%; margin-top: 2%;">
	        <div class="col-md-1">
	            <input type="submit" value="Edit" class="btn btn-success"/>
	        </div>
	    </div>
	</div>
</div>