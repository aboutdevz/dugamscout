<?php

class User_model{

    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database; // membuat objek database
    }

    public function getUser($data){
        $query = "SELECT * FROM $this->table WHERE Uname=:username";
        $this->db->query($query);
        $this->db->bind('username',$data['username']);
        $data = [
            'rowCount' => $this->db->rowCount(),
            'single' => $this->result = $this->db->single()
        ];
        return $data;
    }
    
}