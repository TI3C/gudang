<?php
	
	class Halaman_Admin extends CI_Controller {
	
		function index(){
		
			$this->load->view('admin');
			$this->load->view('view1');
			$this->cek_session();	
		}
		
		function cek_session(){
			if (!$this->session->userdata('id')) redirect('c_login');
		}
	}
?>