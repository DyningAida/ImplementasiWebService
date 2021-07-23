 <?php
 require APPPATH . 'libraries/REST_Controller.php';
 
 class Api extends REST_Controller {
 
     public function __construct(){
        parent::__construct();
        $this->load->model(['model_produk','model_matakuliah','model_apikey','model_dosen','model_nilai','model_ruangan','model_api']);
    }

    public function index_get(){     

            $data_produk = $this->model_produk->getDataproduk();
            $data_matakuliah = $this->model_matakuliah->getDataMatakuliah();
            $data_dosen = $this->model_dosen->getDataDosen();
            $data_nilai = $this->model_nilai->getDataNilai();
            $data_ruangan = $this->model_ruangan->getDataRuangan();

            $data = array(
                "data_produk" => $data_produk,
                "data_matakuliah" => $data_matakuliah,
                "data_dosen" => $data_dosen,
                "data_nilai" => $data_nilai,
                "data_ruangan" => $data_ruangan
        );
        echo json_encode($data);
    }

    public function index_put():
        #$this->db->update('dosen', $data, ['NIP' => $NIP]);
        $nip = $this->model_dosen->put('NIP');
        $datadosen = [
                'nama_dosen' => $this->put('nama_dosen'),
                'tanggal_lahir' => $this->put('tanggal_lahir'),
                'JK' => $this->put('JK'),
                'no_telp' => $this->put('no_telp'),
                'alamat' => $this->put('alamat'),
            ];
        $update_dosen = $this->model_dosen->ubahdosen($data_dosen,$nip);
        echo json_encode($update_dosen);
}
        #362713788c0c45d7c649ebf5afd0a0d05ac9ce9f
