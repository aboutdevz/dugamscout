<?php

class Kegiatan{
    public function index(){
        $data['judul'] = "Home"; // 
        $this->view('templates/loading');
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('Home/index',$data); // menampilkan view dari views/Home/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
    }

}