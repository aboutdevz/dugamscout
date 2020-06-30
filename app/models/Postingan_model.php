<?php

class Postingan_model{
    private $table = 'postingan';
    private $db;

    public function __construct(){
        $this->db = new Database; // membuat objek database
    }

    public function tambahPostingan($data){
        $query = "INSERT INTO $this->table (id,judul,tag,isi,keterangan,gambar,author,tanggal) VALUES('',:judul,:tag,:isi,:keterangan,:gambar,:author,:tanggal)"; // query untuk menambah data ke tabel postingan

        $this->db->query($query); // set query

        // binding parameter query
        $this->db->bind('judul',$data['post']['judul']); 
        $this->db->bind('tag',$data['post']['tag']);
        $this->db->bind('isi',$data['post']['isi']);
        $this->db->bind('keterangan',$data['post']['keterangan']);
        $this->db->bind('gambar',$data['image']);
        $this->db->bind('author',$data['author']);
        $this->db->bind('tanggal',$data['tanggal']);

        $this->db->execute(); // eksekusi query yang telah di binding

        return $this->db->rowCount(); // mengembalikan jumlah kolom pada tabel
    }
    public function updatePostingan($data){
        $query = "UPDATE $this->table SET
         judul=:judul,
         tag=:tag,
         isi=:isi,
         keterangan=:keterangan,
         gambar=:gambar,
         author=:author,
         tanggal=:tanggal WHERE id=:id";

        $this->db->query($query); // set query

        // binding parameter query
        $this->db->bind('judul',$data['post']['judulUbah']); 
        $this->db->bind('tag',$data['post']['tagUbah']);
        $this->db->bind('isi',$data['post']['isiUbah']);
        $this->db->bind('keterangan',$data['post']['keteranganUbah']);
        $this->db->bind('gambar',$data['image']);
        $this->db->bind('author',$data['author']);
        $this->db->bind('tanggal',$data['tanggal']);
        $this->db->bind('id',$data['post']['idUbah']);

        $this->db->execute(); // eksekusi query yang telah di binding

        return $this->db->rowCount(); // mengembalikan jumlah kolom pada tabel
    }

    
    public function getAllPostingan(){
        $this->db->query("SELECT * FROM $this->table"); // set query untuk mengambil semua murid
        return $this->db->resultSet(); // mengembalikan nilai result set
    }
    public function getHome1Postingan(){
        $this->db->query("SELECT * FROM $this->table WHERE id BETWEEN 1 AND 3"); // set query untuk mengambil semua murid
        return $this->db->resultSet(); // mengembalikan nilai result set
    }
    public function getHome2Postingan(){
        $this->db->query("SELECT * FROM $this->table WHERE id BETWEEN 4 AND 6"); // set query untuk mengambil semua murid
        return $this->db->resultSet(); // mengembalikan nilai result set
    }
    public function getPostinganId($id){
        $this->db->query("SELECT * FROM $this->table WHERE id = :id"); // set query untuk mengambil semua murid
        $this->db->bind('id',$id);
        return $this->db->single(); // mengembalikan nilai result set
    }
    public function getPostinganNav(){
        $this->db->query("SELECT DISTINCT tag FROM $this->table"); // set query untuk mengambil semua murid
        return $this->db->resultSet(); // mengembalikan nilai result set
    }
    public function getNav($tag){
        $this->db->query("SELECT * FROM $this->table WHERE tag = :tag"); // set query untuk mengambil semua murid
        $this->db->bind('tag',$tag);
        return [
            'resultSet' => $this->db->resultSet(),
            'rowCount' => $this->db->rowCount()
        ];
    }
    public function hapusById($id){
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }


}