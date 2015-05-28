<?php

	class Barang extends CI_Model {
	
		function create_jenisbahan($data)
		{
			$this->db->insert('tbljenisbahan',$data);
			return $this->db->insert_id();
		}
		
		function update_jenisbahan($kd_jenis,$data)
		{
			$this->db->where('kd_jenisbahan',$kd_jenis);
			$this->db->update('tbljenisbahan',$data);
		}

		function delete_jenisbahan($kd_jenis)
		{
			$this->db->where('kd_jenisbahan',$kd_jenis);
			$this->db->delete('tbljenisbahan');
		}
		
		function select_data($num=20,$start=0) 
		{
			$this->db->select('*')->from('tbljenisbahan')->order_by('kd_jenisbahan')->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}
		function cari_jenisbahan($pencarian) 
		{
		   $this->db->select('*');
		   $this->db->from('tbljenisbahan');
		   $this->db->like('keterangan', $pencarian);
		   $query = $this->db->get();
		   return $query->result_array();
   		}
		
		function select_barang_in() 
		{	
			$ada="ada";
			//$this->db->select('*')->from('barang');
			$this->db->select('*')->from('tbljenisbahan')->where('jumlah',$ada)->order_by('kd_jenisbahan');
			$query=$this->db->get();
			return $query->result_array();
		}
		/*
		function select_barang_out() 
		{	
			$username=$this->session->userdata('username');
			$this->db->select('*')->from('peminjaman')->where('username',$username)->order_by('kodepinjam');
			$query=$this->db->get();
			return $query->result_array();
		}*/
		
		function get_jenisbahan($kd_jenis){
			$this->db->select()->from('tbljenisbahan')->where(array('kd_jenisbahan'=>$kd_jenisbahan));
			$query=$this->db->get();
			return $query->first_row('array');
		}
	
	}
	?>