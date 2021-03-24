<?php
if($_GET['hapus-komen'])
{
	$id=$_GET['hapus-komen'];
	echo "<h1>Proses penghapusan harap tunggu. . .</h1>";
	$del=mysql_query("delete from komentar where id_komen='$id' ");
	if($del)
	{
		echo"<h2>Hapus berhasil</h2>";
		pindah("$url1?m=komentar");
	}
	else
	{
		echo "<h2>Gagal dihapus</h2>";
		echo "error : ".mysql_error();
		pindah("$url1?m=komentar");
	}
}
?>