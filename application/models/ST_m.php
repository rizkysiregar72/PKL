<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ST_m extends CI_Model {

	public function get($id = null)
	{
			$this->db->select('st.*, tenaga_ahli.nama_tenaga_ahli as nama_tenaga_ahli');
			$this->db->from('st');
			$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = st.tenaga_ahli_id');
				if($id !=null) {
			$this->db->where('st_id', $id) ;
			
		}
			$query = $this->db->get();
			return $query;
	}

	public function add($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'nomor_surat' 		=> $post['nomor_surat'],
			'tanggal' 			=> $post['tanggal'],
			'jenis_tugas' 		=> $post['jenis_tugas']
		];
		$this->db->insert('st', $params);
	}

	public function edit($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'nomor_surat' 		=> $post['nomor_surat'],
			'tanggal' 			=> $post['tanggal'],
			'jenis_tugas' 		=> $post['jenis_tugas']
		];
		if($post['berkas'] != null){
			$params['berkas'] = $post['berkas'];
		}
		
		$this->db->where('st_id', $post['id']);
		$this->db->update('st', $params);

	}

	public function delete($id)
	{
			$this->db->where('st_id', $id);
			$this->db->delete('st');
	}
	
	public function tampil_data($id = null)
 	{
		$this->db->from('st');
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = st.tenaga_ahli_id');
			if($id !=null) {
		$this->db->where('st_id', $id) ;
 	}

		$query = $this->db->get();
		return $query;
	}

	public function stperid($id)  
	 {    
		$this->db->from('st');  
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = st.tenaga_ahli_id');      
		$this->db->where('st_id', $id) ;  
		$query=$this->db->get()->result();  
		return $query; 
	 }
}
