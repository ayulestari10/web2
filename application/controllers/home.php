<?php  

class Home extends CI_Controller{
	function index(){
		$this->load->view('home');
	}

	function visi_misi(){
		$data = array(
			'title'		=> 'Visi Misi | SMK Muhammadiyah 2 Palembang',
			'content'	=> 'visi_misi'		
		);
		$this->load->view('includes2/template2', $data);
	}

	function pengumuman(){
		$this->load->model('announce_model');
		$data = array(
			'data'		=> $this->announce_model->get_all(),
			'title'		=> 'Pengumuman | SMK Muhammadiyah 2 Palembang',
			'content'	=> 'pengumuman'		
		);
		$this->load->view('includes2/template2', $data);
	}

	function hasil_seleksi(){
		$this->load->model('siswa_model');
		
		$data = array(
			'dt' 		=> $this->siswa_model->get_all(),
			'title'		=> 'Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'pengumuman_lulus'
		);
		$this->load->view('includes/template', $data);
	}

	function struktur_organisasi(){
		$data = array(
			'title'		=> 'Struktur Organisasi | SMK Muhammadiyah 2 Palembang',
			'content'	=> 'struktur_organisasi'		
		);
		$this->load->view('includes2/template2', $data);
	}

	function profil_guru(){
		$data = array(
			'title'		=> 'Profil Guru | SMK Muhammadiyah 2 Palembang',
			'content'	=> 'profil_guru'		
		);
		$this->load->view('includes2/template2', $data);
	}	
}

?>