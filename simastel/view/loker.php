<div style='margin-top:-10.5px'>
<h2>INFO LOWONGAN KERJA</h2>

</div>
<?php 
	$batas = 5;
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
	$up=mysql_query("select * from artikel where jenis_artikel='loker' order by id_artikel desc limit $posisi,$batas");
	echo mysql_error();
	$no=7;
	while($up1=mysql_fetch_object($up))
	{
	$action= preg_replace("/[^a-zA-Z0-9]/", "_", $up1->judul_artikel);
	$rep=$action;
	?>
	<div class="s-12 m-12 l-12 " style='margin:0px;float:none'>
		<div class="box" style='background:<?=$warna[$no--]?>;margin-bottom:5px' >
		<div style="background:#ff010"><h4 ><a href='<?=$url?><?=$up1->id_artikel?>.<?=$rep?>.htm' style='color:white;'><?=$up1->judul_artikel?></a> </h4></div>
			<?=$up1->waktu_artikel?> oleh <?=$up1->username?> kategori <?=$up1->jenis_artikel?>
			<p style='color:white'>
				<img style='float:left;padding-right:7px;padding-bottom:0px; height:100px;width:150px 'src="<?=get_first_image_url($up1->isi_artikel, 'images/.thumbs/images/none.jpg'); ?>"/>
				<?=substr(strip_tags($up1->isi_artikel,'<a>'),0,250)?> ... <a href='<?=$url?><?=$up1->id_artikel?>.<?=$rep?>.htm'>Selengkapnya</a>
			</p>
		</div>
	</div>
	<?php
	}			
?>
<p class='line'>
<div >
<div class="pagination">
<ul>

<?php
   $q2=mysql_num_rows(mysql_query("select * from artikel where jenis_artikel='loker' order by id_artikel desc limit $posisi,$batas "));
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<li><a href='#' class='currentpage'>$i</a></li>";
            }
            else
            {
                echo "<li><a href='$url?k=artikel&page=$i'>$i</a></li>";
            }
        }
?>
</ul>
</div>
</div>