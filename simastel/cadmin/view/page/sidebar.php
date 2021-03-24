<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Cari</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<div class="cl">&nbsp;</div>
												
						<!-- Sort -->
						<div class="sort">
							<form action="<?=$url1?>?m=q" method=get>
							<center><input type=text name=q value="<?=@$_GET['q']?>"class="field" placeholder='Cari post berdasarkan judul ..'>
							<input type=submit name=cari value=cari class="field size2"></center>
							</form>
							
							
						</div>
						<!-- End Sort -->
						
					</div>
					
				</div>
				
				
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>+ Langganan Email</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<div class="cl">&nbsp;</div>
												
						<!-- Sort -->
						<div class="sort">
							<center><form action="<?=$url1?>model/crud.php" method=post>
							<input type=email required name=email class="field">
							<input type=submit  name=langganan value=Langganan class="field">
							</form></center>
							
							
						</div>
						<!-- End Sort -->
						
					</div>
					
				</div>
				
				
				
				
				
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>System</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="<?=$url1?>" class="add-button"><span>Tambah Artikel</span></a>
						<a href="<?=$url?>" target=_blank class="add-button"><span>SIMASTEL</span></a>
						<div class="cl">&nbsp;</div>
							
						<!-- Sort -->
						<div class="sort">
							<label>Total Post &nbsp;&nbsp;&nbsp;: <?=hitung()?></label>
							<label>&nbsp; - Artikel &nbsp;&nbsp; -> <?=hitung('artikel')?></label>
							<label>&nbsp; - Event &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> <?=hitung('event')?></label>
							<label>&nbsp; - Feed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> <?=hitung('feed')?></label>
							<label>&nbsp; - Career &nbsp;&nbsp;&nbsp;&nbsp;-> <?=hitung('loker')?></label>
							<label>Total Pembaca : <?=hitung_pembaca()?></label>
							<label>&nbsp; - Artikel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> <?=hitung_pembaca('artikel')?></label>
							<label>&nbsp; - Event &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> <?=hitung_pembaca('event')?></label>
							<label>&nbsp; - Feed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -> <?=hitung_pembaca('feed')?></label>
							<label>&nbsp; - Career &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -> <?=hitung_pembaca('loker')?></label>
							<label>Waktu : <?=date("Y-m-d H:i:s")?></label>
							
							
						</div>
						<!-- End Sort -->
						
					</div>
					
				</div>