<?php  

class Login_model extends CI_Model{
	public $rows = 0;

	function __construct(){
		parent::__construct();
	}

	function cek_login_siswa($data){
		$this->load->model('siswa_model');
		$data_siswa = $this->siswa_model->get_data_byConditional($data);
		if($data_siswa->num_rows() == 1){
			 $this->rows = $data_siswa->num_rows();
		}
		return $data_siswa->result();
	}

	function cek_login_admin($data){
		$this->load->model('admin_model');
		$data_admin = $this->admin_model->get_data_byConditional($data);
		if($data_admin->num_rows() == 1){
			 $this->rows = $data_admin->num_rows();
		}
		return $data_admin->result();
	}
}

?>