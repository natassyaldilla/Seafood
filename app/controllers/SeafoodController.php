<?php

class Seafood extends Controller {

    private $model = 'Seafood_model';

    public function index(){
        $data['judul'] = "Seafood";
        $data['seafood'] = $this->model($this->model)->getAllSeafood();
        $this->view('layouts/header', $data);
        $this->view('seafood/index', $data);
        $this->view('layouts/footer');
    }

    public function create(){
        $data['judul'] = "Tambah Seafood";
        $data['jenis_seafood'] = $this->model('Jenis_Seafood_model')->getAllJenisSeafood();
        $this->view('layouts/header', $data);
        $this->view('seafood/create', $data);
        $this->view('layouts/footer');
    }

    public function manage_image($image, $id){
        $temp_extension =   explode('.', $image['name']);
        $extension = end($temp_extension);

        $temp_file_name = $image['tmp_name'];
        $file_name = $id.'.'.$extension;

        //valid extension
        $validExtension = ['jpg', 'jpeg', 'png'];
        if(!in_array(strtolower($extension), $validExtension) ){
            return false;
        }

        move_uploaded_file($temp_file_name, "img_barang/".$file_name);
        return $file_name;

    }

    public function store(){

        if($this->manage_image($_FILES['GAMBAR_BARANG'], $_POST['ID_BARANG']) != false ){

            $data = [
                'ID_BARANG' => $_POST['ID_BARANG'],
                'ID_JENIS' => $_POST['ID_JENIS'],
                'NAMA_BARANG' => $_POST['NAMA_BARANG'],
                'STOK_BARANG' => $_POST['STOK_BARANG'],
                'BERAT_BARANG' => $_POST['BERAT_BARANG'],
                'HARGA_JUAL' => $_POST['HARGA_JUAL'],
                'GAMBAR_BARANG' =>  $this->manage_image($_FILES['GAMBAR_BARANG'], $_POST['ID_BARANG'])
            ];
            
            if($this->model($this->model)->storeData($data) > 0){
                header('Location:'. BASEURL . '/Seafood');
                exit;
            }else {
                header('Location:'. BASEURL . '/Seafood/create');
                exit;
            }
        }else{
            echo "<script>
                    alert('Nat Jelek');
                    window.location.href = 'http://localhost/basis_data/uas/seafood_app/public/Seafood/create';
                  </script>";
        }
        
    }

    public function edit($id){
        $data['judul'] = "Edit Seafood";
        $data['seafood_by_id'] = $this->model($this->model)->getSeafoodById($id);
        $data['jenis_seafood'] = $this->model('Jenis_Seafood_model')->getAllJenisSeafood();
        $this->view('layouts/header', $data);
        $this->view('Seafood/edit', $data);
        $this->view('layouts/footer');
    }

    public function update(){
        
        $data = [
            'ID_BARANG' => $_POST['ID_BARANG'],
            'ID_JENIS' => $_POST['ID_JENIS'],
            'NAMA_BARANG' => $_POST['NAMA_BARANG'],
            'STOK_BARANG' => $_POST['STOK_BARANG'],
            'BERAT_BARANG' => $_POST['BERAT_BARANG'],
            'HARGA_JUAL' => $_POST['HARGA_JUAL']
        ];

        if($_FILES['GAMBAR_BARANG']['error'] == 0){
            $validExtension = ['jpg', 'jpeg', 'png'];
            $temp_extension =  explode('.', $_FILES['GAMBAR_BARANG']['name']);

            if(!in_array(strtolower(end($temp_extension)), $validExtension)){
                //kalau yang diimasukkan bukan jpg/png/jpeg maka jangan boleh meneruskan. kita return false
                echo "<script>
                         alert('Gagal');
                         window.location.href = 'http://localhost/basis_data/uas/seafood_app/public/Seafood';
                       </script>";
                    return false;
                    exit;
            }else{
                //kalau yang dimasukkan file jpg/png/jpeg, maka file yang lama kita hapusdulu
                $data['seafood_by_id'] = $this->model($this->model)->getSeafoodById($_POST['ID_BARANG']);
                $filename = "img_barang/".$data['seafood_by_id']['GAMBAR_BARANG'];
                if (file_exists($filename)) {
                    unlink($filename);
                }
                //sampai tahap ini file yang lama sudah terhapus
            }
            
            if($this->manage_image($_FILES['GAMBAR_BARANG'], $_POST['ID_BARANG']) != false ){
                $data['GAMBAR_BARANG'] = $this->manage_image($_FILES['GAMBAR_BARANG'], $_POST['ID_BARANG']);
            }else{
                echo "<script>
                    alert('Nat Jelek :p');
                    window.location.href = 'http://localhost/basis_data/uas/seafood_app/public/Seafood';
                  </script>";
            }

            
        }else{
            //user tdk mengganti gambar barang
            //kalo user ga ngganti gambar barang ya gausa , nama gamarnya kita samain sama yang sebelumnya
            $getData['seafood_by_id'] = $this->model($this->model)->getSeafoodById($_POST['ID_BARANG']);
            $data['GAMBAR_BARANG'] = $getData['seafood_by_id']['GAMBAR_BARANG'];
            
        }

        if($this->model($this->model)->updateData($data) > 0){
            header('Location:'. BASEURL . '/Seafood');
            exit;
        }else {
            header('Location:'. BASEURL . '/Seafood/edit/'. $_POST['ID_JENIS']);
            exit;
        }
    }

    public function delete($id){
        $data['seafood_by_id'] = $this->model($this->model)->getSeafoodById($id);
        $filename = "img_barang/".$data['seafood_by_id']['GAMBAR_BARANG'];
        // $filename = BASEURL."/img_barang"."/".$data['seafood_by_id']['GAMBAR_BARANG'];

        if (file_exists($filename)) {
            unlink($filename);
            $this->model($this->model)->deleteData($id);
            header('Location:'. BASEURL . '/Seafood');
            exit;
        } else {
            echo "The file $filename does not exist";
        }        
        
    }

    public function control(){
        $data['judul'] = "Seafood Control";
        $data['sp_control'] = $this->model($this->model)->control();
        $this->view('layouts/header', $data);
        $this->view('seafood/control', $data);
        $this->view('layouts/footer');

    }
}

?>