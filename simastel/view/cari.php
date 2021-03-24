<?php
@$cari=mysql_real_escape_string($_GET['q']);
$batas = 10;
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
$up3=mysql_query("select * from artikel where isi_artikel like '%".$cari."%'  or judul_artikel like '%".$cari."%' order by waktu_artikel desc ");
?>
<h1>Cari</h1>
<a href="<?=$url?>">Home</a> / Cari / <?=@$cari?> <hr/>
<?php
if(mysql_num_rows($up3)==0)
{
	echo"<h4>Tidak ditemukan hasil pencarian : $cari</h4>";
}
else
{
?>
<ul>
Hasil Pencarian <strong><?=@$cari?></strong> ditemukan <strong><?=mysql_num_rows($up3)?></strong> 
	<?php 
	$up=mysql_query("select * from artikel where isi_artikel like '%".$cari."%'  or judul_artikel like '%".$cari."%' order by waktu_artikel desc limit $posisi,$batas");
	echo mysql_error();
	while($up1=mysql_fetch_object($up))
	{
		?>
		<li><a href='<?=$url?>?post=<?=$up1->id_artikel?>'><?=$up1->judul_artikel?></a> <br/>
		<code>Jenis : <a href="<?=$url?>?k=<?=$up1->jenis_artikel?>"><?=$up1->jenis_artikel?></a></code>
		</li>
		<?php
	}			
	?>
</ul>
<?php } ?>
<div class="row text-center">
<div class="col-lg-12">
<ul class="pagination">
<?php
   $q2=mysql_num_rows($up3);
   echo mysql_error();
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<li class=active><a>$i</a></li>";
            }
            else
            {
                echo "<li><a href='$url?q=".$cari."&page=$i&cari=Cari'> $i </a></li>";
            }
        }
?>
</ul>
</div>
</div>

