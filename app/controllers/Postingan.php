<?php

class Postingan extends controller{

    public function index($id,$tag){
        $data = [
            'judul' => 'Postingan | '.$this->model('Postingan_model')->getPostinganId($id)['judul'],
            'postingan' => $this->model('Postingan_model')->getPostinganId($id),
            'link' => $this->model('Postingan_model')->getNav($tag)
        ];
        $this->view('templates/loading');
        $this->view('templates/header',$data);
        $this->view('Postingan/index',$data);
        $this->view('templates/footer');
    }



}