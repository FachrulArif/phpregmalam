<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from jenis_barang where id_anggota='".$_GET['id_anggota']."'");
if($query_delete) {
	header("location:view_nama_barang.php");
}else{
	echo mysqli_error();
} 