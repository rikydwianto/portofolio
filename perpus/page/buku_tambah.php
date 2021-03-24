<?php
$sql=  mysql_fetch_array(mysql_query("select max(buku_kode) as akhir from buku"));
if($sql['akhir']=="NULL")
{
    $kode="BK000001";
}
else
{
    $pecah= (int) substr($sql['akhir'],3)+1;
    $kode="BK".sprintf("%06s",$pecah);
}
?>
<h2>Buku Tambah</h2>
<table width="45%" border="1" id="tbl"style="width:90%">
    <a href="<?=$url?>/tambah/buku" id="btn" style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" style="float:left; " width="20px"></a>
    <form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
        <tr>
            <td colspan="2">Tambah Buku</td>
        </tr>
        <tr>
            <td>Buku Kode</td>
            <td><input type="text" name="kode" value="<?=$kode?>" readonly=""></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="kategori" required="">
                    <option value="" selected="">Pilih Kategori</option>
                    <?php
                    $q=mysql_query("select * from kategori");
                    while($row=  mysql_fetch_array($q))
                    {
                    ?>
                    <option value="<?=$row['kategori_kode']?>"><?=$row['kategori_nama']?></option>
                    
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><select name="penerbit" required="">
                    <option value="" selected="">Penerbit</option>
                    <?php
                    $q1=mysql_query("select * from penerbit");
                    while($row1=  mysql_fetch_array($q1))
                    {
                    ?>
                    <option value="<?=$row1['penerbit_kode']?>"><?=$row1['penerbit_nama']?></option>
                    
                    <?php
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Judul </td>
            <td><input type="text" name="judul" required></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="jumlah" required></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><textarea name="deskripsi" cols="30" rows="10px"  style="width: 515px; height: 222px;" required></textarea></td>
        </tr>
        <tr>
            <td valign="top">Pengarang</td>
            <td><input type="text" name="pengarang" required></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" name="tahun" required></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="buku-tambah" value="SIMPAN">
                <input type="reset"  value="RESET">
            </td>
        </tr>
    </form>
</table>