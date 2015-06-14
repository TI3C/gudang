<?php
	//jobdesk oleh Laudia
	class M_login Extends CI_Model{
	function login($username, $password){
			$this->db->select('*');
			$this->db->from('tblpegawai');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows()==1){
				return $query->row(0);
			}
			else{
				return false;
			}
		}
	}
		
?>