<?php

class Jenis_seafood_model{

    private $table = 'jenis_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJenisSeafood(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->getAll();
    }

    public function getJenisSeafoodById($id){
        $query = ("SELECT * FROM $this->table WHERE ID_JENIS =:ID_JENIS");

        $this->db->query($query);
        $this->db->bind('ID_JENIS', $id);

        return $this->db->getSingle();
    }

    public function storeData($data){
        $query = "INSERT INTO $this->table (ID_JENIS, NAMA_JENIS)
                  VALUES (:ID_JENIS, :NAMA_JENIS)";
        $this->db->query($query);

        $this->db->bind('ID_JENIS', $data['ID_JENIS']);
        $this->db->bind('NAMA_JENIS', $data['NAMA_JENIS']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateData($data){
        $query = "UPDATE $this->table SET
                  NAMA_JENIS =:NAMA_JENIS
                  WHERE ID_JENIS =:ID_JENIS";
        $this->db->query($query);

        $this->db->bind("ID_JENIS", $data['ID_JENIS']);
        $this->db->bind('NAMA_JENIS', $data['NAMA_JENIS']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteData($id){
        $query = "DELETE FROM $this->table WHERE ID_JENIS=:ID_JENIS";

        $this->db->query($query);
        $this->db->bind('ID_JENIS', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>