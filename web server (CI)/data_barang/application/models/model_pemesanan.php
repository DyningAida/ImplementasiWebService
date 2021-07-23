<?php

class Model_Pemesanan extends CI_Model
{

	public function getDatapemesanan($kode_pemesanan = null)
	{
		if($kode_pemesanan === null){
			$semua_data_pemesanan = $this->db->get('tabel_pemesanan')->result();
			return $semua_data_pemesanan;
		}else{
			$data_pemesanan_bykode_pemesanan = $this->db->get_where('tabel_pemesanan', ['kode_pemesanan'=>$kode_pemesanan])->result();
			return $data_pemesanan_bykode_pemesanan;
		}
	}

	public function tambahpemesanan($data)
	{
		$this->db->insert('tabel_pemesanan', $data);
		return $this->db->affected_rows();
	}

	public function hapuspemesanan($kode_pemesanan)
	{
		$this->db->delete('tabel_pemesanan', ['kode_pemesanan' => $kode_pemesanan]);
		return $this->db->affected_rows();
	}

	public function ubahpemesanan($data, $kode_pemesanan)
	{
		$this->db->update('tabel_pemesanan', $data, ['kode_pemesanan' => $kode_pemesanan]);
		return $this->db->affected_rows();
	}
}
?>