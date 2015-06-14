<?php
	//jobdesk oleh Laudia
	class Users extends CI_Controller {
	
		function __construct (){
			parent :: __construct();
			$this->load->model('user');
			$this->cek_session();
		}
		
		function index(){
			//$this->load->model('user');
			$this->cek_session();
			$data['user']=$this->user->select_data(20,0);
			$this->load->view('view1');
			$this->load->view('data_user',$data);
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

		function adduser(){
			//$this->cek_session();
			$this->form_validation->set_rules('kd_pegawai', 'Kode Pegawai', 'required');
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('jenis_kelamin','	Jenis Kelamin','required');
			$this->form_validation->set_rules('telpon','Telpon','required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('status','Status','required');
			$this->form_validation->set_rules('bagian', 'Bagian', 'required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('level','Level','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('view1');
			$this->load->view('tambah_user');

		}
		else{
			$this->load->model('user');
			$this->load->view('view1');
			$this->load->helper('form');
			if($_POST){
				$data=array(
					'Kd_Pegawai'=>$_POST['kd_pegawai'],
					'Nama'=>$_POST['nama'],
					'Jenis_Kelamin'=>$_POST['jenis_kelamin'],
					'Telpon'=>$_POST['telpon'],
					'Alamat'=>$_POST['alamat'],
					'Status'=>$_POST['status'],
					'Bagian'=>$_POST['bagian'],
					'username'=>$_POST['username'],
					'password'=>$_POST['password'],
					'level'=>$_POST['level'])
				;
				$this->user->create_user($data);
				redirect(base_url().'users');
			}
			/*else {
				$this->load->view('tambah_user');
				$this->load->view('header_a');
				$this->load->view('footer');
				}*/
			}
		}
		
		function edituser(){
			$this->cek_session();
			//$kd_pegawai = $this->session->userdata('kd_pegawai');
			$kd_pegawai = $this->uri->segment(3);
			$this->load->model('user');
			$data['success']=0;
			if($_POST){
				$data=array(
					'Nama'=>$_POST['nama'],
					'Jenis_Kelamin'=>$_POST['jenis_kelamin'],
					'Telpon'=>$_POST['telpon'],
					'Alamat'=>$_POST['alamat'],
					'Status'=>$_POST['status'],
					'Bagian'=>$_POST['bagian'],
					'username'=>$_POST['username'],
					'password'=>$_POST['password']
				);
				$this->user->update_user($kd_pegawai,$data);	
				$data['success']=1;
				redirect(base_url().'users');
			}
			$data['user']=$this->user->get_user($kd_pegawai);
			$this->load->helper('form');
			$this->load->view('view1');
			$this->load->view('edit_user',$data);

		}
		
		function deleteuser($kd_pegawai){
			$this->user->delete_user($kd_pegawai);
			redirect(base_url().'users');
		}
		
		function logout (){
			$this->session->sess_destroy();
			redirect(base_url().'c_login');
		}
	}
?>