<?php
include ("koneksi.php");
if(isset($_POST['save'])) {
$query_edit=mysqli_query($koneksi,"UPDATE satuan set
	id_satuan='".$_POST['id_satuan']."',
	nama='".$_POST['nama']."',
	WHERE id_satuan='".$_POST['id_satuan']."'");
	if ($query_edit) {
		header("location:tampil_barang.php");
	}else{
		echo mysqli_error();

}
}
$tampil=mysqli_query($koneksi,"SELECT * from barang WHERE id_satuan='".$_GET['id_satuan']."'");
$hasil_data=mysqli_fetch_array($tampil);

?>
<form method="POST">
<table class="table table-bordered" border="1">
	<input type="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
	<td>Id Satuan</td>
		<td><input type="text" name="id_satuan" class="form-control" value="<?php echo $hasil_data['id_satuan'];?>"></td>
	<tr>
	<tr>
		<td>Nama Satuan</td>
		<td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
	<tr>
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
	</tr>
</table>
</form>