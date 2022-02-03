<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_m extends CI_Model {

	public function get($id = null)
	{
			$this->db->select('presensi.*, tenaga_ahli.nama_tenaga_ahli as nama_tenaga_ahli');
			$this->db->from('presensi');
			$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = presensi.tenaga_ahli_id');
				if($id !=null) {
			$this->db->where('presensi_id', $id) ;
			
		}
			$query = $this->db->get();
			return $query;
	}

	public function add($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'tanggal' 			=> $post['tanggal'],
			'jam' 				=> $post['jam'],
			'keterangan' 		=> $post['keterangan']
		];
		$this->db->insert('presensi', $params);
	}

	public function edit($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'tanggal' 			=> $post['tanggal'],
			'jam' 				=> $post['jam'],
			'keterangan' 		=> $post['keterangan']
		];
		$this->db->where('presensi_id', $post['id']);
		$this->db->update('presensi', $params);

	}

	public function delete($id)
	{
			$this->db->where('presensi_id', $id);
			$this->db->delete('presensi');
	}
	
	public function tampil_data($id = null)
 	{
		$this->db->from('presensi');
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = presensi.tenaga_ahli_id');
			if($id !=null) {
		$this->db->where('presensi_id', $id) ;
		
	}
		$query = $this->db->get();
		return $query;
 	}

	 public function perid($id)  
	 {  
		$this->db->from('presensi');  
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = presensi.tenaga_ahli_id');      
		$this->db->where('presensi.tenaga_ahli_id', $id) ;  
		$query=$this->db->get()->result();  
		return $query; 
	 }

}
