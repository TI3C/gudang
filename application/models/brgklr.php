<?php

	class Brgklr extends CI_Model {
	
		function create_bahankeluar($data)
		{
			$this->db->insert('tblbahankeluar',$data); // mengambil dari database
			return $this->db->insert_id();
		}
		
		function update_bahankeluar($kd_bahankeluar,$data)
		{
			$this->db->where('Kd_BahanKeluar',$kd_bahankeluar); // kiri -> database , kanan -> form
			$this->db->update('tblbahankeluar',$data);
		}

		function delete_bahankeluar($kd_bahankeluar)
		{
			$this->db->where('Kd_BahanKeluar',$kd_bahankeluar);
			$this->db->delete('tblbahankeluar');
		}
		
		function select_data($num=20,$start=0) 
		{
			$this->db->select('*')->from('tblbahankeluar')->order_by('Kd_BahanKeluar')->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}
		function cari_bahankeluar($pencarian) 
		{
		   $this->db->select('*');
		   $this->db->from('tblbahankeluar');
		   $this->db->like('Tgl_Keluar', $pencarian);
		   $query = $this->db->get();
		   return $query->result_array();
   		}

		function get_bahankeluar($kd_bahankeluar){
			$this->db->select()->from('tblbahankeluar')->where(array('Kd_BahanKeluar'=>$kd_bahankeluar));
			$query=$this->db->get();
			return $query->first_row('array');
		}
		function cek_kdbahan($kd_jenis){
			$this->db->select()->from('tbljenisbahan')->where(array('Kd_JenisBahan'=>$kd_jenis));
			$query=$this->db->get();
		   return count($query->result_array());
		}
		function jumlah_awal($kd_jenis){
			$this->db->select('Jumlah')->from('tbljenisbahan')->where(array('Kd_JenisBahan'=>$kd_jenis));
			$query=$this->db->get();
			$row=$query->row(0);
		    return $row->Jumlah;
		}
		function ubah_jumlahbahan($kd_jenis,$jumlah){ // untuk mengubah stok barang setelah di tambah barang
		$this->db->where('Kd_JenisBahan',$kd_jenis);
		$ubah['Jumlah']=$jumlah;
			$this->db->update('tbljenisbahan',$ubah);
		}
	
	}
	?>