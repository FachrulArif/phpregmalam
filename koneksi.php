<?php

$server="localhost";
$user="root";
$password="";
$database="uaspgr3";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
echo "Koneksi Sukses";
}else{
echo "koneksi gagal";
}
?>