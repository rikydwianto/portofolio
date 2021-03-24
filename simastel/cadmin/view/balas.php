<?php
@$id=$_GET['no'];
$q=mysql_query("select * from email_masuk where no_email='$id'");
echo mysql_error();
if(mysql_num_rows($q)==0)
{
	alert("Tidak ditemukan email masuk");
	pindah("$url1?m=inbox");
}
$r=mysql_fetch_object($q);
?>

					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								
								<p>
									<span class="req"></span>
									<label>Pesan<span> > <?=$r->nama?> > <?=$r->waktu_email_masuk?></span></label>
									<textarea  name='pesan'class="field size1" rows="10"  disabled><?=$r->email_masuk?></textarea>
								</p>
								<p>
									<span class="req">max 50 </span>
									<label>Subject<span>(Required Field)</span></label>
									<input type="text" required name='subject'class="field size1" />
									<input type="hidden" value="<?=$r->no_email?>" name='no_email'class="field size1" />
								</p>
								<p>
									<span class="req"></span>
									<label>Balasan<span>(Required Field)</span></label>
									<textarea  name='isi'class="field size1" rows="10" style="height:200px"></textarea>
								</p>
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" name='balas' class="button" value="BALAS" />
							<input type="reset" class="button" value="reset" />
						</div>
						<!-- End Form Buttons -->
					</form>