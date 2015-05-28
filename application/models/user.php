<?php

	class User extends CI_Model {
	
		function create_user($data)
		{
			$this->db->insert('tblpegawai',$data);
			return $this->db->insert_id();
		}
		
		function update_user($kd_pegawai,$data)
		{
			
			$this->db->where('kd_pegawai',$kd_pegawai);
			$this->db->update('tblpegawai',$data);
		}

		function delete_user($kd_pegawai)
		{
			$this->db->where('kd_pegawai',$kd_pegawai);
			$this->db->delete('tblpegawai');
		}
		
		function select_data($num=20,$start=0) 
		{
			$this->db->select('*')->from('tblpegawai')->order_by('kd_pegawai')->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}
		function get_user($kd_pegawai){
			$this->db->select()->from('tblpegawai')->where('kd_pegawai',$kd_pegawai);
			$query=$this->db->get();
			return $query->first_row('array');
		}
		function cari_user($pencarian)
		{
			$this->db->select('*');
			$this->db->from('tblpegawai');
			$this->db->like('Nama',$pencarian);
			$query=$this->db->get();
			return $query->result_array();	
		}

		
	}
	?>