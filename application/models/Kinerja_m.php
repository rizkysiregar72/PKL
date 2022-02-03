<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja_m extends CI_Model {

	public function get($id = null)
	{
			$this->db->select('kinerja.*, tenaga_ahli.nama_tenaga_ahli as nama_tenaga_ahli');
			$this->db->from('kinerja');
			$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = kinerja.tenaga_ahli_id');
				if($id !=null) {
			$this->db->where('kinerja_id', $id) ;
			
		}
			$query = $this->db->get();
			return $query;
	}

	public function add($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'nama_penilai' 		=> $post['nama_penilai'],
			'inisiatif' 		=> $post['inisiatif'],
			'disiplin' 			=> $post['disiplin'],
			'tanggung_jawab' 	=> $post['tanggung_jawab'],
			'kerja_sama' 		=> $post['kerja_sama'],
			'pemecahan_masalah' => $post['pemecahan_masalah'],
			'pengambilan_keputusan' => $post['pengambilan_keputusan'],
			'nilai_total' 		=> $post['nilai_total'],
			'keterangan' 		=> $post['keterangan']
		];
		$this->db->insert('kinerja', $params);
	}

	public function edit($post){
		$params = [
			'tenaga_ahli_id' 	=> $post['tenaga_ahli_id'],
			'nama_penilai' 		=> $post['nama_penilai'],
			'inisiatif' 		=> $post['inisiatif'],
			'disiplin' 			=> $post['disiplin'],
			'tanggung_jawab' 	=> $post['tanggung_jawab'],
			'kerja_sama' 		=> $post['kerja_sama'],
			'pemecahan_masalah' => $post['pemecahan_masalah'],
			'pengambilan_keputusan' => $post['pengambilan_keputusan'],
			'nilai_total' 		=> $post['nilai_total'],
			'keterangan' 		=> $post['keterangan']
		];
		if($post['berkas'] != null){
			$params['berkas'] = $post['berkas'];
		}
		
		$this->db->where('kinerja_id', $post['id']);
		$this->db->update('kinerja', $params);

	}

	public function delete($id)
	{
			$this->db->where('kinerja_id', $id);
			$this->db->delete('kinerja');
	}
	
	public function tampil_data($id = null)
 	{
		$this->db->from('kinerja');
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = kinerja.tenaga_ahli_id');
			if($id !=null) {
		$this->db->where('kinerja_id', $id) ;
		
	}
		$query = $this->db->get();
		return $query;
 	}

	 public function kinerjaperid($id)  
	{    
		$this->db->from('kinerja');  
		$this->db->join('tenaga_ahli', 'tenaga_ahli.tenaga_ahli_id = kinerja.tenaga_ahli_id');      
		$this->db->where('kinerja_id', $id) ;  
		$query=$this->db->get()->result();  
		return $query; 
	}
}
