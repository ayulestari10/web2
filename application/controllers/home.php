<?php  

class Home extends CI_Controller{
	function index(){
		$this->load->view('home');
	}

	function visi_misi(){
		$this->load->view('visi_misi');
	}

	function hasil_seleksi(){
		$this->load->model('siswa_model');
		
		$data = array(
			'dt' 		=> $this->siswa_model->get_all()
		);
		$this->load->view('pengumuman_lulus', $data);
	}

	function struktur_organisasi(){
		$this->load->view('struktur_organisasi');
	}

	function sejarah(){
		$this->load->view('sejarah');
	}	
}

?>