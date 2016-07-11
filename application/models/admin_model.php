<?php  

class Admin_model extends CI_Model{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 	= 'admin';
		$this->key 		= 'username';
	}

	// Method ini digunakan untuk mengambil semua data admin
	function get_all(){
		$query = $this->db->get($this->table); // SELECT * FROM admin
		return $query->result();
	}

	// Method ini digunakan untuk mengambil 1 baris data admin sesuai dengan usernamenya
	function get_data_byKey($username){
		$this->db->where($this->key, $username); // SELECT * FROM admin WHERE username = $username
		$query = $this->db->get($this->table);
		return $query->row();
	}

	// Method ini digunakan untuk mengambil username dari seorang admin
	function get_username($username){
		$this->db->where($this->key, $username); // SELECT * FROM admin WHERE username = $username
		$query = $this->db->get($this->table);
		foreach($query->result() as $row){
			$username = $row->username;
		}
		return $username;
	}

	function get_id_admin(){
		$this->db->where($this->key, $username); // SELECT * FROM admin WHERE username = $username
		$query = $this->db->get($this->table);
		foreach($query->result() as $row){
			$id_admin = $row->id_admin;
		}
		return $id_admin;
	}

	// Method ini digunakan untuk menginput data ke table admin
	function insert($data){
		return $this->db->insert($this->table, $data); // INSERT INTO admin(nama,..) VALUES ('ayu',..)
	}

	// Method ini digunakan untuk mengupdate data admin sesuai dengan usernamenya
	function update($username, $data){
		$this->db->where($this->key, $username); // UPDATE admin SET username ='9', password ='4kuGanteng' WHERE username= $username
		return $this->db->update($this->table, $data);
	}

	// Method ini digunakan untuk menghapus 1 baris data admin sesuai dengan usernamenya
	function delete($username){
		return $this->db->delete($this->table, array($this->key => $username)); // DELETE FROM admin WHERE username = $username
	}

	// Method ini digunakan untuk mengambil data 
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

}

?>