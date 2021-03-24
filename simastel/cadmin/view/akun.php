<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Akun Setting
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
	$up=mysql_query("select * from user order by nama asc limit $posisi,$batas");
	echo mysql_error();
	?>
	
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Tambah Akun</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 50 </span>
									<label>Username <span>(Required Field)</span></label>
									<input type="text" required name='username'class="field size1" />
								</p>
								<p>
									<span class="req">(Required Field) max 50 </span>
									<label>Password</label>
									<input type="password" name='password' class="field size1" />
								</p>	
								
								<p>
									<span class="req"></span>
									<label>Nama<span>(Required Field)</span></label>
									<input type="nama" name='nama' class="field size1" />
								</p>
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" name='tambah_akun' class="button" value="Tambah" />
							<input type="reset" class="button" value="reset" />
						</div>
						<!-- End Form Buttons -->
					</form>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th>Username</th>
								<th>Nama</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{									
									?>
									<tr>
								<td><?=$up1->username?></td>
								<td><?=$up1->nama?></td>
								<td>
								<a href="" class="ico del"></a>
								<a href="" class="ico edit"></a></td>
								</td>
							</tr>
									<?php
								}			
								?>
						</table>
					</div>
				</div>
				