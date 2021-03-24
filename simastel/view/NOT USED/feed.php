<?php
@$jenis=$_GET['k'];
?>
<h2><?=$jenis?></h2>
<a href="<?=$url?>">Home</a> / <?=$feed?>
<ul>
	<?php 
	$batas = 8;
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
	$up=mysql_query("select * from artikel where jenis_artikel='feed' order by waktu_artikel desc limit $posisi,$batas");
	echo mysql_error();
	while($up1=mysql_fetch_object($up))
	{
		echo "<li><a href='$url?post=$up1->id_artikel'>$up1->judul_artikel</a> </li>";
	}			
	?>
</ul>
<div id="paging">
<?php
   $q2=mysql_num_rows(mysql_query("select * from artikel where jenis_artikel='feed' "));
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<span id='aktif'><b>$i</b></span>";
            }
            else
            {
                echo "<span id='biasa'><a href='$url?m=feed&page=$i'>$i</a></span>";
            }
        }
?>
</div>