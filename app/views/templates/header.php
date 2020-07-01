<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Halaman <?= $data['judul'];?></title>
    <link id="icon" rel = "icon" type="image/png"  href =  "<?=BASEURL;?>img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
    <style>
    @media (min-width: 576px) {

    }
    /*Medium (-md-) devices (tablets, 768px and up)*/
    @media (min-width: 768px) {

    }
    /*Large (-lg-) devices (desktops, 992px and up)*/
    @media (min-width: 992px) {

    }
    /*Extra large (-xl-) devices (large desktops, 1200px and up)*/
    @media (min-width: 1200px) {

    }
    
 

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light shadow">
            <a class="navbar-brand" href="#"><img class="d-inline-block" style="height:10vw;width:auto;" src="<?=BASEURL?>img/favicon.png"/></a>
            <h4 class="text-center font-weight-bold">Dugam Scout</h4>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=BASEURL?>Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=BASEURL?>Nav/index/Kegiatan">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=BASEURL?>Nav/index/Struktur Organisasi">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=BASEURL?>Nav/index/Administrasi">Administrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?=BASEURL?>Nav/index/About">About</a>
                    </li>
                    <?php 
                        if(!isset($_SESSION['Level'])=='admin'){
                            echo'
                                <li class="nav-item text-primary">
                                    <a class="nav-link text-primary" href="'.BASEURL.'Login">Login</a>
                                </li>
                            ';
                        }
                        else{
                            echo '
                            <li class="nav-item text-primary">
                            <a id="tampilTambah" class="nav-link text-dark" href="'.BASEURL.'Admin/viewTambah">Tambah Postingan</a>
                            </li>
                            <li class="nav-item text-primary">
                                <a class="nav-link text-primary" href="'.BASEURL.'Login/Logout">Logout</a>
                            </li>
                            ';
                        }
                    ?>
                    
                </ul>
            </div>
        </nav>
    