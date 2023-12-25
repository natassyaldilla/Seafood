<?php

class Seafood_model{

    private $table = 'barang';
    private $jenis_barang_table = 'jenis_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSeafood(){
        $query = ("SELECT * FROM $this->table
                   JOIN $this->jenis_barang_table
                   ON $this->table.ID_JENIS = $this->jenis_barang_table.ID_JENIS");
        $this->db->query($query);
        return $this->db->getAll();
    }

    public function getSeafoodById($id){
        $query = ("SELECT * FROM $this->table WHERE ID_BARANG =:ID_BARANG");

        $this->db->query($query);
        $this->db->bind('ID_BARANG', $id);

        return $this->db->getSingle();
    }

    public function storeData($data){
        $query = "INSERT INTO $this->table (ID_BARANG, ID_JENIS, NAMA_BARANG, STOK_BARANG, BERAT_BARANG, HARGA_JUAL, GAMBAR_BARANG)
                  VALUES (:ID_BARANG, :ID_JENIS, :NAMA_BARANG, :STOK_BARANG, :BERAT_BARANG, :HARGA_JUAL, :GAMBAR_BARANG)";

        $this->db->query($query);

        $this->db->bind('ID_BARANG', $data['ID_BARANG']);
        $this->db->bind('ID_JENIS', $data['ID_JENIS']);
        $this->db->bind('NAMA_BARANG', $data['NAMA_BARANG']);
        $this->db->bind('STOK_BARANG', $data['STOK_BARANG']);
        $this->db->bind('BERAT_BARANG', $data['BERAT_BARANG']);
        $this->db->bind('HARGA_JUAL', $data['HARGA_JUAL']);
        $this->db->bind('GAMBAR_BARANG', $data['GAMBAR_BARANG']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateData($data){
        $query = "UPDATE $this->table SET
                  ID_JENIS = :ID_JENIS,
                  NAMA_BARANG = :NAMA_BARANG,
                  STOK_BARANG = :STOK_BARANG,
                  BERAT_BARANG = :BERAT_BARANG,
                  HARGA_JUAL = :HARGA_JUAL,
                  GAMBAR_BARANG = :GAMBAR_BARANG
                  WHERE ID_BARANG = :ID_BARANG";
        
        $this->db->query($query);

        $this->db->bind('ID_BARANG', $data['ID_BARANG']);
        $this->db->bind('ID_JENIS', $data['ID_JENIS']);
        $this->db->bind('NAMA_BARANG', $data['NAMA_BARANG']);
        $this->db->bind('STOK_BARANG', $data['STOK_BARANG']);
        $this->db->bind('BERAT_BARANG', $data['BERAT_BARANG']);
        $this->db->bind('HARGA_JUAL', $data['HARGA_JUAL']);
        $this->db->bind('GAMBAR_BARANG', $data['GAMBAR_BARANG']);

        $this->db->execute();
        return $this->db->rowCount();

    }

    public function deleteData($id){
        $query = "DELETE FROM $this->table WHERE ID_BARANG =:ID_BARANG";

        $this->db->query($query);
        $this->db->bind('ID_BARANG', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function control(){
        $stored_procedure = 'CALL sp_get_stok_barang';

        $this->db->query($stored_procedure);

        return $this->db->getAll();
        
    }



}

?>