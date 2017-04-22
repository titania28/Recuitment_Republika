<?php 
class Model_login extends CI_Model{
	
	public function check_user($emailsent,$passent){
		$email = $emailsent;
		$pass = $passent;
		$query = $this->db->get_where('user',array('email' => $email, 'password' =>$pass));
		$user = $query->row();
		
		if($query->num_rows() > 0){
		
			//buat session
			$data = array(
						'logged_in'	=> TRUE,
						'email'		=> $user->email,
						'id_user' 	=> $user->id_user
					);
			$this->session->set_userdata($data);
			return 1;
		} else {
			return 0;
		}
	}

	public function tambah_user($data, $table){
		$this->db->insert($table, $data);
	}	
}