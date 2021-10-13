<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");

?>

<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Kategori</td>
    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil ['kategori'];?></td>
    </tr>
<?php }?>
</tale>
