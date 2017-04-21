<?php 
class Model_news extends CI_Model {

public function tambah($data, $table){
		$this->db->insert($table, $data);
	}	

	function berita(){
		$query = $this->db->query("SELECT * FROM `news`");
		return $query->result();
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
}
?>