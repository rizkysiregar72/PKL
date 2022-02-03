<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ST extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['st_m', 'tenagaahli_m']);
	}

	public function index()
	{
		$data['row'] = $this->st_m->get();
		$this->template->load('template' , 'st/data_st', $data);
	}

	public function add(){
		$st = new stdClass();
		$st->st_id = null;
		$st->tenaga_ahli_id = null;
		$st->nomor_surat = null;
		$st->tanggal = null;
		$st->jenis_tugas = null;

		$query_tenaga_ahli_id = $this->tenagaahli_m->get();

		$data = array(
			'page' 				=>'add',
			'row' 				=> $st,
			'tenaga_ahli_id'	=> $query_tenaga_ahli_id,			 
	);
		$this->template->load('template' , 'st/st_form', $data );
	}

	public function edit($id)
	{
		$query = $this->st_m->get($id);
		if($query->num_rows() > 0) {
			$st =  $query->row();
			$query_tenaga_ahli_id = $this->tenagaahli_m->get();
			$data = array(
				'page' 				=>'edit',
				'row' 				=> $st,
				'tenaga_ahli_id'	=> $query_tenaga_ahli_id,
				 
		);
			$this->template->load('template' , 'st/st_form', $data );
		}else {
			echo "<script>alert('Data Tidak Ditemukan');";
			echo "window.location='".site_url('st')."';</script>";
		}
	}

	public function proses()
	{	
		$config['upload_path']          = './uploads/st/';
        $config['allowed_types']        = 'pdf|docx|doc';
        $config['max_size']             = 10240;
		$config['file_name']            = 'st-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add']))	{
			if(@$_FILES['berkas']['name'] != null){
				if($this->upload->do_upload('berkas')){
					$post['berkas'] = $this->upload->data('file_name');
					$this->st_m->add($post);
					if($this->db->affected_rows() > 0 ) {
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
					}
					redirect('st');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('st/add');
				}
				
			} else {
				$post['berkas'] = null;
				$this->st_m->add($post);
				if($this->db->affected_rows() > 0 ) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('st');
			}
			
			
		}else if(isset($_POST['edit'])){
			if(@$_FILES['berkas']['name'] != null){
				if($this->upload->do_upload('berkas')){

					$item = $this->st_m->get($post['id'])->row();
					if($item->berkas != null){
						$target_file = './uploads/st/'.$item->berkas;
						unlink($target_file);
					}

					$post['berkas'] = $this->upload->data('file_name');
					$this->st_m->edit($post);
					if($this->db->affected_rows() > 0 ) {
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
					}
					redirect('st');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('st/add');
				} 
			} else {
				$post['berkas'] = null;
				$this->st_m->edit($post);
				if($this->db->affected_rows() > 0 ) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('st');
			}
		}
	}

	public function delete($id)
	{
		$this->st_m->delete($id);
		if($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
			redirect('st');
	}

	public function print(){
     
		$data['s'] = $this->st_m->tampil_data()->result();
		$this->load->view('st/print_st', $data);
	   }

	public function laporan(){
		   $data['row'] = $this->st_m->get();
		   $this->template->load('template' , 'st/laporan', $data);
	}

	public function stperid($id){ 
      
		$data['s'] = $this->st_m->stperid($id); 
		$this->load->view('st/print_st_perid', $data); 
		  }
}

