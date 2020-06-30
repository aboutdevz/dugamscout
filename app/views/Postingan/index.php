<?php

    class viewPostingan{

        public static function content($gambar,$taghref,$tag,$judul,$author,$tanggal,$isi){
            echo'
            <div class="header border-bottom border-rounded mt-5 pb-2 mb-5">
                <img class="bodo mx-auto d-block" src="'.$gambar.'" alt="gambar orang lagi baris"/>
                <a href="'.BASEURL.$taghref.'"><small class="text-primary font-weight-bold lead">'.$tag.'</small></a>
                <h5 class="title display-4">'.$judul.'</h5>
                <div class="text-lead text-white bg-dark border-primary p-3 mt-3">
                    <p class="m-1">Author: <a class="text-primary" href="#About">'.$author.'</a> Date Released: <span class="text-primary">'.$tanggal.'</sp></p>
                </div>
            </div>
            <div class="content m-5">
                <p class="text-break">
                    '.$isi.'
                </p>
            </div>
            ';
        }
        public static function nav($taghref,$tag,$postinganhref,$judul){
            echo '
            <div class="card mb-2 border-danger">
                <div class="card-header text-primary">
                    <a class="nav-link" href="'.BASEURL.$taghref.'">'.$tag.'</a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a class="nav-link" href="#">-->  Link 1</a></li>
                    <li class="list-group-item"><a class="nav-link" href="#">-->  Link 2</a></li>
                    <li class="list-group-item"><a class="nav-link" href="#">-->  Link 3</a></li>
                </ul>
            </div>
            ';
        }
    }

?>




<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-9 block border-primary shadow-lg">
        <?php
            $pos = $data['postingan']; 
            viewPostingan::content($pos['gambar'],$pos['tag'],$pos['tag'],$pos['judul'],$pos['author'],$pos['tanggal'],$pos['isi']);
        ?>
        </div>
    </div>
</div>