<h2>LIST BUKU</h2>
<form action="<?=$url?>/list-buku" method="post">
    <fieldset >
        <input type="text" value="<?=@$_POST['cari'];?>" name="cari" style="width: 100%;margin-bottom: 5px; height: 30px;padding:5px " placeholder="Cari berdasarkan judul buku. . . ." class="input-text" />
        </fieldset>
    </form>
<?php
$batas = 6;
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
    $tambahan=" where buku_judul like '%$cari%'";
    echo "Hasil Pencarian <b>$cari</b>";
    }
    else
    {
    $tambahan="";
    $cari="";
    }
    ?>

<?php
$sql=mysql_query("select * from buku natural join kategori $tambahan order by buku_kode desc limit $posisi,$batas");
if(mysql_num_rows($sql)==0)
{
	echo"<strong>Tidak ada Buku . . . . <a href='$url/list-buku'>Kembali</a></strong>";
}
else
{
while($r=  mysql_fetch_object($sql))
{
	

    ?>

<div class="column main">
    <div class="blog-post">
        <div class="photo"><img src="images/buku/<?=$r->foto_buku?>" alt="<?=$r->buku_kode?>" width="140"height="95" /></div>
    <div class="content">
        <h3><a href="<?=$url;?>/buku/baca/<?=$r->buku_kode?>"><?=  substr($r->buku_judul,0,50)?></a></h3>
        <span class="category">Kategori : <?=$r->kategori_nama?></span>
        <span class="category">Jumlah Buku   : <?=$r->buku_jumlah?></span>
        <p class="read-more"><a href="<?=$url;?>/buku/baca/<?=$r->buku_kode?>">Selengkapnya</a></p>
    </div>
</div>
<!-- //.blog-post -->
</div>
<!-- //.column -->

        
<?php
}
}?>
<div id="paging">
<?php
   $q2=mysql_num_rows(mysql_query("select * from buku"));
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<span id='aktif'><b>$i</b></span>";
            }
            else
            {
                echo "<span id='biasa'><a href='$url/list-buku-$i'>$i</a></span>";
            }
        }
?>
</div>