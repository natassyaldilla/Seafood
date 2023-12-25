<?php

//controller home adalah controller default saat user tidak memasukkan controller, method dan id, di url
//controller home extend ke /core/Controller.php
class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $this->view('layouts/header', $data);
        $this->view('home', $data);
        $this->view('layouts/footer');
    }
}