<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Pesan Masuk
		</div>
<div class="box">
					<!-- Box Head -->	
					
					
					
					
<?php 
	$batas = 10;
	$no=1;
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
	$up=mysql_query("select * from email_masuk order by no_email desc limit $posisi,$batas"); ?>
	
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Pesan masuk</h2>
					</div>
					<!-- End Box Head -->	
					<?php
					if(isset($_GET['no']))
					{	
						include"view/balas.php";
					}
					?>
					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>No</th>
								<th>Email</th>
								<th>Pesan</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							
							<?php echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{									
									?>
									<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><?=$no++?></td>
								<td><?=$up1->email?></td>
								<td><?=$up1->email_masuk?></td>
								<td>
								<a href="<?="$url1?m=inbox&no=$up1->no_email"?>" class="ico dels">Balas</a></td>
							</tr>
									<?php
								}			
								?>
							
							
	
							
						</table>
						
						
						<!-- Pagging -->
						<?php
					   $q2=mysql_num_rows(mysql_query("select * from email_masuk "));
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
									echo "<a href='$url1?m=inbox&page=$i'>$i</a>";
								}
							}
							?>
								
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
					
					
				</div>
				