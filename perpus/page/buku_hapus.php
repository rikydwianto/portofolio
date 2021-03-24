<?php
@$id=$_GET['buku_kode'];
mysql_query("delete from buku where buku_kode='$id'");
echo"<script>alert('$id Berhasil Dihapus'); window.history.back();</script>";
echo mysql_error();

?>
