<?php
class Login extends CI_Controller{
	function index(){
		$this->load->view('login');
	}

	function check_login(){
              $this->load->library('form_validation'); 
              $this->form_validation->set_rules('email', 'Email', 'required');
              $this->form_validation->set_rules('password', 'Password', 'required'); 
             
              if ( $this->form_validation->run() == TRUE ) { 
                 $email = explode('@',$this->input->post('email'));
				 if($email[1] == 'rol.republika.co.id'){
					 $this->load->model('model_login'); 
					 $result = $this->model_login->check_user( 
						 $this->input->post('email'),  
						 $this->input->post('password') 
						);
					redirect(base_url('home')); 	
					} else {
						redirect(base_url('login?err=1'));
					}
				} else {
					redirect(base_url('login?err=2'));
				}		
	}

	function addreg(){
		 $this->load->library('form_validation'); 
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required'); 
             
              if ( $this->form_validation->run() == TRUE ) {
		$email = explode('@',$this->input->post('email'));
		if($email[1] == 'rol.republika.co.id'){
		$emaill = $this->input->post('email');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$data =	array(
					'email'=>$emaill,
					'password'=>md5($password),
					'nama'=>$nama
				);
				$this->model_login->tambah_user($data,'user');
				$this->load->view('login');
			}
		else {
			$data['err']=2;
			$this ->load-> view('signup',$data);
		}
		} else {
			$this ->load-> view('signup');
				}	
	}

	function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		redirect(base_url('login'));
	}

}