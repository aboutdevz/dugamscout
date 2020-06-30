<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;


    // koneksi database menggunakkan PDO
    public function __construct(){
        //data source name
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
        }catch(PDOExeption $e){
            die($e->getMessage());
        }
    }

    // menyiapkan query untuk di bind
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    // binding query dengan parameter param, nilai dan datatipe
    public function bind($param,$value,$type = null){
        if (is_null($type)){
            switch (true){
                case is_int($value): // untuk menentukan tipe bahwa nilai berupa integer
                    $type = PDO::PARAM_INT;
                break;
                case is_bool($value): // untuk menentukan tipe bahwa nilai berupa boolean
                    $type = PDO::PARAM_BOOL;
                break;
                case is_null($value): // untuk menentukan tipe bahwa nilai berupa NULL
                    $type = PDO::PARAM_NULL;
                break;
                default: // untuk menentukan tipe bahwa nilai berupa string
                $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param,$value,$type); // binding query dengan method bind value
    }
    public function execute(){ 
        $this->stmt->execute(); // eksekusi query yang sudah di bind
    }

    public function resultSet(){ // mengembalikan beberapa data hasil eksekusi query berupa array assosiatif
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){ // mengembalikan satu data hasil eksekusi query berupa array assosiatif
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->stmt->rowCount(); // menghitung row pada table
    }
}