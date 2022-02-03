<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TenagaAhli extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('tenagaahli_m');
	}

	public function index()
	{
		$data['row'] = $this->tenagaahli_m->get();
		$this->template->load('template' , 'tenagaahli/data_tenagaahli', $data);
	}

	public function add(){
		$tenaga_ahli = new stdClass();
		$tenaga_ahli->tenaga_ahli_id = null;
		$tenaga_ahli->nama_tenaga_ahli = null;
		$tenaga_ahli->divisi = null;
		$tenaga_ahli->tempat_lahir = null;
		$tenaga_ahli->tanggal_lahir = null;
		$tenaga_ahli->agama = null;
		$tenaga_ahli->jenis_kelamin = null;
		$tenaga_ahli->pendidikan_terakhir = null;
		$tenaga_ahli->alamat = null;
		$tenaga_ahli->no_telepon = null;
		$data = array(
			'page' =>'add',
			'row' => $tenaga_ahli
	);
		$this->template->load('template' , 'tenagaahli/tenagaahli_form', $data );
	}

	public function edit($id)
	{
		$query = $this->tenagaahli_m->get($id);
		if($query->num_rows() > 0) {
			$tenagaahli =  $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $tenagaahli
			);
			$this->template->load('template' , 'tenagaahli/tenagaahli_form', $data );
		}else {
			echo "<script>alert('Data Tidak Ditemukan');";
			echo "window.location='".site_url('tenagaahli')."';</script>";
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add']))	{
			$this->tenagaahli_m->add($post);
			
			}else if(isset($_POST['edit'])){
				$this->tenagaahli_m->edit($post);

			}
			if($this->db->affected_rows() > 0 ) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
			}
				redirect('tenagaahli');
		
	}

	public function delete($id)
	{
		$this->tenagaahli_m->delete($id);
		if($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
			redirect('tenagaahli');
	}

	public function print(){
     
		$data['tenaga_ahli'] = $this->tenagaahli_m->tampil_data('tenaga_ahli')->result();
		$this->load->view('tenagaahli/print_tenagaahli', $data);
	   }

	   public function laporan()
	   {
		   $data['row'] = $this->tenagaahli_m->get();
		   $this->template->load('template' , 'tenagaahli/laporan', $data);
	   }
}

