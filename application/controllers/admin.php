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

	function daftar_admin(){
		$data = array(
			'data' 		=> $this->admin_model->get_all(),
			'title'		=> 'Edit Admin | Penerimaan Siswa Baru',
			'content'	=> 'admin'
		);
		$this->load->view('includes/template', $data);
	}

	function edit_admin(){
		$username = $this->uri->segment(3);
		if(!isset($username)){
			redirect('daftar_admin');
			exit;
		} else {
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
			$this->siswa_model->delete($username);
		} else {
			redirect('daftar_admin');
		}
		redirect('daftar_admin');
	}

	function edit(){
		$nis = $this->uri->segment(3);
		if (!isset($nis)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')) {
			$input = array (
				'nama'			=> $this->input->post('nama'),
				'tempat_lahir'	=> $this->input->post('tempat_lahir'),
				'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
				'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
				'agama'			=> $this->input->post('agama'),
				'alamat_lengkap'=> $this->input->post('alamat_lengkap'),
				'no_telepon'	=> $this->input->post('no_telepon'),
				'no_hp'			=> $this->input->post('no_hp'),
				'email'			=> $this->input->post('email'),
				'nilai_kimia'	=> $this->input->post('nilai_kimia'),
				'nilai_biologi'		=> $this->input->post('nilai_biologi'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_fisika'	=> $this->input->post('nilai_fisika'),
				'nilai_bindo'	=> $this->input->post('nilai_bindo'),
				'nilai_bing'	=> $this->input->post('nilai_bing')
			);
			$this->siswa_model->update($nis, $input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_byNis($nis),
			'title'		=> 'Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'edit_data'
		);
		$this->session->set_flashdata('nis', $nis);
		$this->load->view('includes/template', $data);
	}

	function delete(){
		$nis = $this->uri->segment(3);
		if(isset($nis)){
			$this->siswa_model->delete($nis);
		} else {
			redirect('admin');
		}
		redirect('admin');
	}

}

 ?>