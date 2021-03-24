<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Email
		</div>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Broadcast Email</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 50 </span>
									<label>Subject<span>(Required Field)</span></label>
									<input type="text" required name='subject'class="field size1" />
								</p>
								
								<p>
									<span class="req"></span>
									<label>ISI<span>(Required Field)</span></label>
									<textarea  name='isi'class="field size1" rows="10" style="height:200px"></textarea>
								</p>
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" name='broadcast' class="button" value="BROADCAST" />
							<input type="reset" class="button" value="reset" />
						</div>
						<!-- End Form Buttons -->
					</form>
					
					
					
					
					
					
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
	$up=mysql_query("select * from email order by email asc limit $posisi,$batas"); ?>
	
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">List Email Subcribe</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>No</th>
								<th>Email</th>
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
								<td>
								<a href="<?="$url1?m=kirim-email&no_email=$up1->no_email"?>" class="">Kirim Pesan</a>
								<a href="<?="$url1?unsub=$up1->no_email"?>" class="ico del">Unsubscribe</a></td>
							</tr>
									<?php
								}			
								?>
							
							
	
							
						</table>
						
						
						<!-- Pagging -->
						<?php
					   $q2=mysql_num_rows(mysql_query("select * from email order by email asc"));
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
									echo "<a href='$url1?m=email&page=$i'>$i</a>";
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
				