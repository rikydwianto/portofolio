<div class="line">
				<h2>Gallery</h2>
				<div id="owl-demo2" class="owl-carousel margin-bottom">
				<?php 
				$upa=mysql_query("select * from galery order by id_galery desc limit 0,15");
				while($up1=mysql_fetch_object($upa))
				{
				?>
				   <div class="item" ><center><a href='<?=$url?>images/images/<?=$up1->nama_gambar_galery?>'><img style='height:210px;width:100%' id='redup'  class="lazyOwl" data-src="<?=$url?>images/.thumbs/images/<?=$up1->nama_gambar_galery?>" alt="<?=$up1->nama_gambar_galery?>" title='<?=$up1->keterangan_galery?>'></a></center></div>
				<?php } ?>
				</div>
			 </div> 