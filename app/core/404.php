<?php

class notFound{

    public static function setError($pesan,$aksi,$tipe){
        $_SESSION['notFound'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];

    }

    public static function error(){
        $msg = $_SESSION['notFound'];
        echo '
            <div class="d-flex align-items-center shadow-lg bg-'.$msg['tipe'].' p-5">
                <h1 class="font-weight-bold text-white">'.$msg['pesan'].' '.$msg['aksi'].'</h1>
            </div>
        ';
    }
}