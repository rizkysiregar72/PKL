   <!-- SAMBUNG.PHP UNTUK MENSYNCRONKAN NAMA YG LOGIN SESUAI DATABASE -->
<?php
   
Class Sambung {
	protected $ci;

	function __construct() {
		$this->ci =& get_instance();
	}
	
	function user_login() {
		$this->ci->load->model('user_m');
		$user_id = $this->ci->session->userdata('userid');
		$user_data = $this->ci->user_m->get($user_id)->row();
		return $user_data;
	}

	public function count_tenaga_ahli() {
		$this->ci->load->model('tenagaahli_m');
		return $this->ci->tenagaahli_m->get()->num_rows();
	}
	public function count_sk() {
		$this->ci->load->model('sk_m');
		return $this->ci->sk_m->get()->num_rows();
	}
	public function count_presensi() {
		$this->ci->load->model('presensi_m');
		return $this->ci->presensi_m->get()->num_rows();
	}
	public function count_st() {
		$this->ci->load->model('st_m');
		return $this->ci->st_m->get()->num_rows();
	}
	public function count_cuti() {
		$this->ci->load->model('cuti_m');
		return $this->ci->cuti_m->get()->num_rows();
	}
	public function count_kinerja() {
		$this->ci->load->model('kinerja_m');
		return $this->ci->kinerja_m->get()->num_rows();
	}


}
