<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into kategori (id_kategori,nama)
	values(
		'".$_POST['id_kategori']."',
		'".$_POST['nama']."')");
	
		if($query_input){
			header('location:tampil_kategori.php');
			}else{
				echo mysqli_error();
			}
	}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="tampil_kategori.php" class="btn btn-danger">Master kategori</a>
<table class="table table-bordered" border="">
	<tr>
	    <td>Id kategori</td>
		<td><input type="number" name="id_kategori" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
</html>	