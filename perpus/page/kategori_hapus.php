<?php
$kode=$_GET['kategori'];
mysql_query("delete from kategori where kategori_kode='$kode'");
    alert('Berhasil Dihapus');
	pindah("$url/kategori");

?>
