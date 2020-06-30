<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        // membuat variabel url untuk membaca url
        $url = $this -> parseURL();
        
        //controler
        if (file_exists('../app/controllers/' . $url[0] . '.php')){ // jika ada nama file pada variabel url index 0 di dalam app/controller dengan extensi php maka,
            $this->controller = $url[0]; // nilai properti controller di dalam kelas app sama dengan nilai variabel url index 0
            unset($url[0]); // setelah itu menghilangkan nilai pada variabel url index 0
        }
        require_once '../app/controllers/' . $this->controller . '.php'; // mengakses file di dalam app/controller yang bernama, nilai pada variabel url index 0
        $this->controller = new $this->controller; // membuat object controller

        //method
        if (isset($url[1])){ // jika variabel url index 1 ada nilainya maka,
            if (method_exists($this->controller, $url[1])){ // jika metode di dalam properti controller yang namanya nilai pada variabel url index 1
                $this->method = $url[1]; // nilai properti method di dalam kelas app sama dengan nilai variabel url index 1
                unset($url[1]); // setelah itu menghilangkan nilai pada variabel url index 1
                unset($_SESSION['notFound']);
            }else{
                notFound::setError('Halaman','tidak ditemukan','danger');
            }
        }

        // mengelola parameter jika ada
        if (!empty($url)){ // jika variabel url tidak kosong maka,
            $this->params = array_values($url); // nilai di properti method di dalam kelas app sama dengan nilai variabel url semua index
        }

        // jalankan controller & method dan mengirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->params); // menjalankan controlller dan method dan mengrimkan parameter jika ada
    }

    // membuat fungsi publik bernama parseURL untuk mengambil nama controller, method, dan parameter
    public function parseURL(){
        if (isset($_GET['url'])){ // jika url ada maka,
            $url = rtrim ($_GET['url'],'/'); // menghilangkan karakter / di akhir url
            $url = filter_var($url,FILTER_SANITIZE_URL); // membersihkan url dari sql injection
            $url = explode('/',$url); // untuk memisahkan url dari slash(/) dan di massukkan ke variabel parameter
            return $url; // mengembalikan nilai url
        }
    }
}