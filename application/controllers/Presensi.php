<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['presensi_m', 'tenagaahli_m']);
	}

	public function index()
	{
		$data['row'] = $this->presensi_m->get();
		$this->template->load('template' , 'presensi/data_presensi', $data);
	}

	public function add(){
		$presensi = new stdClass();
		$presensi->presensi_id = null;
		$presensi->tenaga_ahli_id = null;
		$presensi->tanggal = null;
		$presensi->jam = null;
		$presensi->keterangan = null;

		$query_tenaga_ahli_id = $this->tenagaahli_m->get();

		$data = array(
			'page' 		=>'add',
			'row' 		=> $presensi,
			'tenaga_ahli_id'	=> $query_tenaga_ahli_id,			 
	);
		$this->template->load('template' , 'presensi/presensi_form', $data );
	}

	public function edit($id)
	{
		$query = $this->presensi_m->get($id);
		if($query->num_rows() > 0) {
			$presensi =  $query->row();
			$query_tenaga_ahli_id = $this->tenagaahli_m->get();
			$data = array(
				'page' 		=>'edit',
				'row' 		=> $presensi,
				'tenaga_ahli_id'	=> $query_tenaga_ahli_id,
				 
		);
			$this->template->load('template' , 'presensi/presensi_form', $data );
		}else {
			echo "<script>alert('Data Tidak Ditemukan');";
			echo "window.location='".site_url('presensi')."';</script>";
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add']))	{
			$this->presensi_m->add($post);
			
			}else if(isset($_POST['edit'])){
				$this->presensi_m->edit($post);

			}
			if($this->db->affected_rows() > 0 ) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
			}
				redirect('presensi');
		
	}

	public function delete($id)
	{
		$this->presensi_m->delete($id);
		if($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
			redirect('presensi');
	}

	public function print(){
     
		$data['s'] = $this->presensi_m->tampil_data()->result();
		$this->load->view('presensi/print_presensi', $data);
	}

	public function laporan()
	{
		$data['row'] = $this->presensi_m->get();
		$this->template->load('template' , 'presensi/laporan', $data);
	}

	public function perid($id){ 
      
		$data['s'] = $this->presensi_m->perid($id); 
		$this->load->view('presensi/perid_presensi', $data); 
		}
}

