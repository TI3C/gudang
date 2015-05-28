<?php
	
	class Halaman_User extends CI_Controller {
	
		function index(){
			$this->cek_session();
			$id = $this->session->userdata('id');
			$this->load->model('user');
			$data['success']=0;
			if(isset($_POST['submit'])){
				$data=array(
					'nama'=>$_POST['nama'],
					'username'=>$_POST['username'],
					'password'=>$_POST['password']
				);
				$this->user->update_user($id,$data);	
				$data['success']=1;
			}
			$data['user']=$this->user->get_user($id);
			$this->load->helper('form');
						$this->load->view('view2');
			$this->load->view('user',$data);

		}
		
		function cek_session(){
			if (!$this->session->userdata('id')) redirect('c_login');
		}
	}
?>