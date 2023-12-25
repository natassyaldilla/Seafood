<?php

//setelah controller, method dan parameter ditangkap oleh url (App.php),
//mereka dialamatkan oleh Controller.php untuk menuju model atau views
class Controller {
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
        // karena ada class jadi harus direturn
    }

}

