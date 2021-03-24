<h2>Penerbit Edit</h2>
<form action="<?=$url?>/modul/crud.php" method="post">
    <?php
    
    @$kode=$_GET['penerbit_kode'];
    $sql=  mysql_fetch_array(mysql_query("select * from penerbit where penerbit_kode='$kode'"));
    
    ?>
    <table border="1" id="tbl">
        <tr>
            <td colspan="2">Penerbit : <?=$sql['penerbit_nama'];?></td>
        </tr>
        <tr>
            <td>Kode Penerbit</td>
            <td><input type="text" name="kode" value="<?=$kode?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?=$sql['penerbit_nama'];?>" ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"><?=$sql['penerbit_alamat'];?></textarea></td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td><input type="number" name="telp" value="<?=$sql['penerbit_telp'];?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="penerbit-edit" value="EDIT" >
                <input type="reset" value="RESET" >
            </td>
        </tr>
    </table>
</form>