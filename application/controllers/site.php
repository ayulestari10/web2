<?php  

class Site extends CI_Controller{
	function index(){
		$nis 			= $this->session->userdata('nis');
		$is_logged_in 	= $this->session->userdata('is_logged_in');
		$role			= $this->session->userdata('role');
		$username		= $this->session->userdata('username');

		if(isset($nis, $is_logged_in, $role)){
			$this->input();
		} 
		else if(isset($username, $is_logged_in, $role)){
			$this->admin();
		}
		else {
			$this->home();
		}
	}

	function home(){
		$this->load->view('home');
	}

	function daftar(){
		$data = array(
			'title'		=> 'Daftar Akun | Penerimaan Siswa Baru',
			'content'	=> 'daftar_akun'
		);
		$this->load->view('includes/template', $data);
	}

	function daftar_akun(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nis', 'Nomor Induk Siswa', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('role', 'siswa', 'trim|required');
		if($this->form_validation->run()== TRUE){
			$this->login();
		}
		else{
			$this->load->model('Set_data');
			if($query = $this->Set_data->daftar_akun()){
				$this->login();
			}
			else{
				echo 'The Account is not match';
			}
		}
	}

	function validate_credentials(){
		$this->load->model('Set_data');
		$query = $this->Set_data->validate();

		if($query)
		{
			$data= array(
				'nis' 			=> $this->input->post('nis'),
				'is_logged_in'  => true,
				'role'			=> $this->session->userdata('role'),
				'id_siswa'		=> $this->session->userdata('id_siswa')
			);

			$this->session->set_userdata($data);
			redirect('site/input');
		}
		else{
			$this->index();
		}
	}

	function login(){
		$data = array(
			'title'		=> 'Masuk | Penerimaan Siswa Baru',
			'content'	=> 'login'
		);
		$this->load->view('includes/template', $data);
	}

	function daftar2(){
		$data = array(
			'title'		=> 'Daftar Admin | Penerimaan Siswa Baru',
			'content'	=> 'daftar2'
		);
		$this->load->view('includes/template', $data);
	}

	function daftar_admin(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('role', 'admin', 'trim|required');
		if($this->form_validation->run()== TRUE){
			$this->login2();
		}
		else{
			$this->load->model('Set_data');
			if($query = $this->Set_data->daftar_admin()){
				$this->login2();
			}
			else{
				echo 'The Account is not match';
			}
		}
	}

	function login_admin(){
		$this->load->model('Set_data');
		$query = $this->Set_data->validate_admin();

		if($query)
		{
			$data= array(
				'username'		=> $this->input->post('username'),
				'is_logged_in'  => true,
				'role'			=> $this->session->userdata('role')
			);

			$this->session->set_userdata($data);
			redirect('site/admin');
		}
		else{
			$this->login2();
		}
	}

	function login2(){
		$data = array(
			'title'		=> 'Login Admin | Penerimaan Siswa Baru',
			'content'	=> 'login_admin'
		);
		$this->load->view('includes/template', $data);
	}

	function admin(){
		$username 		= $this->session->userdata('username');
		$role 			= $this->session->userdata('role');
		$is_logged_in 	= $this->session->userdata('is_logged_in');
		if(isset($username, $is_logged_in, $role)){
			$this->load->model('Set_data');
			$db = $this->Set_data->get_db();
			$data = array(
				'title'		=> 'Admin Area | Penerimaan Siswa Baru',
				'content'	=> 'admin_area',
				'db'		=> $db,
				'role'		=> $this->session->userdata('role'),
				'username'	=> $this->session->userdata('username')
			);
			$this->load->view('includes/template', $data);
		}else {
			$this->login_admin();
		}
	}

	public function page(){
		$id_siswa 	= $this->uri->segment(3);
		$this->load->model('Set_data');
		$data_siswa = $this->Set_data->get_data($id_siswa);
		$data = array(
			'title'			=> 'Selamat Datang | Penerimaan Siswa Baru',
			'content'		=> 'page',
			'data_siswa'	=> $data_siswa,
		);
		$this->load->view('includes/template', $data);
	}

	function input(){
		$nis 			= $this->session->userdata('nis');
		$is_logged_in 	= $this->session->userdata('is_logged_in');
		if(isset($nis, $is_logged_in)){
			$data = array(
				'title'		=> 'Input Data | Penerimaan Siswa Baru',
				'content'	=> 'input_data',
				'role'		=> $this->session->userdata('role'),
				'nis'		=> $this->session->userdata('nis')
			);
			$this->load->view('includes/template', $data);
		} else {
			$this->login();
		}
	}

	public function input_data(){
		$this->load->model('Set_data');
		$data = array(
			'nis'			=> $this->input->post('nis'),
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
		$this->Set_data->add_data($data);
		$this->input();

	}

	public function logout(){
		$this->session->unset_userdata('nis');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_logged_in');
		$this->index();
	}

	public function edit(){
		$id_siswa 	= $this->uri->segment(3);
		$this->load->model('Set_data');
		$data_siswa = $this->Set_data->get_data($id_siswa);
		$data = array(
			'title'			=> 'Edit Data | Penerimaan Siswa Baru',
			'content'		=> 'edit_data',
			'data_siswa'	=> $data_siswa
		);
		$this->load->view('includes/template', $data);
	}

	public function edit_data(){
		$this->load->model('Set_data');
		$this->Set_data->edit_data();
		$this->edit();
	}

	public function hapus(){
		$id_siswa = $this->uri->segment(3);
		$this->db->query("DELETE FROM data WHERE id_siswa=".$id_siswa);
		$this->admin();
	}

	public function data(){
		$id_siswa 	= $this->uri->segment(3);
		$this->load->model('Set_data');
		$data_siswa = $this->Set_data->get_data($id_siswa);
		$data = array(
			'title'			=> 'Data | Penerimaan Siswa Baru',
			'content'		=> 'data',
			'data_siswa'	=> $data_siswa
		);
		$this->load->view('includes/template', $data);
	}
}

?>