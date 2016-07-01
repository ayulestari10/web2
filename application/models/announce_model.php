<?php  

class Announce_model extends CI_Model{
	private $table;
	private $key;
	var $images;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');

		$this->table 			= 'announce';
		$this->key 				= 'id_announce';
		$this->images 			= realpath(APPPATH .'../images');
		$this->galerry_path_url = base_url().'images/';
	}

	// Method ini digunakan untuk mengambil semua data pengumuman
	function get_all(){
		$query = $this->db->get($this->table); // SELECT * FROM announce
		return $query->result();
	}

	// Method ini digunakan untuk mengambil 1 baris data pengumuman sesuai dengan id pengumumannya
	function get_data_byid_announce($id_announce){
		$this->db->where($this->key, $id_announce); // SELECT * FROM announce WHERE id_announce = $id_announce
		$query = $this->db->get($this->table);
		return $query->row();
	}

	// Method ini digunakan untuk menginput data ke table announce
	function insert($data){
		return $this->db->insert($this->table, $data); // INSERT INTO announce(title,..) VALUES ('Pengumuman Tes Tertulis',..)
	}

	// Method ini digunakan untuk mengupdate data pengumuman sesuai dengan id pengumumannya
	function update($id_announce, $data){
		$this->db->where($this->key, $id_announce); // UPDATE announce SET title= 'Pengumuman Tes Tertulis', id_announce ='1' WHERE id_announce= $id_announce
		return $this->db->update($this->table, $data);
	}

	// Method ini digunakan untuk menghapus 1 baris data pengumuman sesuai dengan pengumumannya
	function delete($id_announce){
		return $this->db->delete($this->table, array($this->key => $id_announce)); // DELETE FROM announce WHERE id_announce = $id_announce
	}

	// Method ini digunakan untuk mengambil data 
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	// Method ini digunakan untuk mengambil 1 baris data pengumuman sesuai pengumumannya dan mengembalikan id pengumuman tersebut
	function get_id($id_announce){
		$this->db->where($this->key, $id_announce); // SELECT * FROM pengumuman WHERE id_announce = $id_announce
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_announce = $row->id_announce;
		}
		return $id_announce;
	}

	function do_upload($id_announce){
		unlink(realpath(APPPATH . '../images/' . $id_announce . '.png'));

		$config = array (
			'file_name' 	=> $id_announce. '.png',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> $this->images,
			'max_size' 		=> 2000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
	}
	
}

?>