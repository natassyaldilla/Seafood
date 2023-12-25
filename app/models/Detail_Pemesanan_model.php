<?php

class Detail_Pemesanan_model{
    private $detail_pemesanan_table = 'detail_pemesanan';
    private $barang_table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDetailPemesananById($id){
        $query = ("SELECT * FROM $this->detail_pemesanan_table 
                   JOIN $this->barang_table 
                   ON  $this->barang_table.ID_BARANG = $this->detail_pemesanan_table.ID_BARANG
                   WHERE ID_PEMESANAN = :ID_PEMESANAN");
        
        $this->db->query($query);
        $this->db->bind('ID_PEMESANAN', $id);

        return $this->db->getAll();
    }

    public function storeData($data){
        $query = "INSERT INTO $this->detail_pemesanan_table (ID_PEMESANAN, ID_BARANG, SUB_TOTAL, TOTAL_BERAT) 
                  VALUES (:ID_PEMESANAN, :ID_BARANG, :SUB_TOTAL, :TOTAL_BERAT)";
        $this->db->query($query);

        $this->db->bind('ID_PEMESANAN', $data['ID_PEMESANAN']);
        $this->db->bind('ID_BARANG', $data['ID_BARANG']);
        $this->db->bind('SUB_TOTAL', $data['SUB_TOTAL']);
        $this->db->bind('TOTAL_BERAT', $data['TOTAL_BERAT']);

        $this->db->execute();
        return $this->db->rowCount();
    }

}


?>