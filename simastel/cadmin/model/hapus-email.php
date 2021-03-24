<?php
if($_GET['unsub'])
{
	$id=$_GET['unsub'];
	echo "<h1>Proses penghapusan harap tunggu. . .</h1>";
	$del=mysql_query("delete from email where no_email='$id' ");
	if($del)
	{
		echo"<h2>Hapus berhasil</h2>";
		pindah("$url1?m=email");
	}
	else
	{
		echo "<h2>Gagal dihapus</h2>";
		echo "error : ".mysql_error();
		pindah("$url1?m=email");
	}
}
?>