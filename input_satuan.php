<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into satuan (id_satuan,nama)
	values(
		'".$_POST['id_satuan']."',
		'".$_POST['nama']."')");
	
		if($query_input){
			header('location:tampil_satuan.php');
			}else{
				echo mysqli_error();
			}
	}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="tampil_satuan.php" class="btn btn-danger">Master Satuan</a>
<table class="table table-bordered" border="">
	<tr>
	    <td>Id Satuan</td>
		<td><input type="number" name="id_satuan" class="form-control"></td>
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