<?php

class Admin extends controller{
 
    public function index(){
        $data['judul'] = 'Admin | '.$_SESSION['userName']; // 
        $this->view('templates/loading');
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('Home/index',$data); // menampilkan view dari views/Home/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
    }

    public function viewTambah(){
        if(!isset($_SESSION['Level'])){
            header('Location: '.BASEURL.'Home');
        }else{
        $data['judul'] = 'Admin | '.$_SESSION['userName']; // 
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('templates/loading');
        $this->view('Admin/Tambah',$data); // menampilkan view dari views/Home/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
    }
    }
    public function viewUbah(){
        if(!isset($_SESSION['Level'])){
            header('Location: '.BASEURL.'Home');
        }else{
        $data['judul'] = 'Admin | '.$_SESSION['userName']; // 
        $this->view('templates/header',$data); // menampilkan view dari views/templates/header
        $this->view('templates/loading');
        $this->view('Admin/Ubah',$data); // menampilkan view dari views/Home/index
        $this->view('templates/footer'); // menampilkan view dari views/templates/footer
        }
    }


    public function Tambah(){
        $data = [
            'post' => $_POST,
            'file' => $_FILES['fileGambar'],
            'image' => ''.BASEURL.'img/'.$_FILES['fileGambar']['name'],
            'author' => $_SESSION['userName'],
            'tanggal' => ''.date("Y/m/d/h:i:s:a").''
        ];
        $getTag = $data['post']['tag'];
        if (isset($data['post']['addPostingan'])){

            if(!isset($data['file']['tmp_name'])){
                Flasher::setFlash('Gambar','Silahkan Dipilih','danger');
                header('Location: '.BASEURL.'Nav/index/'.$getTag.'');
            }else{
                    $gambar = $data['file']['tmp_name'];
                    $fileNama = $data['file']['name'];
                    $fileSize = $data['file']['size'];
                    $targetdir = URLGAMBAR;
                    $targetfile = $targetdir . basename($fileNama);
                    $fileType = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
                    if (!file_exists($targetfile)){
                        if ($fileSize > 2000 && $fileType !="jpg" && $fileType != "png" && $fileType !="jpeg" && $fileType != "gif"){
                            echo '<span class="text-danger"><b>ukuran gambar / tipe file tidak sesuai</b></span>';
                        }else{
                            if (move_uploaded_file($gambar,$targetfile)){
                                if ($this->model('Postingan_model')->tambahPostingan($data)>0){
                                    Flasher::setFlash('Ditambahkan','Postingan Berhasil','success');
                                    header('Location: '.BASEURL.'Admin/viewTambah');
                                }
                            }
                        }
                    }else{
                        Flasher::setFlash('Gambar',' Sudah ada','danger');
                        header('Location: '.BASEURL.'Admin/viewTambah');
                    }
            }
        }
    }

    public function Hapus($id,$ref){
        $gambar = $this->model('Postingan_model')->getPostinganId($id);
        $test   = $_SERVER['DOCUMENT_ROOT'].'/public/img/';
        $path = explode('/',$gambar['gambar']);
        $hh = $test.end($path);
        unlink($hh);
            if ($this->model('Postingan_model')->hapusById($id)>0){
                
                Flasher::setFlash('Dihapus','Postingan berhasil','success');
                header('Location: '.BASEURL.'Nav/index/'.$gambar['tag']);
            }else{
                Flasher::setFlash('Dihapus','Postingan Gagal','danger');
                header('Location: '.BASEURL.'Nav/index/'.$gambar['tag']);
            }
        }

    public function getUbah(){
       echo json_encode($this->model('Postingan_model')->getPostinganId($_POST['id']));
    }

    public function Ubah(){
        $data = [
            'post' => $_POST,
            'file' => $_FILES['fileGambarUbah'],
            'image' => ''.BASEURL.'img/'.$_FILES['fileGambarUbah']['name'],
            'author' => $_SESSION['userName'],
            'tanggal' => ''.date("Y/m/d/h:i:s:a").'',
        ];
        $getTag = $data['post']['tagUbah'];
        if (isset($data['post']['submitUbah'])){
            if (strlen($data['post']['namaGambar'])>0){
                $data['image'] = $_POST['namaGambar'];
                $this->model('Postingan_model')->updatePostingan($data);
                Flasher::setFlash('Postingan Berhasil','Di Update','success');
                header('Location: '.BASEURL.'Admin/viewTambah');
            }elseif(strlen($data['file']['name'])>0){
                if(!isset($data['file']['tmp_name'])){
                    Flasher::setFlash('Gambar','Silahkan Dipilih','danger');
                    header('Location: '.BASEURL.'Nav/index/'.$getTag.'');
                }else{
                        $fileNama = $data['file']['name'];
                        $fileSize = $data['file']['size'];
                        $targetdir = BASEURL.'img/';
                        $data['image']=''.BASEURL.'img/'.$_FILES['fileGambarUbah']['name'];
                        $targetfile = $targetdir . basename($fileNama);
                        $fileType = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
                        if(!file_exists($targetfile)){
                            if ($fileSize > 2000 && $fileType !="jpg" && $fileType != "png" && $fileType !="jpeg" && $fileType != "gif"){
                                Flasher::setFlash('Gambar tidak sesuai','Ukuran','danger');
                                header('Location: '.BASEURL.''.$getTag['tag'].'');
                            }else{
                                    $this->model('Postingan_model')->updatePostingan($data);
                                    move_uploaded_file($data['file']['tmp_name'],$targetfile);
                                    Flasher::setFlash('Postingan Berhasil','Di Update','success');
                                    header('Location: '.BASEURL.'Nav/index/'.''.$getTag.'');
                                }
                            }else{
                                Flasher::setFlash('Postingan gagal','Di Update','danger');
                                header('Location: '.BASEURL.'Nav/index/'.''.$getTag.'');
                        }
                
                }
            }

        }
    }

    public function Pengunguman(){
        $timeout = explode('-',$_POST['timeout']);
        $truetimeout = $timeout[0].$timeout[1].$timeout[2];
        $databefore = [
            'keterangan' => $_POST['keteranganPengunguman'],
            'timeout' => $truetimeout
        ];
        
        $this->model('notifikasi_model')->tambah($databefore);
        $datafromdb = $this->model('notifikasi_model')->getNotifikasi();
        $dataafter = [
            'keterangan' => $datafromdb['pesan'],
            'timeout' => $datafromdb['timeout']
        ];
        Flasher::setPengunguman($dataafter);
        header('Location: '.BASEURL.'Home');
    }

}