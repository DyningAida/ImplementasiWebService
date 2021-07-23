<?php

class Model_cabang extends CI_Model
{

	public function getDatacabang($kode_child = null)
	{
		if($kode_child === null){
			$semua_data_cabang = $this->db->get('tabel_anak_perusahaan')->result();
			return $semua_data_cabang;
		}else{
			$data_cabang_bykode_child= $this->db->get_where('tabel_anak_perusahaan', ['kode_child'=>$kode_cabang])->result();
			return $data_cabang_bykode_cabang;
		}
	}

	public function tambahcabang($data)
	{
		$this->db->insert('tabel_anak_perusahaan', $data);
		return $this->db->affected_rows();
	}

	public function hapuscabang($kode_cabang)
	{
		$this->db->delete('tabel_anak_perusahaan', ['kode_child' => $kode_cabang]);
		return $this->db->affected_rows();
	}

	public function ubahcabang($data, $kode_cabang)
	{
		$this->db->update('tabel_anak_perusahaan', $data, ['kode_cabang' => $kode_cabang]);
		return $this->db->affected_rows();
	}
}
?>