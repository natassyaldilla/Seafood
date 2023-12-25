<?php

class Pemesanan_model{
    private $table = 'pemesanan';
    private $pegawai_table = 'pegawai';
    private $penawaran_table = 'penawaran';
    private $calon_konsumen_table = 'calon_konsumen';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPemesanan(){
        $query = ("SELECT * FROM $this->table 
                   JOIN $this->pegawai_table ON $this->table.ID_PEGAWAI = $this->pegawai_table.ID_PEGAWAI
                   JOIN $this->penawaran_table ON $this->table.ID_PENAWARAN = $this->penawaran_table.ID_PENAWARAN
                   JOIN $this->calon_konsumen_table ON $this->table.ID_CALON_KONSUMEN = $this->calon_konsumen_table.ID_CALON_KONSUMEN");

        $this->db->query($query);
        return $this->db->getAll();
    }

    public function getPemesananById($id){
        $query = ("SELECT * FROM $this->table 
                   JOIN $this->pegawai_table ON $this->table.ID_PEGAWAI = $this->pegawai_table.ID_PEGAWAI
                   JOIN $this->penawaran_table ON $this->table.ID_PENAWARAN = $this->penawaran_table.ID_PENAWARAN
                   JOIN $this->calon_konsumen_table ON $this->table.ID_CALON_KONSUMEN = $this->calon_konsumen_table.ID_CALON_KONSUMEN
                   WHERE ID_PEMESANAN = :ID_PEMESANAN");
        
        $this->db->query($query);
        $this->db->bind('ID_PEMESANAN', $id);

        return $this->db->getSingle();
    }

    public function getAllPegawai(){
        $query = ("SELECT * FROM $this->pegawai_table");

        $this->db->query($query);
        return $this->db->getAll();
    }

    public function getAllCalonKonsumen(){
        $query = ("SELECT * FROM $this->calon_konsumen_table");

        $this->db->query($query);
        return $this->db->getAll();
    }

    public function getAllPenawaran(){
        $query = ("SELECT * FROM $this->penawaran_table");

        $this->db->query($query);
        return $this->db->getAll();

    }

    public function storeData($data){
        $query = "INSERT INTO $this->table(ID_PEMESANAN, ID_PEGAWAI, ID_CALON_KONSUMEN, ID_PENAWARAN, ALAMAT_PENGIRIMAN, STATUS_PEMESANAN, TOTAL_HARGA)
                  VALUES (:ID_PEMESANAN, :ID_PEGAWAI, :ID_CALON_KONSUMEN, :ID_PENAWARAN, :ALAMAT_PENGIRIMAN, :STATUS_PEMESANAN, :TOTAL_HARGA)";
        
        $this->db->query($query);

        $this->db->bind('ID_PEMESANAN', $data['ID_PEMESANAN']);
        $this->db->bind('ID_PEGAWAI', $data['ID_PEGAWAI']);
        $this->db->bind('ID_CALON_KONSUMEN', $data['ID_CALON_KONSUMEN']);
        $this->db->bind('ID_PENAWARAN', $data['ID_PENAWARAN']);
        $this->db->bind('ALAMAT_PENGIRIMAN', $data['ALAMAT_PENGIRIMAN']);
        $this->db->bind('STATUS_PEMESANAN', $data['STATUS_PEMESANAN']);
        $this->db->bind('TOTAL_HARGA', $data['TOTAL_HARGA']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function control(){
        $view = 'SELECT * FROM total_harga_pemesanan_higher_500k';

        $this->db->query($view);

        return $this->db->getAll();
        
    }

    
}

?>