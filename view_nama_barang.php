<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from jenis_barang");

?>
</br>
<a href="barang.php" class="btn btn-danger">Tambah Barang</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Nama Barang</td>
        <td colspan="3">action</td>
    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil ['nama_barang'];?></td>
        <td><a href="edit_barang.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Edit</a></td>
		<td><a href="hapus_barang.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Hapus</a></td>
    </tr>
<?php }?>
</tale>
