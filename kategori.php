<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into kategori(kategori)
values(
    '".$_POST['kategori']."')");

if($query_input){
header('location:view_kategori.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>KATEGORI</td>
		<td><input type="text" name="kategori" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
