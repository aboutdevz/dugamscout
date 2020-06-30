<?php

class Flasher{

  public static function setFlash($pesan,$aksi,$tipe){
    $_SESSION['Flash'] = [
        'pesan' => $pesan,
        'aksi' => $aksi,
        'tipe' => $tipe
    ];
  }

  public static function Flash(){
    if (isset($_SESSION['Flash'])){
    echo '<div class="alert alert-'.$_SESSION['Flash']['tipe'].' alert-dismissible fade show" role="alert">
    <strong>'.$_SESSION['Flash']['aksi'].'</strong> '.$_SESSION['Flash']['pesan'].'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    unset($_SESSION['Flash']);
    }
  }

  public static function Logout(){
    if (isset($_SESSION['userId'])){
      echo '<a class= "nav-item nav-link navbar-text" onclick="return confirm(Yakin Mau Logout?);" href="'.BASEURL.'Login/Logout">Logout</a>';
    }else{
      echo '<a class= "nav-item nav-link navbar-text" href="'.BASEURL.'Login">Login</a>';
    }
  }
}