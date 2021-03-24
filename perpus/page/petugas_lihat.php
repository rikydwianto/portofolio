<div id="title">
    <h2>DATA PETUGAS</h2>
    
</div>
<?php
    if(isset($_POST['cari']))
    {
    $cari=$_POST['cari'];
    $tambahan=" where petugas.petugas_nama like '%$cari%'";
    }
    else
    {
    $tambahan="";
    $cari="";
    }
?>
<form method="post">
    <a href='<?=$url?>/tambah/petugas'id=btn style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" width="20px" style="float:left; "/> Tambah</a>
	Cari : <input type='text' name='cari' onchange='submit()' value="<?=@$cari;?>">
    

<table border="1" id="tbl">
        <tr>
            <td>No.</td>
            <td>Kode</td>
            <td>Username</td>
            <td>Nama</td>
            <td>No Hp</td>
            <td>Alamat</td>
            <td>Foto</td>
            <td>#</td>
        </tr>
        
        <?php
        $no=1;
        $sql=mysql_query("select * from petugas $tambahan order by petugas_kode asc");
        while($r=  mysql_fetch_object($sql))
        {
            ?>
            <tr>
            <td><?=$no?></td>
            <td><?=$r->petugas_kode?></td>
            <td><?=$r->username?></td>
            <td><?=$r->petugas_nama?></td>
            <td><?=$r->petugas_telp?></td>
            <td><?=$r->petugas_alamat?></td>
            <td><img src="<?=$url?>/images/photo/<?=$r->petugas_foto?>" width="50" height="50" /></td>
            <td>
                <a href="edit/petugas/<?=$r->petugas_kode?>"><img src="<?=$url?>/images/icons/pencil32.png" title="EDIT"width="20px"/></a>
                <a href="hapus/petugas/<?=$r->petugas_kode?>"><img src="<?=$url?>/images/icons/stop32.png" title="HAPUS"width="20px"/></a>
            </td>
        </tr>
            <?php
            $no++;
        }
        ?>
    </table>
</form>