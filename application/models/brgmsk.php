<?php

	class Brgmsk extends CI_Model {
	
		function create_bahanmasuk($data)
		{
			$this->db->insert('tblbelibahan',$data); // mengambil dari database
			return $this->db->insert_id();
		}
		
		function update_bahanmasuk($kd_bahan,$data)
		{
			$this->db->where('Kd_Bahan',$kd_bahan);
			$this->db->update('tblbelibahan',$data);
		}

		function delete_bahanmasuk($kd_bahan)
		{
			$this->db->where('Kd_Bahan',$kd_bahan);
			$this->db->delete('tblbelibahan');
		}
		
		function select_data($num=20,$start=0) 
		{
			$this->db->select('*')->from('tblbelibahan')->order_by('Kd_Bahan')->limit($num,$start);
			$query=$this->db->get();
			return $query->result_array();
		}
		function cari_bahanmasuk($pencarian) 
		{
		   $this->db->select('*');
		   $this->db->from('tblbelibahan');
		   $this->db->like('Tgl_beli', $pencarian);
		   $query = $this->db->get();
		   return $query->result_array();
   		}

		function get_bahanmasuk($kd_bahan){
			$this->db->select()->from('tblbelibahan')->where(array('Kd_Bahan'=>$kd_bahan));
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
		function jumlah_akhir_bahanmasuk($kd_bahanmasuk){ // digunakan untuk menghapus stok barang ketika dihapus
		$this->db->where('',$Kd_JenisBahan);
		$ubah['Jumlah']=$jumlah;
			$this->db->update('tbljenisbahan',$ubah);
		}
	
	}
	?>