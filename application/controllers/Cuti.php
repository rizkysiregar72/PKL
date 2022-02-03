<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['cuti_m', 'tenagaahli_m']);
	}

	public function index()
	{
		$data['row'] = $this->cuti_m->get();
		$this->template->load('template' , 'cuti/data_cuti', $data);
	}

	public function add(){
		$cuti = new stdClass();
		$cuti->cuti_id = null;
		$cuti->tenaga_ahli_id = null;
		$cuti->tanggal_pengajuan = null;
		$cuti->jenis_cuti = null;
		$cuti->tanggal_mulai = null;
		$cuti->tanggal_selesai = null;
		$cuti->jumlah_hari = null;

		$query_tenaga_ahli_id = $this->tenagaahli_m->get();

		$data = array(
			'page' 		=>'add',
			'row' 		=> $cuti,
			'tenaga_ahli_id'	=> $query_tenaga_ahli_id,			 
	);
		$this->template->load('template' , 'cuti/cuti_form', $data );
	}

	public function edit($id)
	{
		$query = $this->cuti_m->get($id);
		if($query->num_rows() > 0) {
			$cuti =  $query->row();
			$query_tenaga_ahli_id = $this->tenagaahli_m->get();
			$data = array(
				'page' 		=>'edit',
				'row' 		=> $cuti,
				'tenaga_ahli_id'	=> $query_tenaga_ahli_id,
				 
		);
			$this->template->load('template' , 'cuti/cuti_form', $data );
		}else {
			echo "<script>alert('Data Tidak Ditemukan');";
			echo "window.location='".site_url('cuti')."';</script>";
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add']))	{
			$this->cuti_m->add($post);
			
			}else if(isset($_POST['edit'])){
				$this->cuti_m->edit($post);

			}
			if($this->db->affected_rows() > 0 ) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
			}
				redirect('cuti');
		
	}

	public function delete($id)
	{
		$this->cuti_m->delete($id);
		if($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
			redirect('cuti');
	}

	public function print(){
     
		$data['s'] = $this->cuti_m->tampil_data()->result();
		$this->load->view('cuti/print_cuti', $data);
	   }
	
	public function laporan()
	{
		$data['row'] = $this->cuti_m->get();
		$this->template->load('template' , 'cuti/laporan', $data);
	}

	public function cutiperid($id){ 
      
		$data['s'] = $this->cuti_m->cutiperid($id); 
		$this->load->view('cuti/print_cuti_perid', $data); 
		  }
}

