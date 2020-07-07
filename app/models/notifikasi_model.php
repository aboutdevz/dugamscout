<?php


class notifikasi_model{
    private $table = 'notifikasi';
    private $db;

    public function __construct(){
        $this->db = new Database; // membuat objek database
    }

    public function tambah($data){
        $query = "INSERT INTO $this->table (id,pesan,timeout) VALUES ('',:pesan,:timeout)";
        $this->db->query($query);

        $this->db->bind('pesan',$data['keterangan']);
        $this->db->bind('timeout',$data['timeout']);

        $this->db->execute();

    }
    public function getNotifikasi(){
        $this->db->query("SELECT * FROM $this->table ORDER BY id DESC LIMIT 1"); // set query untuk mengambil semua murid
        return $this->db->single(); // mengembalikan nilai result set
    }
}