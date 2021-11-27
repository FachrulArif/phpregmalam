<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into anggota(nama,alamat,no_tlp)
values(
'".$_POST['nama']."',
'".$_POST['alamat']."',
'".$_POST['no_tlp']."')");

if($query_input){
header('location:view_anggota.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index1.php" class="btn btn-danger">MENU</a>
<table class="table table-bordered" border="">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
	<tr>
		<td>No Tlpn</td>
		<td><input type="text" name="no_tlp" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
