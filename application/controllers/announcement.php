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

	function index(){
		$data = array(
			'title'		=> 'Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'list_announce'
		);
		$this->load->view('includes/template', $data);	
	}

	function input(){
		if($this->input->post('input')){
			$data = array(
				'title'		=> 'Input Pengumuman | Penerimaan Siswa Baru',
				'content'	=> 'input_announce'
			);
			$this->load->view('includes/template', $data);
		}
	}

	function input_announce(){
		if($this->input->post('input')){
			$input = array (
				'title'				=> $this->input->post('title'),
				'pelaksanaan'		=> $this->input->post('pelaksanaan'),
				'detail'			=> $this->input->post('detail')
			);
			$this->announce_model->insert($input);
			
			$title 			= $this->input->post('title');
			$pelaksanaan 	= $this->input->post('pelaksanaan');
			$detail 		= $this->input->post('detail');

			if(isset($title, $detail, $pelaksanaan)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diinput!</div>');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Data gagal diinput!</div>');
			}
			redirect('announcement/input');
		} else {
			redirect('announcement/input');
		}
	}
	
	function edit_announce(){
		if ($this->input->post('edit_announce')) {
			$data = array (
				'title'				=> $this->input->post('title'),
				'pelaksanaan'		=> $this->input->post('pelaksanaan'),
				'detail'			=> $this->input->post('detail')
			);
			$this->announce_model->update($this->session->userdata('id_announce'), $data);
			$id_announce = $this->announce_model->get_id($this->session->userdata('id_announce'));
			$this->announce_model->do_upload($id_announce);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->announce_model->get_data_byid_announce($this->session->userdata('id_announce')),
			'title'		=> 'Edit Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'edit_announce'
		);
		$this->load->view('includes/template', $data);
	}

	function delete_announce(){
		$id_announce = $this->uri->segment(3);
		if(isset($id_announce)){
			$this->siswa_model->delete($id_announce);
		} else {
			redirect('announcement');
		}
		redirect('announcement');
	}
}

?>