<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into jenis_barang(nama_barang)
values(
    '".$_POST['nama_barang']."')");

if($query_input){
header('location:view_nama_barang.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
