<?php

require APPPATH . 'libraries/REST_Controller.php';

class Produk extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Produk', 'produk');
	}

	public function index_get()
	{
		$kode_produk = $this->get('kode_produk');
		if($kode_produk === null){
			$data_produk = $this->produk->getDataproduk();
		}else{
			$data_produk=$this->produk->getDataproduk($kode_produk);
		}
		if($data_produk){
			$this->response(
				[
					'status' => true,
					'data' => $data_produk
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
		$kode_produk = $this->post('kode_produk');
		$nama_produk = $this->post('nama_produk');
		$tanggal_lahir = $this->post('tanggal_lahir');
		$JK = $this->post('JK');
		$no_telp = $this->post('no_telp');
		$alamat = $this->post('alamat');

		$data = [
			'kode_produk' => $kode_produk,
			'nama_produk' => $nama_produk,
			'tanggal_lahir' => $tanggal_lahir,
			'JK' => $JK,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
		];

		if($kode_produk === null || $nama_produk === null || $tanggal_lahir === null| $JK === null || $no_telp === null || $alamat === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->produk->tambahproduk($data)>0){
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
		$kode_produk = $this->delete('kode_produk');
		if($kode_produk === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_produk tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->produk->hapusproduk($kode_produk)>0){
				$this->response(
					[
						'status'=>true,
						'kode_produk'=>$kode_produk,
						'message'=>'data produk dengan kode_produk :' . $kode_produk . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data produk dengan kode_produk :' .$kode_produk. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$kode_produk = $this->put('kode_produk');
		$dataproduk = [
			'nama_produk' => $this->put('nama_produk'),
			'tanggal_lahir' => $this->put('tanggal_lahir'),
			'JK' => $this->put('JK'),
			'no_telp' => $this->put('no_telp'),
			'alamat' => $this->put('alamat'),
		];
		if($kode_produk === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_produk tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->produk->ubahproduk($dataproduk, $kode_produk) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data produk dengan kode_produk :' .$kode_produk. ' berhasil diupdate'
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