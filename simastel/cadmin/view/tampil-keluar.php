<?php
@$id=$_GET['no'];
$q=mysql_query("select * from email_masuk natural join email_keluar where id_email_keluar='$id'");
echo mysql_error();
if(mysql_num_rows($q)==0)
{
	alert("Tidak ditemukan email masuk");
	pindah("$url1?m=outbox");
}
$r=mysql_fetch_object($q);
?>

					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								
								<p>
									<span class="req"></span>
									<label>Pesan Keluar<span> > <?=$r->nama?> > <?=$r->waktu_email_masuk?></span></label>
									<?=$r->email_keluar?>
								</p>
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<!-- End Form Buttons -->
					</form>