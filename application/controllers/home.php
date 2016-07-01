<?php  

class Home extends CI_Controller{
	function index(){
		$data = array(
			'title'		=> 'Penerimaan Siswa Baru',
			'content'	=> 'home'
		);
		$this->load->view('includes/template', $data);
	}
}

?>