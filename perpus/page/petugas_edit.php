<div id="title">
    <h1>EDIT PETUGAS</h1>
    
</div>
<p>
    <?php
    $sql=mysql_query("select * from petugas where petugas_kode='$_GET[kode]'");
    $r=  mysql_fetch_object($sql);
    ?>
    <table border="0"id="tbl">
        <form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
        <tr>
            <td colspan="3">PETUGAS : <?=$r->petugas_nama;?></td>
        </tr>
        <tr>
            <td>Kode </td>
            <td>:</td>
            <td><?=form("text","kode","",$r->petugas_kode)?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=form("text","nama","",$r->petugas_nama)?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?=form("text","alamat","",$r->petugas_alamat)?></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td>:</td>
            <td><?=form("number","hp","",$r->petugas_telp)?></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
                <img src="<?=$url?>/images/photo/<?=$r->petugas_foto?>" width="100" height="100" /><br />
				<input type=file name='file'>
				<input type=hidden name='photo' value='<?=$r->petugas_foto?>'>
            
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?=form("text","username","",$r->username)?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?=form("submit","petugas-edit","","SIMPAN")?></td>
        </tr>
        </form>
    </table>
    
</p>
