<?php
	class Barangs_Ready extends CI_Controller {
	
		function __construct (){
			parent :: __construct();
			$this->load->model('barang');
			$this->cek_session();

		}
		function index(){
			//$this->load->model('barang');
			$this->cek_session();
			$data['barang']=$this->barang->select_data(20,0);
			$this->load->view('view2');
			$this->load->view('data_barang_ready',$data);
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