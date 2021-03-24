<div style='margin-top:-10.5px'>
<h2>Galery</h2>
<hr/>
</div>
<?php 
$batas = 9;

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
$upa=mysql_query("select * from galery order by id_galery desc limit $posisi,$batas");
while($up1=mysql_fetch_object($upa))
{ ?>
<div class="s-12 m-4 l-4 margin-bottom"  >
	<div class="box"  >
		<p style='color:white' >
			<a href='<?=$url?>images/images/<?=$up1->nama_gambar_galery?>'><img alt='<?=$up1->nama_gambar_galery?>' title='<?=$up1->keterangan_galery?>'src="<?=$url?>images/.thumbs/images/<?=$up1->nama_gambar_galery?>" style='width:200px;height:150px' />
			</a>
			
		</p>
	</div>
				<?=$up1->keterangan_galery?> 
</div>
<?php } ?>



<p class='line'>
<div >
<div class="pagination">
<ul>
<?php
   $q2=mysql_num_rows(mysql_query("select * from galery "));
            $jml=ceil($q2/$batas);
			for($i=1;$i<=$jml;$i++)
        {
            if($i==$page)
            {
                echo "<li><a href='#' class='currentpage'>$i</a></li>";
            }
            else
            {
                echo "<li><a href='$url?m=galery&page=$i'>$i</a></li>";
            }
        }
?>
</ul>
</div>
</div>
