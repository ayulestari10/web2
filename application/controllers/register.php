<?php  

class Register extends CI_Controller{

	// Digunakan untuk menampilan halaman registrasi
	function index(){
		$data = array(
			'title'		=> 'Penerimaan Siswa Baru',
			'content'	=> 'regist'
		);
		$this->load->view('includes/template', $data);
	}

	// Digunakan untuk menginput data registrasi ke table siswa
	function regist(){
		$nama 		= $this->input->post('nama');
		$password 	= $this->input->post('password');

		// Jika nama dan password telah diinput
		if(isset($nama, $password)){
			// Jika password = konfirmasi password
			if($this->input->post('password') == $this->input->post('password2')){
				// Cek apakah nama yang dimasukkan sama dengan yang terdaftar atau berbeda
				$this->load->model('siswa_model');
				// Ambil data yang terdapat didatabase
				$cek_data = $this->siswa_model->get_data_bynama($nama);
				// Jika nama dari siswa tersebut ada
				if(isset($cek_data->nama)){
					$data_nama = $cek_data->nama;
				} else {
					$data_nama = "";
				}
				// Jika namanya berbeda registrasi sukses
				// $nama untuk setiap nama yang ada di database
				if($data_nama != $nama){
					$data = array(
						'nama'		=> $nama,
						'password'	=> md5($password)
					);
					// Masukkan data dan registrasi berhasil
					$this->siswa_model->insert($data);
					$this->session->set_userdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
				} 
				// Jika namanya sama registrasi gagal
				else {
					$this->session->set_userdata('msg', '<div class="alert alert-warning" style="text-align:center;">nama yang anda masukkan telah terdaftar sebelumnya.</div>');
				}
				// Kembali ke halaman registrasi
				$this->index();
			} 
			// Jika password tidak sama dengan konfirmasi password, maka registrasi gagal
			else {
				$this->session->set_userdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
				$this->index();
			}
		}
		// Registrasi gagal karena tidak ada data yang dimasukkan
		else {
			$this->session->set_userdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
			$this->index();
		}
	}
}

?>