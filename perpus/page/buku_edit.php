<?php

    $kode=$_GET['buku_kode'];
$r=  mysql_fetch_array(mysql_query("select * from buku,kategori,penerbit where buku.kategori_kode=kategori.kategori_kode and penerbit.penerbit_kode=buku.penerbit_kode and buku.buku_kode='$kode'"));
?>
<h2>EDIT BUKU</h2>
<table id="tbl">
    <a href="<?=$url?>/tambah/buku" id="btn" style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" style="float:left; " width="20px"></a>
    <form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
        <tr>
            <td colspan="2"><?=$r['buku_judul'];?></td>
        </tr>
        <tr>
            <td>Buku Kode</td>
            <td><input type="text" name="kode" value="<?=$kode?>" readonly=""></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="kategori" required="">
                    <option value="">Pilih Kategori</option>
                    <option value="<?=$r['kategori_kode'];?>" selected=""><?=$r['kategori_nama'];?></option>
                    
                    <?php
                    $q=mysql_query("select * from kategori where kategori_kode!='$r[kategori_kode]' ");
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
                    <option value="" >Penerbit</option>
                    <option value="<?=$r['penerbit_kode'];?>" selected=""><?=$r['penerbit_nama'];?></option>
                    <?php
                    $q1=mysql_query("select * from penerbit where penerbit_kode!='$r[penerbit_kode]'");
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
            <td><input type="text" name="judul" value="<?=$r['buku_judul'];?>"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="jumlah" value="<?=$r['buku_jumlah'];?>"></td>
        </tr>
        <tr>
            <td valign="top">Deskripsi</td>
            <td><textarea name="deskripsi" style="width: 515px; height: 222px;"><?=$r['buku_diskripsi'];?></textarea></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?=$r['buku_pengarang'];?>"></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" name="tahun" value="<?=$r['buku_thn_terbit'];?>"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <img src="<?=$url?>/images/buku/<?=$r['foto_buku']?>" width="100" height="100"/>
                <input type="file" name="photo" >
                <input type="hidden" name="old" value="<?=$r['foto_buku'];?>" >
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="buku-edit" value="SIMPAN">
                <input type="reset"  value="DEFAULT">
            </td>
        </tr>
    </form>
</table>