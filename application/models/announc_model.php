<?php  

class Announc_model extends CI_Model{
	private $table;
	private $key;
	var $images;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');

		$this->table 			= 'announce';
		$this->key 				= 'id_announce';
		$this->foto 			= realpath(APPPATH .'../foto');
		$this->galerry_path_url = base_url().'foto/';
	}

	
}

?>