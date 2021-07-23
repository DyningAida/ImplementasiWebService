<?php

class Model_Produk extends CI_Model
{

	public function getDataproduk($kode_produk = null)
	{
		if($kode_produk === null){
			$semua_data_produk = $this->db->get('tabel_produk')->result();
			return $semua_data_produk;
		}else{
			$data_produk_bykode_produk = $this->db->get_where('tabel_produk', ['kode_produk'=>$kode_produk])->result();
			return $data_produk_bykode_produk;
		}
	}

	public function tambahproduk($data)
	{
		$this->db->insert('tabel_produk', $data);
		return $this->db->affected_rows();
	}

	public function hapusproduk($kode_produk)
	{
		$this->db->delete('tabel_produk', ['kode_produk' => $kode_produk]);
		return $this->db->affected_rows();
	}

	public function ubahproduk($data, $kode_produk)
	{
		$this->db->update('tabel_produk', $data, ['kode_produk' => $kode_produk]);
		return $this->db->affected_rows();
	}
}
?>