<?php  

class Announcement extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('announce_model');
		
		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('login/admin');
		   exit;
		}
	}
	
	function edit_announce(){
		if ($this->input->post('edit_announce')) {
			$input = array (
				'title'				=> $this->input->post('title'),
				'pelaksanaan'		=> $this->input->post('pelaksanaan'),
				'detail'			=> $this->input->post('detail'),
				'images'			=> $this->input->post('userfile')
			);
			$this->announce_model->update($this->session->userdata('id_announce'), $input);
			$id_announce = $this->announce_model->get_id($this->session->userdata('id_announce'));
			$this->announce_model->do_upload($id_announce);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->announce_model->get_data_byid_announce($this->session->userdata('id_announce')),
			'title'		=> 'Edit Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'post_announce'
		);
		$this->load->view('includes/template', $data);
	}
}

?>