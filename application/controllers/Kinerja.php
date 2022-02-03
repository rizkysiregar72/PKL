<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['kinerja_m', 'tenagaahli_m']);
	}

	public function index()
	{
		$data['row'] = $this->kinerja_m->get();
		$this->template->load('template' , 'kinerja/data_kinerja', $data);
	}

	public function add(){
		$kinerja = new stdClass();
		$kinerja->kinerja_id = null;
		$kinerja->tenaga_ahli_id = null;
		$kinerja->nama_penilai = null;
		$kinerja->inisiatif = null;
		$kinerja->disiplin = null;
		$kinerja->tanggung_jawab = null;
		$kinerja->kerja_sama = null;
		$kinerja->pemecahan_masalah = null;
		$kinerja->pengambilan_keputusan = null;
		$kinerja->nilai_total = null;
		$kinerja->keterangan = null;

		$query_tenaga_ahli_id = $this->tenagaahli_m->get();

		$data = array(
			'page' 				=>'add',
			'row' 				=> $kinerja,
			'tenaga_ahli_id'	=> $query_tenaga_ahli_id,			 
	);
		$this->template->load('template' , 'kinerja/kinerja_form', $data );
	}

	public function edit($id)
	{
		$query = $this->kinerja_m->get($id);
		if($query->num_rows() > 0) {
			$kinerja =  $query->row();
			$query_tenaga_ahli_id = $this->tenagaahli_m->get();
			$data = array(
				'page' 				=>'edit',
				'row' 				=> $kinerja,
				'tenaga_ahli_id'	=> $query_tenaga_ahli_id,
				 
		);
			$this->template->load('template' , 'kinerja/kinerja_form', $data );
		}else {
			echo "<script>alert('Data Tidak Ditemukan');";
			echo "window.location='".site_url('kinerja')."';</script>";
		}
	}

	public function proses()
	{	
		$config['upload_path']          = './uploads/kinerja/';
        $config['allowed_types']        = 'pdf|docx|doc';
        $config['max_size']             = 10240;
		$config['file_name']            = 'kinerja-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add']))	{
			if(@$_FILES['berkas']['name'] != null){
				if($this->upload->do_upload('berkas')){
					$post['berkas'] = $this->upload->data('file_name');
					$this->kinerja_m->add($post);
					if($this->db->affected_rows() > 0 ) {
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
					}
					redirect('kinerja');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('kinerja/add');
				}
				
			} else {
				$post['berkas'] = null;
				$this->kinerja_m->add($post);
				if($this->db->affected_rows() > 0 ) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('kinerja');
			}
			
			
		}else if(isset($_POST['edit'])){
			if(@$_FILES['berkas']['name'] != null){
				if($this->upload->do_upload('berkas')){

					$item = $this->kinerja_m->get($post['id'])->row();
					if($item->berkas != null){
						$target_file = './uploads/kinerja/'.$item->berkas;
						unlink($target_file);
					}

					$post['berkas'] = $this->upload->data('file_name');
					$this->kinerja_m->edit($post);
					if($this->db->affected_rows() > 0 ) {
						$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
					}
					redirect('kinerja');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('kinerja/add');
				} 
			} else {
				$post['berkas'] = null;
				$this->kinerja_m->edit($post);
				if($this->db->affected_rows() > 0 ) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('kinerja');
			}
		}
	}

	public function delete($id)
	{
		$this->kinerja_m->delete($id);
		if($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
			redirect('kinerja');
	}

	public function print(){
     
		$data['s'] = $this->kinerja_m->tampil_data()->result();
		$this->load->view('kinerja/print_kinerja', $data);
	}

	public function laporan()
	{
		$data['row'] = $this->kinerja_m->get();
		$this->template->load('template' , 'kinerja/laporan', $data);
	}

	public function kinerjaperid($id){ 
      
		$data['s'] = $this->kinerja_m->kinerjaperid($id); 
		$this->load->view('kinerja/print_kinerja_perid', $data); 
		  }
}

