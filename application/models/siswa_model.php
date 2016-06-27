<?php  

class Siswa_model extends CI_Model{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 	= 'siswa';
		$this->key 		= 'nis';
	}

	// Method ini digunakan untuk mengambil semua data siswa
	function get_all(){
		$query = $this->db->get($this->table); // SELECT * FROM siswa
		return $query->result();
	}

	// Method ini digunakan untuk mengambil 1 baris data siswa sesuai dengan nisnya
	function get_data_byNis($nis){
		$this->db->where($this->key, $nis); // SELECT * FROM siswa WHERE nis = $nis
		$query = $this->db->get($this->table);
		return $query->row();
	}

	// Method ini digunakan untuk menginput data ke table siswa
	function insert($data){
		return $this->db->insert($this->table, $data); // INSERT INTO siswa(nama,..) VALUES ('ayu',..)
	}

	// Method ini digunakan untuk mengupdate data siswa sesuai dengan nisnya
	function update($nis, $data){
		$this->db->where($this->key, $nis); // UPDATE siswa SET nama= 'Azhary', nis ='9', password ='4kuGanteng' WHERE nis= $nis
		return $this->db->update($this->table, $data);
	}

	// Method ini digunakan untuk menghapus 1 baris data siswa sesuai dengan nisnya
	function delete($nis){
		return $this->db->delete($this->table, array($this->key => $nis)); // DELETE FROM siswa WHERE nis = $nis
	}

	// Method ini digunakan untuk mengambil data 
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}


}

?>