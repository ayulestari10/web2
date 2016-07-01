<?php  

class Siswa_model extends CI_Model{
	private $table;
	private $key;
	var $foto;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'siswa';
		$this->key 				= 'nis';
		$this->foto 			= realpath(APPPATH .'../foto');
		$this->galerry_path_url = base_url().'foto/';
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

	// Method ini digunakan untuk mengambil 1 baris data siswa sesuai nisnya dan mengembalikan id siswa tersebut
	function get_id($nis){
		$this->db->where($this->key, $nis); // SELECT * FROM siswa WHERE nis = $nis
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
			'max_size' 		=> 2000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		/*$image_data= $this->upload->data();

		$config = array (
			'source_image' 	=> $image_data['full_path'],
			'maintain_ratio' => true
		);

		$this->load->library('image_lib', $config);
		$this->image_lib -> resize(); 
		*/
	}

	function get_foto(){
		$files = scandir($this->galerry_path);
		$files = array_diff($files, array('.','..'));

		$foto = array();
		foreach ($files as $file){
			$foto[] = array (
				'url' => $this->foto_url . $file
			);
		}
		return $foto;
	}

}

?>