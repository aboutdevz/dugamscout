<?php

class Home extends Controller{
    public function index(){ // method index pada controlller home 
        $datafromdb = $this->model('notifikasi_model')->getNotifikasi();
        $dataafter = [
            'keterangan' => $datafromdb['pesan'],
            'timeout' => $datafromdb['timeout']
        ];
        Flasher::setPengunguman($dataafter);
        $_SESSION['timeout'] = $dataafter['timeout'];
        $session_life = date("Ymd");
        $inactive = $_SESSION['timeout'];
        if($session_life >= $inactive)
        {  
          unset($_SESSION['pengunguman']);
          unset($inactive);
        }
        $data = [
            'judul' => 'Home',
            'postingan' => $this->model('Postingan_model')->getAllPostingan(),
            'postinganHome1' => $this->model('Postingan_model')->getALlPostingan(),
            'content' => $this->model('Postingan_model')->getNav('kegiatan')
        ];
        $this->view('templates/loading');
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('templates/hero',$data); // menampilkan view dari views/templates/header
        $this->view('Home/index',$data); // menampilkan view dari views/Home/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer

        
    }

}