<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Kirim Email
		</div>
		
		
		
<?php 
@$no=$_GET['no_email'];
$q=mysql_query("select * from email where no_email='$no'");
if(mysql_num_rows($q)==0)
{alert("Email tidak ditemukan.");
pindah("$url1?m=email");}
$r=mysql_fetch_object($q);
?>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Kirim Email ke <?=$r->email?></h2>
					</div>
					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req"></span>
									<label>Subject<span>(Required Field)</span></label>
									<input type="text" required name='subject'class="field size1" />
									<input type="hidden" name='email'class="field size1" value='<?=$r->email?>'/>
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
							<input type="submit" name='kirim-pesan' class="button" value="KIRIM" />
							<input type="reset" class="button" value="reset" />
						</div>
						<!-- End Form Buttons -->
					</form>
					
					
					
</div>