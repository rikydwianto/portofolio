<?php
$kode=$_GET['kategori'];
$cek=  mysql_fetch_array(mysql_query("select * from kategori where kategori_kode='$kode'"));
?>
<table id="tbl">
    <form action="<?=$url?>/modul/crud.php" method="post">
        <tr>
            <td colspan="2">Edit Kategori</td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><input type="text" name="kode" value="<?=$cek['kategori_kode'];?>" readonly=""></td>
        </tr>
        <tr>
            <td>Nama Kategori</td>
            <td><input type="text" name="nama" value="<?=$cek['kategori_nama'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="kategori-edit" value="Edit"></td>
        </tr>
    </form>
</table>