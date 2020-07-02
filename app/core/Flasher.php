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

  public static function setPengunguman($pesan){
    $_SESSION['pengunguman'] = [
        'pesan' => $pesan,
    ];
  }

  public static function Pengunguman(){
    if (isset($_SESSION['pengunguman'])){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>'.$_SESSION['pengunguman']['pesan'].'</strong>

  </div>';
  $inactive = 60*60*24;
  if( !isset($_SESSION['timeout']) )
  $_SESSION['timeout'] = time() + $inactive; 
  
  $session_life = time() - $_SESSION['timeout'];
  
  if($session_life > $inactive)
  {  session_destroy();}
  
  $_SESSION['timeout']=time();
    }
  }

  
}