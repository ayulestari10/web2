<?php  

class Site extends CI_Controller{
	public function index(){
		$nis 			= $this->session->userdata('nis');
		$is_logged_in 	= $this->session->userdata('is_logged_in');
		$role			= $this->session->userdata('role');

		if(isset($nis, $is_logged_in, $role)){
			if($role == 'siswa'){
				$this->load->model('Set_data');
				$data = array(
					'title' 	=> 'Input Data | Penerimaan Siswa Baru',
					'content' 	=> 'input_data'
				);
				$this->load->view('includes/template',$data);
			} else{
				$this->load->model('Set_data');
				$data = array(
					'title' 	=> 'Admin Area | Penerimaan Siswa Baru',
					'content' 	=> 'admin_area'
				);
				$this->load->view('includes/template',$data);
			}
		} else {
			$this->load->view('home');	
		}
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
			$this->sign_in();
		}
		else{
			$this->load->model('Set_data');
			if($query = $this->Set_data->daftar_akun()){
				$this->sign_in();
			}
			else{
				echo 'The Account is not match';
			}
		}
	}

	function sign_in(){
		$data = array(
			'title'		=> 'Masuk | Penerimaan Siswa Baru',
			'content'	=> 'sign_in'
		);
		$this->load->view('includes/template', $data);
	}

	function validate_credentials(){
		$this->load->model('Set_data');
		$query = $this->Set_data->validate();

		if($query)
		{
			$data= array(
				'nis' 			=> $this->input->post('nis'),
				'is_logged_in'  => true,
				'role'			=> $this->session->userdata('role')
			);

			$this->session->set_userdata($data);
			redirect('site/input_data');
		}
		else{
			$this->index();
		}
	}

	function input(){
		$data = array(
			'title'		=> 'Input Data | Penerimaan Siswa Baru',
			'content'	=> 'input_data'
		);
		$this->load->view('includes/template', $data);
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
		$this->data();
	}
}

?>