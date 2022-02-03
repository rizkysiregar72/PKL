<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SK_m extends CI_Model {

	public function get($id = null)
	{
			$this->db->select('sk.*, tenaga_ahli.nama_tenaga_ahli as nama_tenaga_ahli');
			$this->db->from('sk');
			$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = sk.tenaga_ahli_id');
				if($id !=null) {
			$this->db->where('sk_id', $id) ;
			
		}
			$query = $this->db->get();
			return $query;
	}

	public function add($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'nomor_surat' 		=> $post['nomor_surat'],
			'tmt_pengangkatan' 	=> $post['tmt_pengangkatan']
		];
		$this->db->insert('sk', $params);
	}

	public function edit($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'nomor_surat' 		=> $post['nomor_surat'],
			'tmt_pengangkatan' 	=> $post['tmt_pengangkatan']
		];
		if($post['berkas'] != null){
			$params['berkas'] = $post['berkas'];
		}
		
		$this->db->where('sk_id', $post['id']);
		$this->db->update('sk', $params);

	}

	public function delete($id)
	{
			$this->db->where('sk_id', $id);
			$this->db->delete('sk');
	}
	
	public function tampil_data($id = null)
 	{
		$this->db->from('sk');
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = sk.tenaga_ahli_id');
			if($id !=null) {
		$this->db->where('sk_id', $id) ;
		
	}
		$query = $this->db->get();
		return $query;
 	}

	 public function skperid($id)  
	 {  
	  $this->db->select('*');  
		$this->db->from('sk');  
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = sk.tenaga_ahli_id');      
		$this->db->where('sk_id', $id) ;  
		$query=$this->db->get()->result();  
		return $query; 
	 }
}
