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

	// Method ini digunakan untuk masuk ke halaman admin yang berisi daftar siswa dan beberapa menu (tambah admin, input pengumuman, dan lihat pengumuman).
	function index(){
		$data = array(
			'dt' 		=> $this->siswa_model->get_all(),
			'title'		=> 'Daftar Siswa | Penerimaan Siswa Baru',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function add(){
		$data = array(
			'data' 		=> $this->admin_model->get_all(),
			'title'		=> 'Add Admin | Penerimaan Siswa Baru',
			'content'	=> 'add_list_admin'
		);
		$this->load->view('includes/template', $data);
	}

	// Method ini digunakan untuk menambahkan admin dan menghapus admin.
	function add_admin(){
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');

		echo $username;
		echo $password;
		exit;
		// Jika username dan password telah diinput
		if(isset($username, $password)){
			// Jika password = konfirmasi password
			if($this->input->post('password') == $this->input->post('password2')){
				// Cek apakah username yang dimasukkan sama dengan yang terdaftar atau berbeda
				$this->load->model('admin_model');
				// Ambil data yang terdapat didatabase
				$cek_data = $this->admin_model->get_data_byKey($username);
				// Jika username dari siswa tersebut ada
				if(isset($cek_data->username)){
					$data_username = $cek_data->username;
				} else {
					$data_username = "";
				}
				// Jika usernamenya berbeda registrasi sukses
				// $username untuk setiap username yang ada di database
				if($data_username != $username){
					$data = array(
						'username'		=> $username,
						'password'		=> md5($password)
					);
					// Masukkan data dan registrasi berhasil
					$this->admin_model->insert($data);
					$this->session->set_userdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
				} 
				// Jika usernamenya sama registrasi gagal
				else {
					$this->session->set_userdata('msg', '<div class="alert alert-warning" style="text-align:center;">Username yang anda masukkan telah terdaftar sebelumnya.</div>');
				}
				// Kembali ke halaman registrasi
				redirect('admin/add');
			} 
			// Jika password tidak sama dengan konfirmasi password, maka registrasi gagal
			else {
				$this->session->set_userdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
				redirect('admin/add');$this->index();
			}
		}
		// Registrasi gagal karena tidak ada data yang dimasukkan
		else {
			$this->session->set_userdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
			redirect('admin/add');
		}
		
		$data = array(
			'data' 		=> $this->admin_model->get_all(),
			'title'		=> 'Add Admin | Penerimaan Siswa Baru',
			'content'	=> 'add_list_admin'
		);
		$this->session->set_flashdata('username', $username);
		$this->load->view('includes/template', $data);
	}

	// Method ini digunakan untuk mengedit username dan password admin.
	function edit_admin(){
		$username = $this->uri->segment(3);

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

	// Method ini digunakan untuk menghapus admin.
	function delete_admin(){
		$username = $this->uri->segment(3);

		if(isset($username)){
			$this->admin_model->delete($username);
		} else {
			redirect('admin/add');
		}
		redirect('admin/add');
	}

	/*							*
	**  AREA SISWA DI ADMIN 	**
	**							**
	*/							

	// Method ini digunakan untuk mengedit password siswa dan melihat data siswa.
	function edit_pass_siswa(){
		$nisn = $this->uri->segment(3);

		if (!isset($nisn)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')){
			$password = $this->input->post('password');

			$this->siswa_model->update($nisn, $password);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Password berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynis($nisn),
			'title'		=> 'Edit data | Penerimaan Siswa Baru',
			'content'	=> 'edit_data_by_admin'
		);
		$this->session->set_flashdata('nisn', $nisn);
		$this->load->view('includes/template', $data);
	}

	// Method ini digunakan untuk mengedit semua data siswa.
	function edit_siswa(){
		$nisn = $this->uri->segment(3);

		if (!isset($nisn)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')) {
			
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'foto'				=> $this->session->userdata('nisn') . '.png',
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
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa'),
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->siswa_model->update($nisn, $input);
			$this->siswa_model->do_upload($nisn);

			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
			redirect('admin');
			exit;
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynisn($nisn),
			'title'		=> 'Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'input_data'
		);
		$this->session->set_flashdata('nisn', $nisn);
		$this->load->view('includes/template', $data);
	}

	// Method ini digunakan untuk menghapus siswa.
	function delete_siswa(){
		$nisn = $this->uri->segment(3);
		if(isset($nisn)){
			$this->siswa_model->delete($nisn);
		} else {
			redirect('admin');
		}
		redirect('admin');
	}

}

 ?>