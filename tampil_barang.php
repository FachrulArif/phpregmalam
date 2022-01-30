<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from barang");

?>
</br>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="input_barang.php" class="btn btn-danger">Tambah barang</a>
<a href="index.php" class="btn btn-danger">Menu</a>
<table class="table table-bordered" border="1">
		<tr>
			<td>Id barang</td>
	        <td>Nama</td>
	        <td>Kategori</td>
	        <td>Satuan</td>
	        <td colspan="4">Action</td>
	    </tr>

<?php
$join           = "select * from post join user on barang.id_barang = post.id_barang join kategori on kategori.idkategori = post.kategori";
$select         = mysqli_query($koneksi, $join);
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $tampil ['id_barang'];?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><?php echo $tampil ['kategori_id'];?></td>
        <td><?php echo $tampil ['satuan_id'];?></td>
        <td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Edit</a></td>
		<td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>