<h2>TAMBAH PETUGAS</h2>
    
<p>
    <?php
    $next=mysql_query("select max(petugas_kode) as akhir from petugas");
    $next=  mysql_fetch_object($next);
    $next=  (int)substr($next->akhir, 4)+1;
    $next="PTG".sprintf("%04s",$next);
    ?>
    <table border="0"id="tbl">
        <form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
        <tr>
            <td colspan="3">Tambah Petugas</td>
        </tr>
        <tr>
            <td>Kode </td>
            <td>:</td>
            <td><?=form("text","kode","",$next)?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=form("text","nama","","")?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?=form("text","alamat","","")?></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td>:</td>
            <td><?=form("number","hp","","")?></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td><input type=file name='file'></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?=form("text","username","","")?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?=form("password","pass","","")?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?=form("submit","petugas-tambah","","TAMBAH")?></td>
        </tr>
        </form>
    </table>
    
</p>
