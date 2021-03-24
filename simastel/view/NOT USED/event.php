<h2>Event</h2>
<a href="<?=$url?>">Home</a> / Event
<ul>
	<?php 
	$up=mysql_query("select * from artikel where jenis_artikel='event' order by waktu_artikel desc");
	echo mysql_error();
	while($up1=mysql_fetch_object($up))
	{
		echo "<li><a href='$url?post=$up1->id_artikel'>$up1->judul_artikel</a> </li>";
	}			
	?>
</ul>