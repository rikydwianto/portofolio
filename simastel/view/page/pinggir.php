<div class="s-12 m-5 l-4">
					  
					  <!-- ASIDE NAV -->
					  
						 <h3>NAVIGATION</h3>
						 <div class="aside-nav">
						<ul>
							<li><a style='background:#3498DB;color:white'>Program</a>
								<ul>
								<?php 
								$up=mysql_query("select * from artikel where jenis_artikel='event' order by waktu_artikel desc limit 0,5 ");
								echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{
									$action= preg_replace("/[^a-zA-Z0-9]/", "_", $up1->judul_artikel);
									$rep=$action;
									echo "<li style='background:#428bca;'><a style='color:white'  href='$url$up1->id_artikel.$rep.htm'>$up1->judul_artikel</a> </li>";
								}
								
								?>
								</ul>
							</li>
							<li><a style='background:#EC523F;color:white'>Pengumuman</a>
								<ul>
								<?php 
								$up=mysql_query("select * from artikel where jenis_artikel='feed' order by waktu_artikel desc limit 0,5 ");
								echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{
									$action= preg_replace("/[^a-zA-Z0-9]/", "_", $up1->judul_artikel);
									$rep=$action;
									echo "<li style='background:#ec522f;'><a style='color:white' href='$url$up1->id_artikel.$rep.htm'>$up1->judul_artikel</a> </li>";
								}
								
								?>
								</ul>
							</li>
							<li><a style='background:#1abc9c;color:white'>Populer Post</a>
								<ul>
								<?php 
								$up=mysql_query("select * from artikel where jenis_artikel!='loker' order by artikel_dilihat desc limit 0,5 ");
								echo mysql_error();
								while($up1=mysql_fetch_object($up))
								{
									$action= preg_replace("/[^a-zA-Z0-9]/", "_", $up1->judul_artikel);
									$rep=$action;
									echo "<li style='background:#1abc9c;'><a style='color:white' href='$url$up1->id_artikel.$rep.htm'>$up1->judul_artikel</a> </li>";
								}
								
								?>
								</ul>
							</li>
							<li><a style='background:#8e44ad;color:white'>ANDROID SUPER SIMAS</a>
								<ul>
								<div class=box style='background:#8e44ad;color:white'>
									<p style='text-align:center'><b>Aplikasi Android Super Simas </b>
									Memudahkan anda untuk bertransaksi, membeli pulsa, tiket, PPOB, dll , hanya dengan membuka klik, Selesai<br/>
									Download <a href='https://play.google.com/store/apps/details?id=com.ionicframework.andro487683'>disini</a> untuk mendapatkan Aplikasi Kerennya 
									</p>
									
								
								</div>
								</ul>
							
							</li>
							
							
							<li ><a style='background:#E67E22;color:white'>Berlangganan</a>
								
								<div class=box style='background:#E67E22;color:white'>
									<p style='text-align:center'><b>Berlangganan dengan Email ! </b>
									Anda akan Mendapat Informasi : 
									Mendapat Tips & Trick,
									Berita Seputar Gadget,
									Event berhadiah SimasTel</p>
									<center><form method=post action='<?=$url?>model/crud.php'>
									<input style='color:red'type=email name=email class="customform"required/><input type=submit name=langganan Value="Kirim">
									</form>
									</center>
								</div>
								
							</li> 
							<div class=box style='border:dashed'>
							<h3>Kontak!</h3><hr/>
								<a href="ymsgr:sendIM?simascard" style='float:left'>SimasCard<img src="http://opi.yahoo.com/online?u=simascard&amp;m=g&amp;t=2&amp;l=us"/></a>
							&nbsp;<a href="ymsgr:sendIM?simas.server">simas.server<img src="http://opi.yahoo.com/online?u=simas.server&amp;m=g&amp;t=2&amp;l=us"/></a>
								<h4>Info/Komplain</h4>
								<ul> 
									<li>HP : 0857 2396 2494</li>
									<li>Pin:284325B5</li>
									<li>Telp :(0266) 225 114</li>
								</ul>
								<hr/>
							</div>
								<CENTER>
								<script type="text/javascript" src="http://counter5.freecounterstat.ovh/private/counter.js?c=c6bbcd775e285725868b4bad2ee7a990"></script>
       
								</CENTER>
							
						</ul>
							
						 </div>
					  </div>
					  



