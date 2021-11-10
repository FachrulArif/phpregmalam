<?php
include ("koneksi.php");
if(isset($_POST['save'])) {
$query_edit=mysqli_query($koneksi,"UPDATE kategori set
	id_anggota='".$_POST['id_anggota']."',
	kategori='".$_POST['kategori']."'
	WHERE id_anggota ='".$_POST['id_anggota']."'");
if ($query_edit) {
	header("location:view_kategori.php");
}else{
	echo mysqli_error();
}
}

$tampil=mysqli_query($koneksi,"SELECT * from kategori WHERE id_anggota='".$_GET['id_anggota']."'");
$hasil_data=mysqli_fetch_array($tampil);

?>
<form method="POST">
<table class="table table-bordered" border="1">
	<input type="hidden" name="id_anggota" value="<?php echo $hasil_data['id_anggota'];?>">
	<tr>
		<td>Kategori</td>
		<td><input type="text" name="kategori" class="form-control" value="<?php echo $hasil_data['kategori'];?>"></td>
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
	</tr>
</table>
</form>