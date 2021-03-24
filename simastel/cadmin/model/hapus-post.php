<?php
if($_GET['hapus'])
{
	$id=$_GET['hapus'];
	$r=mysql_fetch_object(mysql_query("select * from artikel where id_artikel='$id'"));
	$jenis= $r->jenis_artikel;
	echo "<h1>Proses penghapusan harap tunggu. . .</h1>";
	$del=mysql_query("delete from artikel where id_artikel='$id' ");
	if($del)
	{
		echo"<h2>Hapus berhasil</h2>";
		pindah("$url1?k=$jenis");
	}
	else
	{
		echo "<h2>Gagal dihapus</h2>";
		echo "error : ".mysql_error();
		pindah("$url1");
	}
}
?>