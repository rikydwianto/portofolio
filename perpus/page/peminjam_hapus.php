<?php
$id=$_GET['peminjam_kode'];
mysql_query("delete from peminjam where peminjam_kode='$id'");
echo alert('Berhasil Dihapus');
echo pindah("$url/peminjam");
?>
