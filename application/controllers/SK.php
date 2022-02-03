<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SK extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['sk_m', 'tenagaahli_m']);
	}

	public function index()
	{
		$data['row'] = $this->sk_m->get();
		$this->template->load('template' , 'sk/data_sk', $data);
	}

	public function add(){
		$sk = new stdClass();
		$sk->sk_id = null;
		$sk->tenaga_ahli_id = null;
		$sk->nomor_surat = null;
		$sk->tmt_pengangkatan = null;

		$query_tenaga_ahli_id = $this->tenagaahli_m->get();

		$data = array(
			'page' 				=>'add',
			'row' 				=> $sk,
			'tenaga_ahli_id'	=> $query_tenaga_ahli_id,			 
	);
		$this->template->load('template' , 'sk/sk_form', $data );
	}

	public function edit($id)
	{
		$query = $this->sk_m->get($id);
		if($query->num_rows() > 0) {
			$sk =  $query->row();
			$query_tenaga_ahli_id = $this->tenagaahli_m->get();
			$data = array(
				'page' 				=>'edit',
				'row' 				=> $sk,
				'tenaga_ahli_id'	=> $query_tenaga_ahli_id,
				 
		);
			$this->template->load('template' , 'sk/sk_form', $data );
		}else {
			echo "<script>alert('Data Tidak Ditemukan');";
			echo "window.location='".site_url('sk')."';</script>";
		}
	}

	public function proses()
	{	
		$config['upload_path']          = './uploads/sk/';
        $config['allowed_types']        = 'pdf|docx|doc';
        $config['max_size']             = 10240;
		$config['file_name']            = 'sk-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add']))	{
			if(@$_FILES['berkas']['name'] != null){
				if($this->upload->do_upload('berkas')){
					$post['berkas'] = $this->upload->data('file_name');
					$this->sk_m->add($post);
					if($this->db->affected_rows() > 0 ) {
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
					}
					redirect('sk');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('sk/add');
				}
				
			} else {
				$post['berkas'] = null;
				$this->sk_m->add($post);
				if($this->db->affected_rows() > 0 ) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('sk');
			}
			
			
		}else if(isset($_POST['edit'])){
			if(@$_FILES['berkas']['name'] != null){
				if($this->upload->do_upload('berkas')){

					$item = $this->sk_m->get($post['id'])->row();
					if($item->berkas != null){
						$target_file = './uploads/sk/'.$item->berkas;
						unlink($target_file);
					}

					$post['berkas'] = $this->upload->data('file_name');
					$this->sk_m->edit($post);
					if($this->db->affected_rows() > 0 ) {
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
					}
					redirect('sk');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('sk/add');
				} 
			} else {
				$post['berkas'] = null;
				$this->sk_m->edit($post);
				if($this->db->affected_rows() > 0 ) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('sk');
			}
		}
	}

	public function delete($id)
	{
		$this->sk_m->delete($id);
		if($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
			redirect('sk');
	}

	public function print(){
		
		$data['s'] = $this->sk_m->tampil_data()->result();
		$this->load->view('sk/print_sk', $data);
	 }
	
	public function laporan()
	{
		$data['row'] = $this->sk_m->get();
		$this->template->load('template' , 'sk/laporan', $data);
	}

	public function skperid($id){ 
      
		$data['s'] = $this->sk_m->skperid($id); 
		 
		$this->load->view('sk/print_sk_perid', $data); 
		  }
}

