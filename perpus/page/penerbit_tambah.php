<h2>Penerbit Tambah</h2>
<form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
    <?php
    $sql=  mysql_fetch_array(mysql_query("select max(penerbit_kode) as akhir from penerbit"));
    if($sql['akhir']=="NULL")
    {
        $kode="PN0001";
    }
    else
    {
        $pecah= (int) substr($sql['akhir'],2)+1;
        $kode="PN".sprintf("%04s",$pecah);
    }
    
    ?>
    <table border="1" id="tbl">
        <tr >
            <td colspan="2">FORM TAMBAH PENERBIT</td>
        </tr>
        <tr>
            <td>Kode Penerbit</td>
            <td><input type="text" name="kode" value="<?=$kode?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td><input type="number" name="telp" ></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="penerbit-tambah" value="TAMBAH" >
                <input type="reset" value="RESET" >
            </td>
        </tr>
    </table>
</form>