<?php
	class Barangs extends CI_Controller {
	
		function __construct (){
			parent :: __construct();
			$this->load->model('barang');
			$this->cek_session();

		}
		function index(){
			//$this->load->model('barang');
			$this->cek_session();
			$data['barang']=$this->barang->select_data(20,0);
			$this->load->view('view1');
			$this->load->view('data_jenisbahan',$data);
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
		
		function addjenisbahan(){
			$this->cek_session();
			$this->form_validation->set_rules('kd_jenis', 'Kode Jenis', 'required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
			$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
			$this->form_validation->set_rules('satuan','Satuan','required');
			

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('view1');
			$this->load->view('tambah_jenisbahan');
		}
		else{
			$this->load->model('barang');
			$this->load->helper('form');
			$this->load->view('view1');

			
				if($_POST){
				$data=array(
				'kd_jenisbahan'=>$_POST['kd_jenis'], // sebelah kiri database , sebelah kanan form
				'keterangan'=>$_POST['keterangan'],
				'jumlah'=>$_POST['jumlah'],
				'satuan'=>$_POST['satuan']);
				$this->barang->create_jenisbahan($data);
				}
				else{
				$this->load->view('tambah_jenisbahan');
				
				}
				redirect(base_url().'barangs');
		}

		} // end function
		
		
		function deletejenisbahan($kd_jenis){
			$this->barang->delete_jenisbahan($kd_jenis);
			redirect(base_url().'barangs');
		}
	}
?>