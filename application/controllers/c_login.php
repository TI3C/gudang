<?php
	//jobdesk oleh Laudia
	class C_login extends CI_Controller{
	
		public function index(){ 
			//$this->cek_session();
			$this->form_validation->set_rules('username', 'Username Anda', 'required');
			$this->form_validation->set_rules('password', 'Password Anda', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('login');
			} // end if

			else{
				if($_POST){
		
				$this->load->model('m_login'); // mengambil function di m_login
				$username=$this->input->post('username',true); // menyimpan inputan username dari textfield 
				$password=$this->input->post('password',true); // menyimpan inputan password dari textfield
						
				$user=$this->m_login->login($username,$password); // digunakan untuk mengambil data dari database 
				$level=$user->level; //  
				
				if(!$user){ // jika tidak ada data 
					$data['error'] =1; // maka akan error
				} 
				else { // jika ada
					$this->session->set_userdata('id',$user->Kd_Pegawai); // mencocokkan data berdasarkan id
					$this->session->set_userdata('username',$user->username);
					$this->session->set_userdata('level',$user->level); // mencocokkan data berdasarkan level
					
					if ($level!="USER"){ // jika level = admin
						redirect(base_url().'halaman_admin'); // maka akan ke halaman admin
					}else if ($level!="ADMIN"){	 // jika level bukan admin
						redirect(base_url().'halaman_user'); // maka akan ke halaman user
					}
				} 
			}
			$this->load->view('login'); 
			} // end else

		} // end function
		
		function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url());
		}

		function cek_session(){
			if (!$this->session->userdata('id')) redirect('c_login');
		}

		function ceklevel(){
			$logged = $this->session->userdata('level');
			if ($logged == 'ADMIN'){
				redirect(base_url().'halaman_admin');
			}
			elseif($logged == 'USER'){
				redirect(base_url().'halaman_user');
			}
		}
	}
?>