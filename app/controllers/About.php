<?php

class About extends Controller{
    public function index(){ // method index pada controller About
        $data['nama'] = $this->model('User_model')->getUser('nama'); // mengambil nama dari model user_model yang methodnya getUser dengan parameter nama
        $data['umur'] = $this->model('User_model')->getUser('umur'); // mengambil nama dari model user_model yang methodnya getUser dengan parameter umur
        $data['perkerjaan'] = $this->model('User_model')->getUser('perkerjaan'); // mengambil nama dari model user_model yang methodnya getUser dengan parameter perkerjaan
        $data['judul'] = "About";
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('About/index',$data); // menampilkan view dari views/About/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
    }

    public function page(){ // method page pada controller About
        $data['judul'] = "About page";
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('About/page'); // menampilkan view dari views/About/page
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
    }
}