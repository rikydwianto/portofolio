<?php $q=$_GET['q']?>
<?php 
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
	$up=mysql_query("select * from artikel where judul_artikel like '%$q%' order by waktu_artikel desc limit $posisi,$batas"); ?>
	
<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Cari / <?=$q?>
		</div>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Pecarian : <?=$q?></h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Judul</th>
								<th>Jenis Post</th>
								<th>Added by</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							
							<?php echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{									
									?>
									<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="<?="$url1?post=$up1->id_artikel"?>" target=_blank><?=$up1->judul_artikel?></a></h3></td>
								<td><a href='<?=$url1?>?k=<?=$up1->jenis_artikel?>'><?=$up1->jenis_artikel?></a></td>
								<td><?=$up1->username?></td>
								<td>
								<a href="<?="$url1?edit=$up1->id_artikel"?>" class="ico edit">Edit</a></td>
							</tr>
									<?php
								}			
								?>
							
							
	
							
						</table>
						
						
						<!-- Pagging -->
						<?php
					   $q2=mysql_num_rows(mysql_query("select * from artikel where judul_artikel like '%$q%'  order by waktu_artikel desc"));
								$jml=ceil($q2/$batas);
					?>
						
						
						<div class="pagging">
							<div class="left">Hasil pencarian : <?=$q2?></div>
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
									echo "<a href='$url1?q=$q&page=$i'>$i</a>";
								}
							}
							?>
								
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>