<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from anggota");

?>

<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>No_Tlp</td>
    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><?php echo $tampil ['alamat'];?></td>
        <td><?php echo $tampil ['no_tlp'];?></td>
    </tr>
<?php }?>
</tale>

