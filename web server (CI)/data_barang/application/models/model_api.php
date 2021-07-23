<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class Model_Api extends CI_Model{


       function daftar($data)
       {
            $this->db->insert('user',$data);
       }

       public function getDataapikey($id = null)
	{
		if($id === null){
			$semua_data_apikey = $this->db->get('api_keys')->result();
			return $semua_data_apikey;
		}else{
			$data_apikey_byid = $this->db->get_where('api_keys', ['id'=>$id])->result();
			return $data_apikey_byid;
		}
	}

	public function tambahapikey($data)
	{
		$this->db->insert('api_keys', $data);
		return $this->db->affected_rows();
	}

	public function hapusapikey($id)
	{
		$this->db->delete('api_keys', ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function ubahapikey($data, $id)
	{
		$this->db->update('api_keys', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function getDatadosen($NIP = null)
	{
		if($NIP === null){
			$semua_data_dosen = $this->db->get('dosen')->result();
			return $semua_data_dosen;
		}else{
			$data_dosen_byNIP = $this->db->get_where('dosen', ['NIP'=>$NIP])->result();
			return $data_dosen_byNIP;
		}
	}

	public function tambahdosen($data)
	{
		$this->db->insert('dosen', $data);
		return $this->db->affected_rows();
	}

	public function hapusdosen($NIP)
	{
		$this->db->delete('dosen', ['NIP' => $NIP]);
		return $this->db->affected_rows();
	}

	public function ubahdosen($data, $NIP)
	{
		$this->db->update('dosen', $data, ['NIP' => $NIP]);
		return $this->db->affected_rows();
	}

	public function getDataMahasiswa($NIM = null)
	{
		if($NIM === null){
			$semua_data_mahasiswa = $this->db->get('mahasiswa')->result();
			return $semua_data_mahasiswa;
		}else{
			$data_mahasiswa_byNIM = $this->db->get_where('mahasiswa', ['NIM'=>$NIM])->result();
			return $data_mahasiswa_byNIM;
		}
	}

	public function tambahMahasiswa($data)
	{
		$this->db->insert('mahasiswa', $data);
		return $this->db->affected_rows();
	}

	public function hapusMahasiswa($NIM)
	{
		$this->db->delete('mahasiswa', ['NIM'=>$NIM]);
		return $this->db->affected_rows();
	}

	public function ubahMahasiswa($data, $NIM)
	{
		$this->db->update('mahasiswa', $data, ['NIM'=>$NIM]);
		return $this->db->affected_rows();
	}

	public function getDatamatakuliah($kode_matakuliah = null)
	{
		if($kode_matakuliah === null){
			$semua_data_matakuliah = $this->db->get('matakuliah')->result();
			return $semua_data_matakuliah;
		}else{
			$data_matakuliah_bykode_matakuliah = $this->db->get_where('matakuliah', ['kode_matakuliah'=>$kode_matakuliah])->result();
			return $data_matakuliah_bykode_matakuliah;
		}
	}

	public function tambahmatakuliah($data)
	{
		$this->db->insert('matakuliah', $data);
		return $this->db->affected_rows();
	}

	public function hapusmatakuliah($kode_matakuliah)
	{
		$this->db->delete('matakuliah', ['kode_matakuliah' => $kode_matakuliah]);
		return $this->db->affected_rows();
	}

	public function ubahmatakuliah($data, $kode_matakuliah)
	{
		$this->db->update('matakuliah', $data, ['kode_matakuliah' => $kode_matakuliah]);
		return $this->db->affected_rows();
	}

	public function getDatanilai($id_nilai = null)
	{
		if($id_nilai === null){
			$semua_data_nilai = $this->db->get('nilai')->result();
			return $semua_data_nilai;
		}else{
			$data_nilai_byid_nilai = $this->db->get_where('nilai', ['id_nilai'=>$id_nilai])->result();
			return $data_nilai_byid_nilai;
		}
	}

	public function tambahnilai($data)
	{
		$this->db->insert('nilai', $data);
		return $this->db->affected_rows();
	}

	public function hapusnilai($id_nilai)
	{
		$this->db->delete('nilai', ['id_nilai' => $id_nilai]);
		return $this->db->affected_rows();
	}

	public function ubahnilai($data, $id_nilai)
	{
		$this->db->update('nilai', $data, ['id_nilai' => $id_nilai]);
		return $this->db->affected_rows();
	}

	public function getDataruangan($kode_ruangan = null)
	{
		if($kode_ruangan === null){
			$semua_data_ruangan = $this->db->get('ruangan')->result();
			return $semua_data_ruangan;
		}else{
			$data_ruangan_bykode_ruangan = $this->db->get_where('ruangan', ['kode_ruangan'=>$kode_ruangan])->result();
			return $data_ruangan_bykode_ruangan;
		}
	}

	public function tambahruangan($data)
	{
		$this->db->insert('ruangan', $data);
		return $this->db->affected_rows();
	}

	public function hapusruangan($kode_ruangan)
	{
		$this->db->delete('ruangan', ['kode_ruangan' => $kode_ruangan]);
		return $this->db->affected_rows();
	}

	public function ubahruangan($data, $kode_ruangan)
	{
		$this->db->update('ruangan', $data, ['kode_ruangan' => $kode_ruangan]);
		return $this->db->affected_rows();
	}

  }
 