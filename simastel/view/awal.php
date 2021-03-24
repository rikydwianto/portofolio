<div style='margin-top:-10.5px'>
<h2>Populer Post</h2>
<hr/>
</div>
					 <?php 
							$up=mysql_query("select * from artikel where jenis_artikel='artikel' order by artikel_dilihat desc limit 0,4 ");
							echo mysql_error();
							$no=3;
							while($up1=mysql_fetch_object($up))
							{
							$action= preg_replace("/[^a-zA-Z0-9]/", "_", $up1->judul_artikel);
							$rep=$action;
								?>
								<div class="s-12 m-12 l-12 " style='margin:0px'>
								  <div class="box" style='background:<?=$warna[$no--]?>;margin-bottom:5px' >
									<div style="background:#ff010"><h4 ><a href='<?=$url?><?=$up1->id_artikel?>.<?=$rep?>.htm' style='color:white;'><?=$up1->judul_artikel?></a> </h4></div>
									 <p style='color:white'>
									 <img style='float:left;padding-right:7px;padding-bottom:0px; height:100px;width:150px'src="<?=get_first_image_url($up1->isi_artikel, 'images/.thumbs/images/none.jpg'); ?>"/>
									 <?=substr(strip_tags($up1->isi_artikel,'<a>'),0,250)?> ... <a href='<?=$url?><?=$up1->id_artikel?>.<?=$rep?>.htm'>Selengkapnya</a>
									 </p>
								  </div>
								 </div>
								<?php
							}			
							?>