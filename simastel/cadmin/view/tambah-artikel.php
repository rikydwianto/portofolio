<div class="small-nav">
			<a href="<?=$url1?>">Dashboard</a>
			<span>&gt;</span>
			Halaman Awal
		</div>
<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Tambah Post</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="model/crud.php" enctype='multipart/form-data' method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 50 </span>
									<label>Artikel Judul <span>(Required Field)</span></label>
									<input type="text" required name='judul'class="field size1" />
								</p>
								<p>
									<span class="req">max 140 </span>
									<label>Deskripsi Post </label>
									<input type="text" name='quote' class="field size1" />
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
									<textarea  name='isi'class="field size1" rows="10" cols="35" style="width:400px"></textarea>
								</p>
								<p>
									<span class="req"></span>
									<label>Tumbnail <span>Isikan nama gambar (Required Field)</span></label>
									<input type=text name=tumbnail class="field size1"/>
								</p>
								<p>
									<p class="inline-field">
									<label>Jenis Post</label>
									<select name='jenis' required class="field size1">
										<option value="">Pilih Jenis Post . . .</option>
										<option value="artikel">Artikel</option>
										<option value="event">Event</option>
										<option value="feed">Feed</option>
										<option value="loker">Lowongan Kerja</option>
									</select>
									</p>
								</p>	
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" name='publish' class="button" value="Publish" />
							<input type="reset" class="button" value="reset" />
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>