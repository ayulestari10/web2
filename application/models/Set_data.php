<?php  

class Set_data extends CI_Model{

	function validate(){
		$query = $this->db->query("SELECT * FROM user WHERE nis='".$this->input->post('nis')."' AND password='".md5($this->input->post('password'))."' LIMIT 1");
		
		$baris = $query->num_rows();

		if($baris ==1){
			foreach ($query->result() as $row) {
				$role = $row->role;
			}
			$this->session->set_userdata('role', $role);
			return true;
		}
		
	}

	function daftar_akun(){
		$is_siswa = $this->input->post('nis');
		if ($is_siswa) {
			$role = "siswa";
		} else {
			$role = "admin";
		}

		$data = array(
			'nis' 			=> $this->input->post('nis'),
			'password' 		=> md5($this->input->post('password')),
			'role'			=> $role
		);

		$insert= $this->db->insert('user', $data);
		return $insert;
	}

	function add_data($data){
		$this->db->query('INSERT INTO data(nis, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat_lengkap, no_telepon, email, no_hp, nilai_kimia, nilai_biologi, nilai_matematika, nilai_fisika, nilai_bindo, nilai_bing) VALUES ("'.$this->input->post("nis").'", "'.$this->input->post("nama").'","'.$this->input->post("tempat_lahir").'","'.$this->input->post("tanggal_lahir").'","'.$this->input->post("jenis_kelamin").'", "'.$this->input->post("agama").'","'.$this->input->post("alamat_lengkap").'", "'.$this->input->post("no_telepon").'", "'.$this->input->post("no_hp").'", "'.$this->input->post("email").'", "'.$this->input->post("nilai_kimia").'", "'.$this->input->post("nilai_biologi").'", "'.$this->input->post("nilai_matematika").'", "'.$this->input->post("nilai_fisika").'", "'.$this->input->post("nilai_bindo").'", "'.$this->input->post("nilai_bing").'")');
	}

	function do_upload($id_siswa){

		$config = array (
			'file_name' => $id_siswa . '.png',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->galerry_path,
			'max_size' => 2000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$image_data= $this->upload->data();

		$config = array (
			'source_image' => $image_data['full_path'],
			'new_image' => $this->galerry_path.'/carousel',
			'maintain_ratio' => true,
			'wid_siswath' => 1024,
			'height' => 700,
		);

		$this->load->library('image_lib', $config);
		$this->image_lib -> resize(); 
	
	}

	function get_images(){
		$files = scandir($this->galerry_path);
		$files = array_diff($files, array('.','..','thumbs'));

		$images = array();
		foreach ($files as $file){
			$images[] = array (
				'url' => $this->galerry_path_url . $file,
				'thumb_url' => $this->galerry_path_url . 'thumbs/'. $file
			);
		}
		return $images;
	}

	function detail_siswa(){
		$query = $this->db->query("SELECT * FROM data WHERE id_siswa='site/tampilan/'". $this->uri->segment(3));	
		return $query->result();
	
	}

	public function get_db(){
		$query = $this->db->query("SELECT * FROM data");
		return $query;
	}

	public function get_id(){
		 $q = $this->db->query("SELECT * FROM data WHERE id_siswa=".$id_siswa." LIMIT 1");

	 	foreach($q->result() as $row){
	 		$id_siswa = $row->id_siswa;
	 	}
		 return $id_siswa;
	}

	public function get_data($id_siswa){
		$query = $this->db->query("SELECT * FROM data WHERE id_siswa=".$id_siswa." LIMIT 1");
		return $query->result();
	}

	public function edit_data(){
		$id_siswa 		= $this->input->post('id_siswa');
		$nis 			= $this->input->post('nis');
		$nama 			= $this->input->post('nama');
		$tempat_lahir 	= $this->input->post('tempat_lahir');
		$tanggal_lahir 	= $this->input->post('tanggal_lahir');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$agama			= $this->input->post('agama');
		$alamat_lengkap	= $this->input->post('alamat_lengkap');
		$no_telepon		= $this->input->post('no_telepon');
		$no_hp 			= $this->input->post('no_hp');
		$email			= $this->input->post('email');
		$nilai_kimia	= $this->input->post('nilai_kimia');
		$nilai_biologi	= $this->input->post('nilai_biologi');
		$nilai_matematika= $this->input->post('nilai_matematika');
		$nilai_fisika	= $this->input->post('nilai_fisika');
		$nilai_bindo	= $this->input->post('nilai_bindo');
		$nilai_bing		= $this->input->post('nilai_bing');
	
		echo "UPDATE data SET nis='".$nis."', nama='".$nama."', tempat_lahir='".$tempat_lahir."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', agama='".$agama."', alamat_lengkap='".$alamat_lengkap."', no_telepon='".$no_telepon."',no_hp='".$no_hp."', email='".$email."', nilai_kimia='".$nilai_kimia."', nilai_biologi='".$nilai_biologi."', nilai_matematika='".$nilai_matematika."', nilai_fisika='".$nilai_fisika."', nilai_bindo='".$nilai_bindo."', nilai_bing='".$nilai_bing."' WHERE id_siswa=".$id_siswa;
		exit;
		$this->db->query("UPDATE data SET nis='".$nis."', nama='".$nama."', tempat_lahir='".$tempat_lahir."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', agama='".$agama."', alamat_lengkap='".$alamat_lengkap."', no_telepon='".$no_telepon."',no_hp='".$no_hp."', email='".$email."', nilai_kimia='".$nilai_kimia."', nilai_biologi='".$nilai_biologi."', nilai_matematika='".$nilai_matematika."', nilai_fisika='".$nilai_fisika."', nilai_bindo='".$nilai_bindo."', nilai_bing='".$nilai_bing."' WHERE id_siswa=".$id_siswa);
	}

}

?>