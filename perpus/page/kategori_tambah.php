<?php
$k=mysql_fetch_array(mysql_query("select max(kategori_kode) as akhir from kategori"));
$kk=$k['akhir'];
$kk=(int)substr($kk,4)+1;
$kk="KTG".sprintf("%03s",$kk);
?>
<table id="tbl">
    <form action="<?=$url?>/modul/crud.php" method="post">
        <tr>
            <td colspan="2">Tambah Kategori</td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><input type="text" name="kode" value="<?=$kk?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Kategori</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><input type="submit" name="kategori-tambah" value="Tambah"></td>
        </tr>
    </form>
</table>