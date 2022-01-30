<?php
include ("koneksi.php");
if(isset($_POST['save'])) {
$query_edit=mysqli_query($koneksi,"UPDATE barang set
	id_barang='".$_POST['id_barang']."',
	nama='".$_POST['nama']."'
	kategori_id='".$_POST['kategori_id']."'
	satuan_id='".$_POST['satuan_id']."'
	WHERE id_barang='".$_POST['id_barang']."'");
	if ($query_edit) {
		header("location:tampil_barang.php");
	}else{
		echo mysqli_error();

}
}
$tampil=mysqli_query($koneksi,"SELECT * from barang WHERE id_barang='".$_GET['id_barang']."'");
$hasil_data=mysqli_fetch_array($tampil);

?>
<form method="POST">
<table class="table table-bordered" border="1">
	<input type="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
	<td>Id Barang</td>
		<td><input type="text" name="id_barang" class="form-control" value="<?php echo $hasil_data['id_barang'];?>"></td>
	<tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
	<tr>
	<tr>
		<td>Kategori</td>
		<td><input type="text" name="kategori_id" class="form-control" value="<?php echo $hasil_data['kategori_id'];?>"></td>
	<tr>
	<tr>
		<td>Satuan</td>
		<td><input type="text" name="satuan_id" class="form-control" value="<?php echo $hasil_data['satuan_id'];?>"></td>
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
	</tr>
</table>
</form>