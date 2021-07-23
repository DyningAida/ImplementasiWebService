<?php

require APPPATH . 'libraries/REST_Controller.php';

class Cabang extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_cabang', 'cabang');
	}

	public function index_get()
	{
		$kode_child = $this->get('kode_child');
		if($kode_child === null){
			$data_cabang = $this->cabang->getDatacabang();
		}else{
			$data_cabang=$this->cabang->getDatacabang($kode_child);
		}
		if($data_cabang){
			$this->response(
				[
					'status' => true,
					'data' => $data_cabang
				],
				REST_Controller::HTTP_OK
			);
		} else{
			$this->response(
				[
					'status' => false,
					'message' => "Data tidak ditemukan"
				],
				REST_Controller::HTTP_NOT_FOUND
			);
		}
	}

	public function index_post()
	{
		$kode_child = $this->post('kode_child');
		$nama_child = $this->post('nama_child');
		$lokasi = $this->post('lokasi');
		$no_telp = $this->post('no_telp');
		$email = $this->post('email');

		$data = [
			'kode_child' => $kode_child,
			'nama_child' => $nama_child,
			'lokasi' => $lokasi,
			'no_telp' => $no_telp,
			'email' => $email
		];

		if($kode_child === null || $nama_child === null || $lokasi === null| $no_telp === null || $email === null || $alamat === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->cabang->tambahcabang($data)>0){
				$this->response(
					[
						'status' => true,
						'message' => 'data berhasil ditambahkan'
					],
					REST_Controller::HTTP_CREATED
				);
			} else {
				$this->response(
					[
						'status' => false,
						'message' => 'Gagal Menambahkan Data'
					],
					REST_Controller
				);
			}
		}
	}

	public function index_delete()
	{
		$kode_child = $this->delete('kode_child');
		if($kode_child === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_child tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->cabang->hapuscabang($kode_child)>0){
				$this->response(
					[
						'status'=>true,
						'kode_child'=>$kode_child,
						'message'=>'data cabang dengan kode_child :' . $kode_child . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data cabang dengan kode_child :' .$kode_child. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$kode_child = $this->put('kode_child');
		$datacabang = [
			'nama_cabang' => $this->put('nama_cabang'),
			'lokasi' => $this->put('lokasi'),
			'no_telp' => $this->put('no_telp'),
			'email' => $this->put('email'),
		];
		if($kode_child === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_child tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->cabang->ubahcabang($datacabang, $kode_child) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data cabang dengan kode_child :' .$kode_child. ' berhasil diupdate'
					],
					REST_Controller::HTTP_CREATED
				);
			} else {
				$this->response(
					[
						'status' => false,
						'message' => 'data tidak ada yang diupdate'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}
}

?>