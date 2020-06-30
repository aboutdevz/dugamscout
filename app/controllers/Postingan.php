<?php

class Postingan extends controller{

    public function index($id){
        $postingan = $this->model('Postingan_model')->getPostinganId($id);
        $link = $this->model('Postingan_model')->getPostinganNav();
        $data = [
            'judul' => 'Postingan | '.$postingan['judul'],
            'postingan' => $postingan,
            'link' => $link
        ];
        $this->view('templates/header',$data);
        $this->view('Postingan/index',$data);
        $this->view('templates/footer');
    }



}