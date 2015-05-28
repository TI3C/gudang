<?php 
	if(! defined('BASEPATH')) exit('No Direct script access allowed');

	class Verifikasi extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_login','','TRUE');
		}

		function index(){
			//proses validasi
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

				if($this->form_validation->run() == FALSE){
					//jika gagal akan diarahkan kembali ke halaman login
					$this->load->view('login');
				}
				else{
					//jika berhasil diarahkan ke private
					$this->check_database();
				}
		}

		function check_database(){
			//validasi field terhadap database
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//query ke database
			$result = $this->m_login->login($username, $password);

			if($result){
					$sess_array = array(
						'id' 		=> $result->id,
						'nama'		=> $result->nama,
						'bagian'	=> $result->bagian,
						'jk'		=> $result->jk,
						'alamat'   	=> $result->alamat,
						'telp' 		=> $result->telp,
						'username'	=> $result->username,
						'password'	=> $result->password,
						'level' 	=> $result->level
					);
					$this->session->set_userdata($sess_array);
					
				redirect('users/ceklevel');
			}else{
				$this->form_validation->set_message('check_database', 'Invalid username atau Password');
				return false;
			}
		}
	}
?>