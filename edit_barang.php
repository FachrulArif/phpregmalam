<?php
include ("koneksi.php");
if(isset($_POST['save'])) {
$query_edit=mysqli_query($koneksi,"UPDATE jenis_barang set
	id_anggota='".$_POST['id_anggota']."',
	nama_barang='".$_POST['nama_barang']."'
	WHERE id_anggota ='".$_POST['id_anggota']."'");
if ($query_edit) {
	header("location:view_nama_barang.php");
}else{
	echo mysqli_error();
}
}

$tampil=mysqli_query($koneksi,"SELECT * from jenis_barang WHERE id_anggota='".$_GET['id_anggota']."'");
$hasil_data=mysqli_fetch_array($tampil);

?>
<form method="POST">
<table class="table table-bordered" border="1">
	<input type="hidden" name="id_anggota" value="<?php echo $hasil_data['id_anggota'];?>">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control" value="<?php echo $hasil_data['nama_barang'];?>"></td>
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
	</tr>
</table>
</form>