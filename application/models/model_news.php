<?php 
class Model_news extends CI_Model {

public function tambah($data, $table){
		$this->db->insert($table, $data);
	}	

	function berita(){
		return $this->db->select("news.title,news.content,news.kategori,news.image,user.nama,news.id")
		->join('user','user.id_user = news.id_user')
		->get('news')		
		->result();
	}

	function batal($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('news');
		}

	public function find($id){
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('news');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	public function update($id, $data_products){
		$this->db->where('id', $id)
				 ->update('news', $data_products);
	}
	public function cari()
	{
	$c = $this->input->POST ('cari');
	$this->db->like('title', $c);
	return $this->db->join('user','user.id_user = news.id_user')
	->get ('news')
	->result(); 
	}
}
?>