<?php
$protcheck = $_SERVER['HTTPS'];
$prot;
if ($protcheck == "on"){
    $prot = 'https://';
}else{
    $prot = 'http://';
}
$host = $_SERVER['HTTP_HOST'];
$path = $prot.$host.'/public/';

// base url
define('BASEURL',$path);
//define('BASEURL',$_SERVER['HTTP_REFERER'].''.'dugam%20scout/public/');
define('URLGAMBAR','img/');
define('URLTAG',$path.'Postingan/index/');
//db

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dg');