

<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Galerry
		</div>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Galerry</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					 <form method="POST" name="form_img" action="model/crud.php" enctype='multipart/form-data'>
						<table>
						<tr>
								<td>Add image</td>
								<td>:</td>
								<td><input type='file' required name='F1'><br/><i> *)Pilih Gambar yang akan dimasukan ke Galerry</i></td>
							</tr>
						<tr>
								<td>Caption</td>
								<td>:</td>
								<td><input type=text required name='caption' size='50'></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<th><input type='submit' name='save' value='Save to Galerry'></th>
							</tr>
						</table>
						</form>
					<!-- Table -->
					
				</div>
				
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
	$up=mysql_query("select * from galery order by id_galery asc limit $posisi,$batas"); ?>
	
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">List Gambar Galerry</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>No</th>
								<th>Keterangan</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							
							<?php echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{									
									?>
									<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><?=$no++?></td>
								<td><a href='<?=$url?>images/images/<?=$up1->nama_gambar_galery?>'><?=$up1->keterangan_galery?></a></td>
								<td>
								<a href="<?="$url1?hapus_gambar=$up1->id_galery"?>" class="ico del">Hapus</a></td>
							</tr>
									<?php
								}			
								?>
							
							
	
							
						</table>
						
						
						<!-- Pagging -->
						<?php
					   $q2=mysql_num_rows(mysql_query("select * from galery order by email asc"));
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
									echo "<a href='$url1?m=galery&page=$i'>$i</a>";
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