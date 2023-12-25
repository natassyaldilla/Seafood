<?php

class Pemesanan extends Controller{

    private $model = 'Pemesanan_model';

    public function index(){
        $data['judul'] = "Pemesanan";
        $data['pemesanan'] = $this->model($this->model)->getAllPemesanan();
        $this->view('layouts/header', $data);
        $this->view('pemesanan/index', $data);
        $this->view('layouts/footer');
    }

    public function detail($id){
        $data['judul'] = "Detail Pemesanan";
        $data['pemesanan_by_id'] = $this->model($this->model)->getPemesananById($id);
        $data['detail_pemesanan'] = $this->model('Detail_Pemesanan_model')->getDetailPemesananById($id);
        $this->view('layouts/header', $data);
        $this->view('pemesanan/detail', $data);
        $this->view('layouts/footer');
    }

    public function create(){
        $data['judul'] = "Tambah Pemesanan";
        $data['pegawai'] = $this->model($this->model)->getAllPegawai();
        $data['calon_konsumen'] = $this->model($this->model)->getAllCalonKonsumen();
        $data['penawaran'] = $this->model($this->model)->getAllPenawaran();
        $data['seafood'] = $this->model('Seafood_model')->getAllSeafood();
        $this->view('layouts/header', $data);
        $this->view('pemesanan/create', $data);
        $this->view('layouts/footer');
    }

    public function store(){
        // print_r($_POST);
        // exit;
        if($this->model($this->model)->storeData($_POST) > 0){
            $count = count($_POST['ID_BARANG']);
            $detail = [];
            for($i = 0; $i < $count; $i++){
                if($_POST['ID_BARANG'][$i] != null){
                    $detail = [
                        'ID_PEMESANAN' => $_POST['ID_PEMESANAN'],
                        'ID_BARANG' => $_POST['ID_BARANG'][$i],
                        'SUB_TOTAL' => $_POST['SUB_TOTAL'][$i],
                        'TOTAL_BERAT' => $_POST['TOTAL_BERAT'][$i],
                    ];
                    $this->model('Detail_Pemesanan_model')->storeData($detail);
                }
            }
            header('Location:'. BASEURL . '/Pemesanan');
            exit;
        }else {
            header('Location:'. BASEURL . '/Pemesanan/create');
            exit;
        }
    }

    public function control(){
        $data['judul'] = "Pemesanan Control";
        $data['view_control'] = $this->model($this->model)->control();
        $this->view('layouts/header', $data);
        $this->view('pemesanan/control', $data);
        $this->view('layouts/footer');

    }

}

?>