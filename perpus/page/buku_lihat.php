<h2>List Buku</h2>
<form action="" method="post">
    
    <?php
    if(isset($_POST['hapus-banyak']))
    {
        @$id=$_POST['hapus'];
        $h=count($id);
        if($h==0)
        {
            echo"<script>alert('Tidak ada yang dipilih ka ');</script>";
            
        }
        for($i=0;$i<$h;$i++)
        {
            mysql_query("delete from buku where buku_kode='$id[$i]'");
            echo mysql_error();
        }
    }
    ?>
    
    <?php
	$batas = 12;
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
            $posisi=($page-1)*$batas;
        }
        else
        {
            $page=1;
            $posisi=0;
        }

    if(isset($_POST['cari']))
    {
    $cari=$_POST['cari'];
    $tambahan=" and buku.buku_judul like '%$cari%' ";
	echo "Hasil Pencarian <b>$cari</b>";
    }
    else
    {
    $tambahan="";
    $cari="";
    }
    ?><br />

    <a href='<?=$url?>/tambah/buku'id=btn style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" width="20px" style="float:left; "/></a>
	Cari : <input type='text' name='cari' onchange='submit()' value="<?=$cari;?>">
<table border="1" id="tbl">
    
    <tr>
        <td>No.</td>
        <td>Kode</td>
        <td>Judul</td>
        <td>Deskripsi</td>
        <td>Jumlah</td>
        <td>Aksi</td>
    </tr>
    <?php
    $no=1;
    $q=mysql_query("select * from buku,kategori,penerbit where buku.kategori_kode=kategori.kategori_kode and penerbit.penerbit_kode=buku.penerbit_kode $tambahan order by buku.buku_kode desc  limit $posisi,$batas");
	if(mysql_num_rows($q)==0)
{
	echo"<br /><strong>Tidak ada Buku . . . . <a href='$url/list-buku'>Kembali</a></strong>";
}

else
{
    
    while($row=mysql_fetch_array($q))
    {
        ?>
        
        <tr>
        <td><?=$no;?>. <input type="checkbox" name="hapus[]" value="<?=$row['buku_kode'];?>"></td>
        <td><a href="<?=$url?>/buku/baca/<?=$row['buku_kode'];?>"><?=$row['buku_kode'];?></a></td>
        <td><?=$row['buku_judul'];?></td>
        <td><?=substr($row['buku_diskripsi'],0,50);?> . . .  </td>
        <td colspan="1"><?=$row['buku_jumlah'];?></td>

        <td width="50px">
            <a href="buku/baca/<?=$row['buku_kode'];?>" target="_blank"><img src="<?=$url?>/images/icons/search32.png"  style="float:left" width="15px" title="LIHAT DETAIL"/></a>
            <a href="edit/buku/<?=$row['buku_kode'];?>"><img src="<?=$url?>/images/icons/pencil32.png" width="15px" style="float:left" title="EDIT"/></a>
            <a href="hapus/buku/<?=$row['buku_kode'];?>"><img src="<?=$url?>/images/icons/stop32.png" width="15px" title="HAPUS"/></a>
        </td>
    <tr>
        <?php
        $no++;
    }
}
    ?>
    <tr><td colspan="5"></td><td><input type="submit" name="hapus-banyak" value="Hapus Multi"></td></tr>
    
    <tr><td colspan="7">    
    <div id="paging">
<?php
   $q2=mysql_num_rows($q);
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<span id='aktif'><b>$i</b></span>";
            }
            else
            {
                echo "<span id='biasa'><a href='$url/buku-$i'>$i</a></span>";
            }
        }

?>
</td></tr>
</div>
</table>
    
</form>