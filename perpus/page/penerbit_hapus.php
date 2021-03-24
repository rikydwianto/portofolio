<?php
@$id=$_GET['penerbit_kode'];
mysql_query("delete from penerbit where penerbit_kode='$id'");
echo"<script>alert('$id Berhasil Dihapus'); window.history.back();</script>";
echo mysql_error();

?>