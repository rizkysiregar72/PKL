<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_m extends CI_Model {

	public function get($id = null)
	{
			$this->db->select('cuti.*, tenaga_ahli.nama_tenaga_ahli as nama_tenaga_ahli');
			$this->db->from('cuti');
			$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = cuti.tenaga_ahli_id');
				if($id !=null) {
			$this->db->where('cuti_id', $id) ;
			
		}
			$query = $this->db->get();
			return $query;
	}

	public function add($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'tanggal_pengajuan' => $post['tanggal_pengajuan'],
			'jenis_cuti' 		=> $post['jenis_cuti'],
			'tanggal_mulai' 	=> $post['tanggal_mulai'],
			'tanggal_selesai' 	=> $post['tanggal_selesai'],
			'jumlah_hari' 		=> $post['jumlah_hari']
		];
		$this->db->insert('cuti', $params);
	}

	public function edit($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'tanggal_pengajuan' => $post['tanggal_pengajuan'],
			'jenis_cuti' 		=> $post['jenis_cuti'],
			'tanggal_mulai' 	=> $post['tanggal_mulai'],
			'tanggal_selesai' 	=> $post['tanggal_selesai'],
			'jumlah_hari' 		=> $post['jumlah_hari'],
		];
		$this->db->where('cuti_id', $post['id']);
		$this->db->update('cuti', $params);

	}

	public function delete($id)
	{
			$this->db->where('cuti_id', $id);
			$this->db->delete('cuti');
	}
	
	public function tampil_data($id = null)
 	{
		$this->db->from('cuti');
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = cuti.tenaga_ahli_id');
			if($id !=null) {
		$this->db->where('cuti_id', $id) ;
		
	}
		$query = $this->db->get();
		return $query;
 	}

	public function cutiperid($id)  
	{    
		$this->db->from('cuti');  
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = cuti.tenaga_ahli_id');      
		$this->db->where('cuti_id', $id) ;  
		$query=$this->db->get()->result();  
		return $query; 
	}

}
