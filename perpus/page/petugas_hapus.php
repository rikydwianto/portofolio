<?php
$id=$_GET['kode'];
mysql_query("delete from petugas where petugas_kode='$id'");
echo alert('Berhasil Dihapus');
echo pindah("$url/petugas");
?>
