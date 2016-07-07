<?php 

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('login/admin');
		   exit;
		}
	}

	// test berhasil login/tidak
	function index(){
		$data = array(
			'dt' 		=> $this->siswa_model->get_all(),
			'title'		=> 'Edit | Penerimaan Siswa Baru',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function edit_admin(){
		$username = $this->uri->segment(3);
		//if(!isset($username)){
			//redirect('admin');
			//exit;
		//}
		if($this->input->post('edit_admin')){
			$data = array(
				'username'	=> $this->input->post('username'),
				'password'	=> md5($this->input->post('password'))
			);
			$this->admin_model->update($username, $data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}
		

		$data = array(
			'data' 		=> $this->admin_model->get_data_byKey($username),
			'title'		=> 'Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'edit_admin'
		);
		$this->session->set_flashdata('username', $username);
		$this->load->view('includes/template', $data);
	}

	function delete_admin(){
		$username = $this->uri->segment(3);
		if(isset($username)){
			$this->admin_model->delete($username);
		} else {
			redirect('admin');
		}
		redirect('admin');
	}

	function edit_siswa(){
		$no_pendaftaran = $this->uri->segment(3);
		if (!isset($no_pendaftaran)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')) {
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tanggal'			=> $this->input->post('tanggal'),
				'bulan'				=> $this->input->post('bulan'),
				'tahun'				=> $this->input->post('tahun'),
				'alamat_lengkap'	=> $this->input->post('alamat_lengkap'),
				'no_telp_hp'		=> $this->input->post('no_telp_hp'),
				'email'				=> $this->input->post('email'),
				'keahlian'			=> $this->input->post('keahlian'),
				'nama_sekolah'		=> $this->input->post('nama_sekolah'),
				'tahun_lulus'		=> $this->input->post('tahun_lulus'),
				'no_sttb'			=> $this->input->post('no_sttb'),
				'nisn'				=> $this->input->post('nisn'),
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa'),
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->siswa_model->update($no_pendaftaran, $input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($no_pendaftaran),
			'title'		=> 'Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'edit_data2'
		);
		$this->session->set_flashdata('no_pendaftaran', $no_pendaftaran);
		$this->load->view('includes/template', $data);
	}

	function edit(){
		$no_pendaftaran = $this->uri->segment(3);
		if (!isset($no_pendaftaran)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')) {
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'foto'				=> $this->input->post('userfile'),
				'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tanggal'			=> $this->input->post('tanggal'),
				'bulan'				=> $this->input->post('bulan'),
				'tahun'				=> $this->input->post('tahun'),
				'alamat_lengkap'	=> $this->input->post('alamat_lengkap'),
				'no_telp_hp'		=> $this->input->post('no_telp_hp'),
				'email'				=> $this->input->post('email'),
				'keahlian'			=> $this->input->post('keahlian'),
				'nama_sekolah'		=> $this->input->post('nama_sekolah'),
				'tahun_lulus'		=> $this->input->post('tahun_lulus'),
				'no_sttb'			=> $this->input->post('no_sttb'),
				'nisn'				=> $this->input->post('nisn'),
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa'),
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->siswa_model->update($no_pendaftaran, $input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($no_pendaftaran),
			'title'		=> 'Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'edit_data'
		);
		$this->session->set_flashdata('no_pendaftaran', $no_pendaftaran);
		$this->load->view('includes/template', $data);
	}

	function delete(){
		$no_pendaftaran = $this->uri->segment(3);
		if(isset($no_pendaftaran)){
			$this->siswa_model->delete($no_pendaftaran);
		} else {
			redirect('admin');
		}
		redirect('admin');
	}

}

 ?>