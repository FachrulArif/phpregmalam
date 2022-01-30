<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");

?>
</br>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="input_kategori.php" class="btn btn-danger">Tambah Kategori</a>
<table class="table table-bordered" border="0">
		<tr>
			<td>Id Kategori</td>
	        <td>Nama</td>
	        <td colspan="2">Action</td>
	    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $tampil ['id_kategori'];?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><a href="edit_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>">Edit</a></td>
		<td><a href="hapus_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>