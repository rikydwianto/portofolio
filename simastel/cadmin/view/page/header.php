<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="<?=$url1?>">SIMASTEL</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong><?=$_SESSION['nama']?></strong></a>
				<span>|</span>
				<a href="<?=$url?>" target=blank>SIMAS TEL</a>
				<span>|</span>
				<a href="<?=$url1?>?m=akun">Akun Settings</a>
				<span>|</span>
				<a href="<?=$url1?>logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		<?php
		@$k=$_GET['k'];
		@$m=$_GET['m'];
		if($m=="" && $k=="")
			@$a1="class='active'";
		else if($k=="artikel")
			@$a2="class='active'";
		else if($k=="feed")
			@$a3="class='active'";
		else if($k=="event")
			@$a4="class='active'";
		else if($m=="komentar")
			@$a5="class='active'";
		else if($m=="email" xor $m=="kirim-email")
			@$a6="class='active'";
		else if($m=="inbox")
			@$a7="class='active'";
		else if($m=="outbox")
			@$a8="class='active'";
		else if($m=="galery")
			@$a10="class='active'";
		else if($m=="loker")
			@$a11="class='active'";
		
		?>
		
		
		
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="<?=$url1?>" <?=@$a1?>><span>Dashboard</span></a></li>
			    <li><a href="<?=$url1?>?k=artikel" <?=@$a2?>><span>Artikel</span></a></li>
			    <li><a href="<?=$url1?>?k=loker" <?=@$a11?>><span>Career</span></a></li>
			    <li><a href="<?=$url1?>?k=feed" <?=@$a3?>><span>Feed</span></a></li>
			    <li><a href="<?=$url1?>?k=event" <?=@$a4?>><span>Event</span></a></li>
			    <li><a href="<?=$url1?>?m=galery" <?=@$a10?>><span>Galery</span></a></li>
			    <li><a href="<?=$url1?>?m=komentar" <?=@$a5?>><span>Komentar</span></a></li>
			    <li><a href="<?=$url1?>?m=email" <?=@$a6?>><span>Email</span></a></li>
			    <li><a href="<?=$url1?>?m=inbox" <?=@$a7?>><span>Inbox</span></a></li>
			    <li><a href="<?=$url1?>?m=outbox" <?=@$a8?>><span>Outboxs</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>