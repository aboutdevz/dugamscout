<?php

class Home extends Controller{
    public function index(){ // method index pada controlller home 
        $data = [
            'judul' => 'Home',
            'postingan' => $this->model('Postingan_model')->getAllPostingan(),
            'postinganHome1' => $this->model('Postingan_model')->getALlPostingan(),
            'content' => $this->model('Postingan_model')->getNav('kegiatan')
        ];
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('templates/hero',$data); // menampilkan view dari views/templates/header
        $this->view('Home/index',$data); // menampilkan view dari views/Home/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
    }

}