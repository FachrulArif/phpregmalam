<?php
if(isset($_POST['save'])){
$query=mysqli_query($koneksi, "insert into pelanggan (id_pelanggan,nama_pelanggan,no_tlp,status)
VALUES(	
'".$_POST['id_pelanggan']."',
'".$_POST['nama_pelanggan']."',
'".$_POST['no_tlp']."',
'".$_POST['status']."')");

if($query){
	header('location:tampil_pelanggan.php');
}else{
	echo mysqli_error();
	}
}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="tampil_pelanggan.php" class="btn btn-danger">Master Pelanggan</a>
<table class="table table-bordered" border="">
	<tr>
		<td>Nama Pelanggan</td>
		<td><input type="text" name="nama_pelanggan" class="form-control"></td>
	</tr>
	<tr>
		<td>Nomor Telpon</td>
		<td><input type="text" name="no_tlp" class="form-control"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
?>