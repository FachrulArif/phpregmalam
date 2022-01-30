<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from satuan");

?>
</br>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index.php" class="btn btn-danger">Menu</a>
<a href="input_satuan.php" class="btn btn-danger">Tambah Satuan</a>
<table class="table table-bordered" border="1">
		<tr>
			<td>Id satuan</td>
	        <td>Nama</td>
	        <td colspan="3">Action</td>
	    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $tampil ['id_satuan'];?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><a href="edit_satuan.php?id_satuan=<?php echo $tampil['id_satuan'];?>">Edit</a></td>
		<td><a href="hapus_satuan.php?id_satuan=<?php echo $tampil['id_satuan'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>}