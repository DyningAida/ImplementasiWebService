<?php

require APPPATH . 'libraries/REST_Controller.php';

class Pemesanan extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Pemesanan', 'pemesanan');
	}

	public function index_get()
	{
		$kode_pemesanan = $this->get('kode_pemesanan');
		if($kode_pemesanan === null){
			$data_pemesanan = $this->pemesanan->getDatapemesanan();
		}else{
			$data_pemesanan=$this->pemesanan->getDatapemesanan($kode_pemesanan);
		}
		if($data_pemesanan){
			$this->response(
				[
					'status' => true,
					'data' => $data_pemesanan
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
		$kode_pemesanan = $this->post('kode_pemesanan');
		$id_user = $this->post('id_user');
		$kode_produk = $this->post('kode_produk');
		$total_pesenanan = $this->post('total_pesenanan');
		$data = [
			'kode_pemesanan' => $kode_pemesanan,
			'id_user' => $id_user,
			'kode_produk' => $kode_produk,
			'total_pesenanan' => $total_pesenanan,
		];

		if($kode_pemesanan === null || $id_user === null || $kode_produk === null| $total_pesenanan === null || $no_telp === null || $alamat === null){
			$this->response(
				[
					'status' =>false,
					'message' => 'data yang dikirimkan tidak boleh ada yang kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->pemesanan->tambahpemesanan($data)>0){
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
		$kode_pemesanan = $this->delete('kode_pemesanan');
		if($kode_pemesanan === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_pemesanan tidak boleh kosong'
				],
				REST_Controller
			);
		} else{
			if($this->pemesanan->hapuspemesanan($kode_pemesanan)>0){
				$this->response(
					[
						'status'=>true,
						'kode_pemesanan'=>$kode_pemesanan,
						'message'=>'data pemesanan dengan kode_pemesanan :' . $kode_pemesanan . ' berhasil dihapus'
					],
					REST_Controller::HTTP_OK
				);
			} else{
				$this->response(
					[
						'status'=> false,
						'message'=> 'data pemesanan dengan kode_pemesanan :' .$kode_pemesanan. ' tidak ditemukan'
					],
					REST_Controller::HTTP_BAD_REQUEST
				);
			}
		}
	}

	public function index_put()
	{
		$kode_pemesanan = $this->put('kode_pemesanan');
		$datapemesanan = [
			'id_user' => $this->put('id_user'),
			'kode_produk' => $this->put('kode_produk'),
			'total_pesenanan' => $this->put('total_pesenanan')
		];
		if($kode_pemesanan === null){
			$this->response(
				[
					'status' => false,
					'message' => 'kode_pemesanan tidak boleh kosong'
				],
				REST_Controller::HTTP_BAD_REQUEST
			);
		} else {
			if($this->pemesanan->ubahpemesanan($datapemesanan, $kode_pemesanan) > 0){
				$this->response(
					[
						'status' => true,
						'message' => 'data pemesanan dengan kode_pemesanan :' .$kode_pemesanan. ' berhasil diupdate'
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