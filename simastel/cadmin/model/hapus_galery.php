<?php
if($_GET['hapus_gambar'])
{
	$id=$_GET['hapus_gambar'];
	$r=mysql_fetch_object(mysql_query("select * from galery where id_galery='$id'"));
	$jenis= $r->nama_gambar_galery;
	echo "<h1>Proses penghapusan harap tunggu. . . $jenis</h1>";
	$gambar	= $_SERVER['DOCUMENT_ROOT']."/images/images/$jenis";
	$thumb	= $_SERVER['DOCUMENT_ROOT']."/images/.thumbs/images/$jenis";
	@unlink($gambar);
	@unlink($thumb);
	$del=mysql_query("delete from galery where id_galery='$id' ");
	if($del)
	{
		echo"<h2>Hapus berhasil</h2>";
		pindah("$url1?m=galery");
	}
	else
	{
		echo "<h2>Gagal dihapus</h2>";
		echo "error : ".mysql_error();
		pindah("$url1");
	}
}
?>