<?php
	class Brgmsks extends CI_Controller {
	
		function __construct (){
			parent :: __construct();
			$this->load->model('brgmsk');
			$this->cek_session();
		}
		function index(){
			$this->cek_session();
			$data['brgmsk']=$this->brgmsk->select_data(20,0);
			$this->load->view('view1');
			$this->load->view('data_bahanmasuk',$data);
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
		
		function addbahanmasuk(){
			$this->cek_session();
			$this->form_validation->set_rules('kd_bahan', 'Kode Bahan', 'required');
			$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
			$this->form_validation->set_rules('nominal', 'Nominal', 'required');
			$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
			$this->form_validation->set_rules('kd_jenis', 'Kode Jenis', 'required');
			$this->form_validation->set_rules('kd_pemasok', 'Kode Pemasok', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('view1');
			$this->load->model('barang');
			$data['barang']=$this->barang->select_data();
			$this->load->view('tambah_bahanmasuk',$data);
		}
		else{
			$this->load->model('brgmsk');
			$this->load->helper('form');

			
				if($_POST){
				$data=array(
				'Kd_Bahan'=>$_POST['kd_bahan'],
				'Tgl_beli'=>$_POST['tgl_masuk'],
				'Nominal'=>$_POST['nominal'],
				'Jumlah'=>$_POST['jumlah'],
				'Kd_JenisBahan'=>$_POST['kd_jenis'],
				'Kd_Pemasok'=>$_POST['kd_pemasok']);
					if ($this->brgmsk->cek_kdbahan($_POST['kd_jenis'])==1){
					$jumlah_awal= $this->brgmsk->jumlah_awal($_POST['kd_jenis']);
					$jumlah_akhir= $jumlah_awal+$_POST['jumlah'];
					echo $jumlah_awal;
						$this->brgmsk->create_bahanmasuk($data);
						$this->brgmsk->ubah_jumlahbahan($_POST['kd_jenis'],$jumlah_akhir);
					}
				
				}
				else{
				$this->load->view('tambah_bahanmasuk');
				}
				redirect(base_url().'brgmsks');
		}

		} // end function
		
		function editbahanmasuk($kd_bahan){
			$this->cek_session();
			$id = $this->session->userdata('id');
			$this->load->model('brgmsk');
			$this->load->model('barang');
			$data['barang']=$this->barang->select_data();
			$data['success']=0;
			if($_POST){
				$data=array(
					'Tgl_beli'=>$_POST['tgl_masuk'],
					'Nominal'=>$_POST['nominal'],
					'Jumlah'=>$_POST['jumlah'],
					'Kd_JenisBahan'=>$_POST['kd_jenis'],
					'Kd_Pemasok'=>$_POST['kd_pemasok']
				);
				
				$this->brgmsk->update_bahanmasuk($kd_bahan,$data);	
				$data['success']=1;
				redirect(base_url().'brgmsks');
			}
			
			$data['brgmsk']=$this->brgmsk->get_bahanmasuk($kd_bahan);
			$this->load->helper('form');
			$this->load->view('view1');
			$this->load->view('edit_bahanmasuk',$data);
			
		}
		
		
		function deletebahanmasuk($kd_bahan){
				$kd_jenis=$this->uri->segment(4);
				$jumlah_awal= $this->brgmsk->jumlah_awal($kd_jenis);
				$jumlah_akhir= $jumlah_awal-$this->uri->segment(5);
					$this->brgmsk->ubah_jumlahbahan($kd_jenis,$jumlah_akhir);
		
			$this->brgmsk->delete_bahanmasuk($this->uri->segment(3));
			redirect(base_url().'brgmsks');
		}
	}
?>