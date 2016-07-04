<?php  

class Foto_upload_model extends CI_Model{
	var $image_path;

	function __construct() {
	     parent::__construct();
	     $this->image_path = realpath(APPPATH . '../foto');
	}

	function upload_foto(){
		$config = array (
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> $this->image_path,
			'max_size' 		=> 2000
		);
		$this->load->library('upload', $config);

		// do_upload method dari library upload, yang otomatis akan menyimpan foto dari fungsi userfile namun jika $this->upload->do_upload('foto') akan menyimpan foto dari tag foto
		if ($this->upload->do_upload()) {
			$data_gambar = $this->upload->data();
			return $data_gambar['file_name'];
		}
	}
}

 ?>