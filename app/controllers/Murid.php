<?php

class Murid extends Controller{
    public function index(){ // method index pada controller murid
       if(isset($_SESSION['userId'])){
            $data['judul'] = 'Daftar Murid';
            $data['mrd'] = $this->model('Murid_model')->getAllMurid(); // mengambil data dari model murid_model dengan methodnya getAllMurid di simpan pada variabel data dengan referensi array mrd
            $this->view('templates/header',$data); // menampilkan view dari views/templates/header
            $this->view('Murid/index',$data); // menampilkan view dari views/Murid/index
            $this->view('templates/footer'); // menampilkan view dari views/templates/footer
        }else{
            $data['judul'] = 'Login';
            $this->view('templates/header',$data);
            $this->view('Login/index',$data);
            $this->view('templates/footer');    
        }
    }

    public function Detail($id){ // method detail pada controller murid dengan parameter id
        $data['judul'] = 'Detail Murid';
        $data['mrd'] = $this->model('Murid_model')->getAllMuridById($id); // mengambil data dari model murid_model dengan methodnya getAllMuridById(parameter id) di simpan pada variabel data dengan referensi array mrd
        $this->view('templates/header',$data);
        $this->view('Murid/Detail',$data);
        $this->view('templates/footer');
    }

    public function Tambah(){ // method tambah pada controller murid
        if ($this->model('Murid_model')->tambahDataMurid($_POST)>0){ // jika tambah data murid di dalam model murid_model bernilai lebih dari 0 atau row berhasil di tambahkan maka,
            Flasher::setFlash('Berhasil','Ditambahkan','success'); // notifikasi
            header('Location:'.BASEURL.'Murid');  // url di arahkan ke Murid/index
            exit();
        }else{
            Flasher::setFlash('Gagal','Ditambahkan','danger');
            header('Location:'.BASEURL.'Murid');
            exit();
        }
    }

    public function Hapus($id){
        if ($this->model('Murid_model')->hapusDataMurid($id)>0){
            Flasher::setFlash('Berhasil','Dihapus','success');
            header('Location:'.BASEURL.'Murid');
            exit();
        }else{
            Flasher::setFlash('Gagal','Dihapus','danger');
            header('Location:'.BASEURL.'Murid');
            exit();
        }
    }

    public function getUbah(){
        echo json_encode ($this->model('Murid_model')->getAllMuridById($_POST['id']));
    }

    public function Ubah(){
        if ($this->model('Murid_model')->ubahDataMurid($_POST)>0){
            Flasher::setFlash('Diubah','Berhasil','success');
            header('Location:'.BASEURL.'Murid');
            exit();
        }else{
            Flasher::setFlash('Diubah','Gagal','danger');
            header('Location:'.BASEURL.'Murid');
            exit();
        }
    }

    public function Cari(){
        $data['judul'] = 'Daftar Murid';
        $data['mrd'] = $this->model('Murid_model')->Cari();
        $this->view('templates/header',$data);
        $this->view('Murid/index',$data);
        $this->view('templates/footer');
    }

    public function Logout(){
        session_unset();
        session_destroy();
        header('Location:');
    }
}