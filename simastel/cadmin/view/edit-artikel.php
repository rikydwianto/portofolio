<?php
@$id=$_GET['edit'];
$q=mysql_query("select * from artikel where id_artikel=$id");
if(mysql_num_rows($q)==0)
{alert("post tidak ditemukan");
pindah("$url1");}
$r=mysql_fetch_object($q);
?>
<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Edit / <?=$r->jenis_artikel?> / <?=$r->judul_artikel?>
		</div>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Edit / <?=$r->jenis_artikel?> / <?=$r->judul_artikel?></h2>
						

					</div>
					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 50 </span>
									<label>Artikel Judul <span>(Required Field)</span></label>
									<input type="hidden" value='<?=$r->id_artikel?>'required name='id'class="field size1" />
									<input type="text" value='<?=$r->judul_artikel?>'required name='judul'class="field size1" />
								</p>
								<p>
									<span class="req">max 140 </span>
									<label>Deskripsi Post </label>
									<input type="text" value='<?=strip_tags($r->deskripsi_singkat)?>' name='quote' class="field size1" />
								</p>	
								<!-- <p class="inline-field">
									<label>Date</label>
									<select class="field size2">
										<option value="">23</option>
									</select>
									<select class="field size3">
										<option value="">July</option>
									</select>
									<select class="field size3">
										<option value="">2009</option>
									</select>
								</p> -->
								
								<p>
									<span class="req"></span>
									<label>Isi Post <span>(Required Field)</span></label>
									<textarea  name='isi'class="field size1" rows="10" cols="35" style="width:400px"><?=$r->isi_artikel?></textarea>
								</p>
								<p>
									<span class="req"></span>
									<label>Tumbnail <span>Masukan nama gambar (Required Field)</span></label>
									<input type=text value='<?=$r->gambar_artikel?>'required name=tumbnail class="field size1" />
								</p>
								
									<p class="inline-field">
									<label>Jenis Post</label>
									<select name='jenis' required class="field size1">
										<option value="">Pilih Jenis Post . . .</option>
										<?php
											if($r->jenis_artikel=="artikel")
												$s="selected";
											else if($r->jenis_artikel=='event')
												$s1='selected';
											else if($r->jenis_artikel=='feed')
												$s2='selected';
											else if($r->jenis_artikel=='loker')
												$s3='selected';
										?>
										<option value="artikel" <?=@$s?>>Artikel</option>
										<option value="event" <?=@$s1?>>Event</option>
										<option value="feed" <?=@$s2?>>Feed</option>
										<option value="loker" <?=@$s3?>>Lowongan Kerja</option>
									</select>
									</p>
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" name='edit' class="button" value="Edit" />
							<input type="reset" class="button" value="reset" />
						</div>
						<!-- End Form Buttons --> 
					</form>
				</div>