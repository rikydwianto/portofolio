<?php 
	$batas = 15;
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
	$up=mysql_query("select * from komentar,artikel where artikel.id_artikel=komentar.id order by id_komen desc limit $posisi,$batas"); ?>
	
<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Komentar
		</div>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Komentar</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Komentar</th>
								<th>Date</th>
								<th >Content Control</th>
							</tr>
							
							<?php echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{									
									?>
									<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="<?="$url?post=$up1->id_artikel"?>#komentar" target=_blank><?=$up1->nama?> : <?=strip_tags($up1->komentar)?></a></h3></td>
								<td><?=$up1->tanggal_komentar?> <?=$up1->waktu_komentar?> </td>

								<td>
								<a href="<?="$url1?hapus-komen=$up1->id_komen"?>" class="ico del">Delete</a>
							</tr>
									<?php
								}			
								?>
							
							
	
							
						</table>
						
						
						<!-- Pagging -->
						<?php
					   $q2=mysql_num_rows(mysql_query("select * from komentar"));
								$jml=ceil($q2/$batas);
					?>
						
						
						<div class="pagging">
							<div class="left"><?=mysql_num_rows($up)?> dari <?=$q2?></div>
							<div class="right">
							<?php
							for($i=1;$i<=$jml;$i++)
							{
								if($i==$page)
								{
									echo "<a href='#'><strong>$i</strong></a>";
								}
								else
								{
									echo "<a href='$url1?m=komentar&page=$i'>$i</a>";
								}
							}
							?>
								
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>