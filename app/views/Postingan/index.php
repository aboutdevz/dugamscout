<?php

    class viewPostingan{

        public static function content($gambar,$taghref,$tag,$judul,$author,$tanggal,$isi){
            echo'
            <div class="header border-bottom border-rounded mt-5 pb-2 mb-5">
                <img class="bodo mx-auto d-block" src="'.$gambar.'" alt="gambar orang lagi baris"/>
                <a href="'.BASEURL.$taghref.'"><small class="text-primary lead">'.$tag.'</small></a>
                <h1 class=" mt-3 font-weight-bold">'.$judul.'</h1>
                <div class="text-lead text-white bg-dark border-primary p-3 mt-3">
                    <p class="m-1">Author: <a class="text-white" href="#About">'.$author.' </a>| Date Released: <span class="text-white">'.$tanggal.'</sp></p>
                </div>
            </div>
            <div class="content m-5">
                <p class="text-break">
                    '.$isi.'
                </p>
            </div>
            ';
        }
            
       
    }

?>




<div class="container">
    <div class="row mt-5">
        <div class="col-12  shadow-lg">
        <?php
            $pos = $data['postingan']; 
            viewPostingan::content($pos['gambar'],$pos['tag'],$pos['tag'],$pos['judul'],$pos['author'],$pos['tanggal'],$pos['isi']);
        ?>
        </div>
    

        <div class="col-12 mt-5">
        <h1 class="text-primary mt-5 mb-5 font-weight-bold">Lihat Postingan Yang Lain</h1>
            <div class="sideNav card m-2 shadow-lg ">
                <div class="card-header text-primary">
                <?php $tag = $data['link']['resultSet'][0]['tag'];?>
                    <a class="nav-link" href="<?= BASEURL.'Nav/index/'.$tag;?>"><?=$tag; ?></a>
                </div>
                <ul class="list-group list-group-flush w-100">
                <?php $counter = 1;?>
                <?php foreach($data['link']['resultSet'] as $nav):?>
                <?php if($counter == 5){break;}?>
                    <li class="list-group-item"><a class="nav-link" href="<?=BASEURL.'Postingan/index/'.$nav['id'].'/'.$tag;?>">-->  <?=$nav['judul'];?></a></li>
                    <?php $counter++;?>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>