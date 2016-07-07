<?php  

class Siswa_model extends CI_Model{
	private $table;
	private $key;
	var $foto;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'siswa';
		$this->key 				= 'nisn';
		$this->foto 			= realpath(APPPATH.'../foto');
		$this->galerry_path_url = base_url().'foto/';
	}

	// Method ini digunakan untuk mengambil semua data siswa
	function get_all(){
		$query = $this->db->get($this->table); // SELECT * FROM siswa
		return $query->result();
	}

	// Method ini digunakan untuk mengambil 1 baris data siswa sesuai dengan nisnnya
	function get_data_bynisn($nisn){
		$this->db->where($this->key, $nisn); // SELECT * FROM siswa WHERE nisn = $nisn
		$query = $this->db->get($this->table);
		return $query->row();
	}

	// Method ini digunakan untuk menginput data ke table siswa
	function insert($data){
		return $this->db->insert($this->table, $data); // INSERT INTO siswa(nisn,..) VALUES ('ayu',..)
	}

	// Method ini digunakan untuk mengupdate data siswa sesuai dengan nisnnya
	function update($nisn, $data){
		$this->db->where($this->key, $nisn); // UPDATE siswa SET nisn= 'Azhary', nisn ='9', password ='4kuGanteng' WHERE nisn= $nisn
		return $this->db->update($this->table, $data);
	}

	// Method ini digunakan untuk menghapus 1 baris data siswa sesuai dengan nisnnya
	function delete($nisn){
		return $this->db->delete($this->table, array($this->key => $nisn)); // DELETE FROM siswa WHERE nisn = $nisn
	}

	// Method ini digunakan untuk mengambil data 
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	// Method ini digunakan untuk mengambil 1 baris data siswa sesuai nisnnya dan mengembalikan id siswa tersebut
	function get_id($nisn){
		$this->db->where($this->key, $nisn); // SELECT * FROM siswa WHERE nisn = $nisn
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$nisn = $row->nisn;
		}
		return $nisn;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM siswa ORDER BY nisn ASC LIMIT 1');
		foreach($data->result() as $row){
			$nisn = $row->nisn;
		}
		return $nisn;
	}

	function do_upload($nisn){
		//unlink(realpath(APPPATH . '../foto/' . $nisn . '.png'));

		$config = array (
			'file_name' 	=> $nisn.'.png',
			'upload_path'	=> '/foto',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> $this->foto,
			'max_size' 		=> 2000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
	}

}

 ?>