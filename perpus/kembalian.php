<?php include"config/setting.php"; ?>
<?php
if(empty($_SESSION['level']) || $_SESSION['level']=='user' )
{
   pindah("$url/home");
}
?>

<br>

<?php
@$buku_kode=$_GET['buku_kode'];
@$Pkembali_kode=$_SESSION['Pkembali_kode'];
@$pinjam_kode=$_GET['pinjam_kode'];
$denda=str_rot13($_GET['denda']);
/*echo"Buku : $buku_kode<br>
	Peminjam kode: $Pkembali_kode<br>
	Peminjaman kode: $pinjam_kode<br>
	denda : $denda;
";*/
$query=mysql_query("update detail_pinjam set detail_tgl_kembali=curdate(), detail_status_kembali='sudah' , detail_denda='$denda' where peminjaman_kode='$pinjam_kode' and buku_kode='$buku_kode'");
$sql=mysql_query("select * from detail_pinjam natural join peminjaman natural join peminjam where peminjam_kode='$Pkembali_kode' and detail_status_kembali=''");
mysql_query("update buku set buku_jumlah=buku_jumlah+1 where buku_kode='$buku_kode'");
echo "<h3>Sudah dikembalikan . . . . .";
if(mysql_num_rows($sql)==0){
	$_SESSION['Pkembali_kode']="";
	echo"Tidak ada buku yang harus dikembalikan kembali :) </h3>";
}
pindah("$url/kembali");
?>