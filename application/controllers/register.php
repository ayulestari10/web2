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
		$no_pendaftaran 		= $this->input->post('no_pendaftaran');
		$password 	= $this->input->post('password');

		// Jika no_pendaftaran dan password telah diinput
		if(isset($no_pendaftaran, $password)){
			// Jika password = konfirmasi password
			if($this->input->post('password') == $this->input->post('password2')){
				// Cek apakah no_pendaftaran yang dimasukkan sama dengan yang terdaftar atau berbeda
				$this->load->model('siswa_model');
				// Ambil data yang terdapat didatabase
				$cek_data = $this->siswa_model->get_data_byno_pendaftaran($no_pendaftaran);
				// Jika no_pendaftaran dari siswa tersebut ada
				if(isset($cek_data->no_pendaftaran)){
					$data_no_pendaftaran = $cek_data->no_pendaftaran;
				} else {
					$data_no_pendaftaran = "";
				}
				// Jika no_pendaftarannya berbeda registrasi sukses
				// $no_pendaftaran untuk setiap no_pendaftaran yang ada di database
				if($data_no_pendaftaran != $no_pendaftaran){
					$data = array(
						'no_pendaftaran'		=> $no_pendaftaran,
						'password'	=> md5($password)
					);
					// Masukkan data dan registrasi berhasil
					$this->siswa_model->insert($data);
					$this->session->set_userdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
				} 
				// Jika no_pendaftarannya sama registrasi gagal
				else {
					$this->session->set_userdata('msg', '<div class="alert alert-warning" style="text-align:center;">no_pendaftaran yang anda masukkan telah terdaftar sebelumnya.</div>');
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