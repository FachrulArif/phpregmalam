<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into barang (id_barang,nama,kategori_id,satuan_id)
	values(
		'".$_POST['id_barang']."',
		'".$_POST['nama']."',
		'".$_POST['kategori_id']."',
		'".$_POST['satuan_id']."')");
	
		if($query_input){
			header('location:tampil_barang.php');
			}else{
				echo mysqli_error();
			}
	}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="tampil_barang.php" class="btn btn-danger">Master Barang</a>
<table class="table table-bordered" border="">
	<tr>
	    <td>Id barang</td>
		<td><input type="number" name="id_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td><input type="text" name="kategori_id" class="form-control"></td>
	</tr>
    <td>Satuan</td>
		<td><input type="text" name="satuan_id" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
</html>	