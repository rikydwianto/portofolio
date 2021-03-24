<title>BARCODE</title>
<form action='hasil.php' method=get>
	<?php
	if(isset($_GET['mn'])==with_nama)
	{
		echo"Nama : <input type=text name=nama required>";
	}
	?>	
	<br/>Kode : <input type=text name=kode required><input name='kirim' value='Generate' type=submit>
</form>
<a href='index.php'>Only kode</a>
<a href='index.php?mn=with_nama'>With Nama</a> 