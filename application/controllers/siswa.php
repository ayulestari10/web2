<?php 

class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
		$nis = $this->session->userdata('nis');
		if (!isset($nis)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function edit(){
		if ($this->input->post('edit')) {
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'asal_sekolah'		=> $this->input->post('asal_sekolah'),
				'foto'				=> $this->input->post('userfile'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tanggal_lahir'		=> $this->input->post('tanggal_lahir'),
				'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
				'agama'				=> $this->input->post('agama'),
				'alamat_lengkap'	=> $this->input->post('alamat_lengkap'),
				'no_telepon'		=> $this->input->post('no_telepon'),
				'no_hp'				=> $this->input->post('no_hp'),
				'email'				=> $this->input->post('email'),
				'nilai_kimia'		=> $this->input->post('nilai_kimia'),
				'nilai_biologi'		=> $this->input->post('nilai_biologi'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_fisika'		=> $this->input->post('nilai_fisika'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_bing'		=> $this->input->post('nilai_bing')
			);
			$this->siswa_model->update($this->session->userdata('nis'), $input);
			$id_siswa = $this->siswa_model->get_id($this->session->userdata('nis'));
			$this->siswa_model->do_upload($id_siswa);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_byNis($this->session->userdata('nis')),
			'title'		=> 'Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'edit_data'
		);
		$this->load->view('includes/template', $data);
	}
	
	function kartu(){
		$data = array(
        	'data' 		=> $this->siswa_model->get_data_byNis($this->session->userdata('nis')),
        	'id_siswa'	=> $this->siswa_model->get_id($this->session->userdata('nis'))
        );
        $this->load->view('kartu', $data);
	}
	
	public function kartu_peserta() {
        $data = array(
        	'data' 		=> $this->siswa_model->get_data_byNis($this->session->userdata('nis')),
        	'id_siswa'	=> $this->siswa_model->get_id($this->session->userdata('nis'))
        );
        //load the view and saved it into $html variable
        $html = $this->load->view('kartu', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = $this->session->userdata('nis').".pdf";
 
        //load mPDF library
        $this->load->library('m_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }
	
}

 ?>