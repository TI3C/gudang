<?php
	class Brgklrs extends CI_Controller {
	
		function __construct (){
			parent :: __construct();
			$this->load->model('brgklr');
			$this->cek_session();
		}
		function index(){
			$this->cek_session();
			$data['brgklr']=$this->brgklr->select_data(20,0);
			$this->load->view('view1');
			$this->load->view('data_bahankeluar',$data);
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
		
		function addbahankeluar(){
			$this->cek_session();
			$this->form_validation->set_rules('kd_bahankeluar', 'Kode Bahan Keluar', 'required'); // cocokkan dengan nama di form tambah
			$this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar', 'required');
			$this->form_validation->set_rules('kd_pegawai', 'Kode Pegawai', 'required');
			$this->form_validation->set_rules('kd_jenis', 'Kode Jenis', 'required');
			$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('view1');
			$this->load->model('barang');
			$data['barang']=$this->barang->select_data();
			$this->load->view('tambah_bahankeluar',$data);
		}
		else{
			$this->load->model('brgklr');
			$this->load->helper('form');
	
				if($_POST){
				$data=array(
				'Kd_BahanKeluar'=>$_POST['kd_bahankeluar'],
				'Tgl_Keluar'=>$_POST['tgl_keluar'],
				'Kd_Pegawai'=>$_POST['kd_pegawai'],
				'Kd_JenisBahan'=>$_POST['kd_jenis'],
				'Jumlah'=>$_POST['jumlah']);
					if ($this->brgklr->cek_kdbahan($_POST['kd_jenis'])==1){
					$jumlah_awal= $this->brgklr->jumlah_awal($_POST['kd_jenis']);
					$jumlah_akhir= $jumlah_awal-$_POST['jumlah'];
					echo $jumlah_awal;
						$this->brgklr->create_bahankeluar($data);
						$this->brgklr->ubah_jumlahbahan($_POST['kd_jenis'],$jumlah_akhir);
					}
				
				}
				else{
				$this->load->view('tambah_bahankeluar');
				}
				redirect(base_url().'brgklrs');
		}

		} // end function
		
		function editbahankeluar($kd_bahankeluar){
			$this->cek_session();
			$id = $this->session->userdata('id');
			$this->load->model('brgklr');
			$this->load->model('barang');
			$data['barang']=$this->barang->select_data();
			$data['success']=0;
			if($_POST){
				$data=array(
					'Tgl_Keluar'=>$_POST['tgl_keluar'],
					'Kd_Pegawai'=>$_POST['kd_pegawai'],
					'Kd_JenisBahan'=>$_POST['kd_jenis'],
					'Jumlah'=>$_POST['jumlah']	
				);
				
				$this->brgklr->update_bahankeluar($kd_bahankeluar,$data);	
				$data['success']=1;
				redirect(base_url().'brgklrs');
			}
			
			$data['brgklr']=$this->brgklr->get_bahankeluar($kd_bahankeluar);
			$this->load->helper('form');
			$this->load->view('view1');
			$this->load->view('edit_bahankeluar',$data);
			
		}
		
		
		function deletebahankeluar($kd_bahankeluar){
			$this->brgklr->delete_bahankeluar($kd_bahankeluar);
			redirect(base_url().'brgklrs');
		}
	}
?>