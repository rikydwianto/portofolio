<h2>ARTIKEL</h2>
<form action="<?=$url?>/blog" method="post">
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
    $tambahan=" where judul like '%$cari%'";
    echo "Hasil Pencarian <b>$cari</b><br/>";
    }
    else
    {
    $tambahan="";
    $cari="";
    }
    ?>

<?php
$sql=mysql_query("select * from artikel natural join kategori_artikel $tambahan order by id_artikel desc limit $posisi,$batas");

while($r=  mysql_fetch_object($sql))
{
    ?>

<div class="column main">
    <div class="blog-post">
        <div class="photo"><img src="images/artikel/<?=$r->tumbnail?>" alt="<?=$r->tumbnail?>" width="140"height="95" /></div>
    <div class="content">
        <h3><a href="<?=$url;?>/artikel/baca/<?=$r->id_artikel?>"><?=  substr($r->judul,0,50)?></a></h3>
        <span class="category">Kategori : <?=$r->nama_kategori?></span>
        <span class="category">Dibaca   : <?=$r->dibaca?>X</span>
        <p class="read-more"><a href="<?=$url;?>/artikel/baca/<?=$r->id_artikel?>">Selengkapnya</a></p>
    </div>
</div>
<!-- //.blog-post -->
</div>
<!-- //.column -->

        
<?php
}
?>
<div id="paging">
<?php
   $q2=mysql_num_rows($sql);
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<span id='aktif'><b>$i</b></span>";
            }
            else
            {
                echo "<span id='biasa'><a href='$url/blog-$i'>$i</a></span>";
            }
        }
?>
</div>
<div class="column sidebar">
<?php // include"page/sidebar.php";?>
</div>