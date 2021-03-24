<?php
$q=mysql_query("select * from artikel natural join kategori_artikel order by id_artikel desc limit 0,5");
$q5=mysql_query("select * from artikel natural join kategori_artikel order by dibaca desc limit 0,5");
$q1=mysql_query("select * from buku order by buku_kode desc limit 0,5");
echo mysql_error();
?>
<div class="column sidebar">
<h3></h3>
    <ul>
        
<!--        <li><img src="<?=$url;?>/images/logo-ab.png" style="width: 100%;height: 50%" /></li>
-->    </ul>
<?php
if(isset($_SESSION['kode']) && isset($_SESSION['user']) && $_SESSION['level']=="user")
{
    $q3=mysql_query("select * from peminjam where peminjam_kode='$_SESSION[kode]'");
    $u=  mysql_fetch_object($q3);
    ?>
<h3>PROFILE</h3>
    <ul>
        
        <li>
            <p>
                <table border="0">
                    <tr>
                        <td colspan="3" ><img src="<?=$url?>/images/photo/<?=$u->peminjam_foto?>" style="width: 50%; margin: auto"/></td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td>:</td>
                        <td><?=$u->peminjam_kode?></td>
                    </tr>
                    <tr>
                        <td>Username </td>
                        <td>:</td>
                        <td><?=$u->username?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$u->peminjam_nama?></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><?=$u->peminjam_telp?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$u->peminjam_alamat?></td>
                    </tr>                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Peminjam</td>
                    </tr>
                </table>
            </p>
            
        </li>
    </ul>
    <?php
}
else if(isset($_SESSION['kode']) && isset($_SESSION['user']) && $_SESSION['level']=="petugas")
{
    $q3=mysql_query("select * from petugas where petugas_kode='$_SESSION[kode]'");
    $u=  mysql_fetch_object($q3);
	echo mysql_error();
    ?>
<h3>PROFILE</h3>
    <ul>
        
        <li>
            <p>
                <table border="0">
                    <tr>
                        <td colspan="3" ><img src="<?=$url?>/images/photo/<?=$u->petugas_foto?>" style="width: 50%; margin: auto"/></td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td>:</td>
                        <td><?=$u->petugas_kode?></td>
                    </tr>
                    <tr>
                        <td>Username </td>
                        <td>:</td>
                        <td><?=$u->username?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$u->petugas_nama?></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><?=$u->petugas_telp?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$u->petugas_alamat?></td>
                    </tr>                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Petugas</td>
                    </tr>
                </table>
            </p>
            
        </li>
    </ul>
    <?php
}
else if(isset($_SESSION['user']) && $_SESSION['level']=="admin")
{
    ?>
<h3>PROFILE</h3>
    <ul>
        
        <li>
            <p>
                <table border="0">
                    <tr>
                        <td>USERNAME</td>
                        <td>:</td>
                        <td><?=strtoupper($_SESSION['user']);?></td>
                    </tr>
                    <tr>
                        <td>LEVEL</td>
                        <td>:</td>
                        <td><?=strtoupper($_SESSION['level']);?></td>
                    </tr>
                </table>
            </p>
            
        </li>
    </ul>
    <?php
}
?>




<h3>ARTIKEL TERBARU</h3>
    <ul>
        <?php
        while($sb=  mysql_fetch_object($q))
        {
            ?>
            <li><a href="<?=$url;?>/artikel/baca/<?=$sb->id_artikel?>"><?=substr($sb->judul,0,50);?></a></li>
            <?php
        }
        ?>
    </ul>
	 <h3>ARTIKEL TERPOPULER</h3>
    <ul>
        <?php
        while($sd=  mysql_fetch_object($q5))
        {
            ?>
            <li><a href="<?=$url;?>/artikel/baca/<?=$sd->id_artikel?>"><?=substr($sd->judul,0,50);?></a></li>
            <?php
        }
		echo mysql_error();
        ?>
    </ul>   

<h3>BUKU TERBARU</h3>
    <ul>
        <?php
		
        while($sb1=  mysql_fetch_object($q1))
        {
            ?>
            <li><a href="<?=$url;?>/buku/baca/<?=$sb1->buku_kode?>"><?=substr($sb1->buku_judul,0,50);?>(<?=$sb1->buku_jumlah?>)</a></li>
            <?php
        }
        ?>
    </ul>
</div>