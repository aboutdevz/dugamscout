<?php

class User_model{

    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database; // membuat objek database
    }

    public function getUser($data){
        $query = "SELECT * FROM $this->table WHERE Uname=:username AND Upass=:pass";
        $this->db->query($query);
        $this->db->bind('username',$data['username']);
        $this->db->bind('pass',$data['password']);
        $this->result = $this->db->single();
        return $this->db->rowCount();
    }

    public function getData($data){
        $query = "SELECT * FROM $this->table WHERE Uname=:username AND Upass=:pass";
        $this->db->query($query);
        $this->db->bind('username',$data['username']);
        $this->db->bind('pass',$data['password']);
        $this->result = $this->db->single();
        return $this->db->single();
    }
    
}