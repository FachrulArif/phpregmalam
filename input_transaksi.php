<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into transaksi (
		id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_transaksi,diskon,id_pelanggan)
	values(
		'".$_POST['id_transaksi']."',
		'".$_POST['nama_transaksi']."',
		'".$_POST['tgl_transaksi']."',
		'".$_POST['harga']."',
		'".$_POST['id_barang']."',
		'".$_POST['diskon']."',
		'".$_POST['id_pelanggan']."')");
	
		if($query_input){
			header('location:tampil_transaksi.php');
			}else{
				echo mysqli_error();
			}
	}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="tampil_transaksi.php" class="btn btn-danger">Master Transaksi</a>
<table class="table table-bordered" border="">
	<tr>
	    <td>Id Transaksi</td>
		<td><input type="number" name="id_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td><input type="date" name="tgl_transaksi" class="form-control"></td>
	</tr>
    <td>Harga</td>
		<td><input type="text" name="harga" class="form-control"></td>
	</tr>
	<td>Barang</td>
		<td><input type="text" name="id_barang" class="form-control"></td>
	</tr>
	<td>Diskon</td>
		<td><input type="text" name="diskon" class="form-control"></td>
	</tr>
	<td>Status</td>
		<td><input type="text" name="id_pelanggan" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
</html>