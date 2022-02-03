<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TenagaAhli_m extends CI_Model {

	

	public function get($id = null)
	{
			$this->db->from('tenaga_ahli');
				if($id !=null) {
					
			$this->db->where('tenaga_ahli_id', $id) ;
			
		}
			$query = $this->db->get();
			return $query;
	}

	public function add($post){
		$params = [
			'nama_tenaga_ahli' 		=> $post['nama_tenaga_ahli'],
			'divisi' 				=> $post['divisi'],
			'tempat_lahir' 			=> $post['tempat_lahir'],
			'tanggal_lahir' 		=> $post['tanggal_lahir'],
			'agama' 				=> $post['agama'],
			'jenis_kelamin' 		=> $post['jenis_kelamin'],
			'pendidikan_terakhir'	=> $post['pendidikan_terakhir'],
			'alamat' 				=> $post['alamat'],
			'no_telepon' 			=> $post['no_telepon']
		];
		$this->db->insert('tenaga_ahli', $params);
	}

	public function edit($post){
		$params = [
			'nama_tenaga_ahli' 		=> $post['nama_tenaga_ahli'],
			'divisi' 				=> $post['divisi'],
			'tempat_lahir' 			=> $post['tempat_lahir'],
			'tanggal_lahir' 		=> $post['tanggal_lahir'],
			'agama' 				=> $post['agama'],
			'jenis_kelamin' 		=> $post['jenis_kelamin'],
			'pendidikan_terakhir'	=> $post['pendidikan_terakhir'],
			'alamat' 				=> $post['alamat'],
			'no_telepon' 			=> $post['no_telepon']
		];
		$this->db->where('tenaga_ahli_id', $post['id']);
		$this->db->update('tenaga_ahli', $params);

	}

	public function delete($id)
	{
			$this->db->where('tenaga_ahli_id', $id);
			$this->db->delete('tenaga_ahli');
	}
	
	public function tampil_data()
 	{
  		return $this->db->get('tenaga_ahli');
 	}

}
