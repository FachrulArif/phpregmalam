<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");

?>
</br>
<a href="kategori.php" class="btn btn-danger">Tambah kategori</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Kategori</td>
        <td colspan="3">action</td>
    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil ['kategori'];?></td>
        <td><a href="edit_kategori.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Edit</a></td>
		<td><a href="hapus_kategori.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Hapus</a></td>
    </tr>
<?php }?>
</tale>
