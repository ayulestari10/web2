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
			'content'	=> 'list_announce',
			'data'		=> $this->announce_model->get_all()
		);
		$this->load->view('includes/template', $data);	
	}

	function announce(){
		$data = array(
			'title'		=> 'Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'announce',
			'data'		=> $this->announce_model->get_all()
		);
		$this->load->view('includes/template', $data);	
	}

	function input(){
		if($this->input->post('input')){
			$input = array (
				'title'				=> $this->input->post('title'),
				'pelaksanaan'		=> $this->input->post('pelaksanaan'),
				'detail'			=> $this->input->post('detail')
			);
			$this->announce_model->insert($input);
			$this->session->set_userdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diinput!</div>');
			redirect('announcement/input');
			exit;
		}
		$data = array(
			'title'		=> 'Input Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'input_announce'
		);
		$this->load->view('includes/template', $data);
	}
	
	function edit_announce(){
		$id_announce = $this->uri->segment(3);

		if ($this->input->post('edit_announce')) {
			$data = array (
				'title'				=> $this->input->post('title'),
				'pelaksanaan'		=> $this->input->post('pelaksanaan'),
				'detail'			=> $this->input->post('detail')
			);
			
			$this->announce_model->update($id_announce, $data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
			redirect('announcement/edit_announce/'.$id_announce);
			exit;
		}

		$data = array(
			'data' 		=> $this->announce_model->get_data_byid_announce($id_announce),
			'title'		=> 'Edit Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'edit_announce'
		);
		$this->session->set_flashdata('id_announce', $id_announce);
		$this->load->view('includes/template', $data);
	}

	function delete_announce(){
		$id_announce = $this->uri->segment(3);
		if(isset($id_announce)){
			$this->announce_model->delete($id_announce);
		} else {
			redirect('announcement/');
		}
		redirect('announcement/');
	}
}

?>