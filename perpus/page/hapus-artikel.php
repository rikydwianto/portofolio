<?php
@$page=$_GET['artikel'];	
$query="select * from artikel natural join kategori_artikel where id_artikel='$page'";
$sql=mysql_query($query);
$rs=  mysql_fetch_array($sql);
echo mysql_error();
if(mysql_num_rows($sql)==0)
{
	pindah("$url/lihat/artikel");
}
$r=mysql_fetch_array($sql);
$a=mysql_query("delete from artikel where id_artikel='$page'");
if($a)
{
     alert_berhasil("Berhasil dihapus");
	 pindah("$url/lihat/artikel");

}
?>
