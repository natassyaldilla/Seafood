<?php

class Jenis_Seafood extends Controller{

    private $model = 'Jenis_Seafood_model';
    public function index(){
        $data['judul'] = "Jenis Seafood";
        $data['jenis_seafood'] = $this->model($this->model)->getAllJenisSeafood();
        $this->view('layouts/header', $data);
        $this->view('jenisSeafood/index', $data);
        $this->view('layouts/footer');
    }

    public function create(){
        $data['judul'] = "Tambah Jenis Seafood";
        $this->view('layouts/header', $data);
        $this->view('jenisSeafood/create', $data);
        $this->view('layouts/footer');
    }

    public function store(){
        if($this->model($this->model)->storeData($_POST) > 0){
            header('Location:'. BASEURL . '/Jenis_Seafood');
            exit;
        }else {
            header('Location:'. BASEURL . '/Jenis_Seafood/create');
            exit;
        }
    }

    public function edit($id){
        $data['judul'] = "Edit Jenis Seafood";
        $data['jenis_seafood_by_id'] = $this->model($this->model)->getJenisSeafoodById($id);
        $this->view('layouts/header', $data);
        $this->view('jenisSeafood/edit', $data);
        $this->view('layouts/footer');
    }

    public function update(){
        if($this->model($this->model)->updateData($_POST) > 0){
            header('Location:'. BASEURL . '/Jenis_Seafood');
            exit;
        }else {
            header('Location:'. BASEURL . '/Jenis_Seafood/edit/'. $_POST['ID_JENIS']);
            exit;
        }
    }

    public function delete($id){
        $this->model($this->model)->deleteData($id);
        header('Location:'. BASEURL . '/Jenis_Seafood');
        exit;
    }
}

?>