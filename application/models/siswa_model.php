<?php  

class Siswa_model extends CI_Model{
	private $table;
	private $key;
	var $foto;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'siswa';
		$this->key 				= 'no_pendaftaran';
		$this->foto 			= realpath(APPPATH .'../foto');
		$this->galerry_path_url = base_url().'foto/';
	}

	// Method ini digunakan untuk mengambil semua data siswa
	function get_all(){
		$query = $this->db->get($this->table); // SELECT * FROM siswa
		return $query->result();
	}

	// Method ini digunakan untuk mengambil 1 baris data siswa sesuai dengan no_pendaftarannya
	function get_data_byno_pendaftaran($no_pendaftaran){
		$this->db->where($this->key, $no_pendaftaran); // SELECT * FROM siswa WHERE no_pendaftaran = $no_pendaftaran
		$query = $this->db->get($this->table);
		return $query->row();
	}

	// Method ini digunakan untuk menginput data ke table siswa
	function insert($data){
		return $this->db->insert($this->table, $data); // INSERT INTO siswa(nama,..) VALUES ('ayu',..)
	}

	// Method ini digunakan untuk mengupdate data siswa sesuai dengan no_pendaftarannya
	function update($no_pendaftaran, $data){
		$this->db->where($this->key, $no_pendaftaran); // UPDATE siswa SET nama= 'Azhary', no_pendaftaran ='9', password ='4kuGanteng' WHERE no_pendaftaran= $no_pendaftaran
		return $this->db->update($this->table, $data);
	}

	// Method ini digunakan untuk menghapus 1 baris data siswa sesuai dengan no_pendaftarannya
	function delete($no_pendaftaran){
		return $this->db->delete($this->table, array($this->key => $no_pendaftaran)); // DELETE FROM siswa WHERE no_pendaftaran = $no_pendaftaran
	}

	// Method ini digunakan untuk mengambil data 
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	// Method ini digunakan untuk mengambil 1 baris data siswa sesuai no_pendaftarannya dan mengembalikan id siswa tersebut
	function get_id($no_pendaftaran){
		$this->db->where($this->key, $no_pendaftaran); // SELECT * FROM siswa WHERE no_pendaftaran = $no_pendaftaran
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_siswa = $row->id_siswa;
		}
		return $id_siswa;
	}

	function do_upload($id_siswa){
		unlink(realpath(APPPATH . '../foto/' . $id_siswa . '.png'));

		$config = array (
			'file_name' 	=> $id_siswa. '.png',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> $this->foto,
			'max_size' 		=> 5000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
	}

}

 ?>