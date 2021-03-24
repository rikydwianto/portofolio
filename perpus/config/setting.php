<?php @session_start();?>
<?php
date_default_timezone_set('Asia/Jakarta');
$title="SISTEM INFORMASI PERPUSTAKAAN ";
$set['host']='localhost';
$set['user']='rikj6893';
$set['pass']='Ebd8sdfbEPwt53';
$set['DB']='rikj6893_perpus';
@mysql_connect($set['host'],$set['user'],$set['pass']);
@mysql_select_db($set['DB']);
echo mysql_error();
$tgl=date("Y-m-d");
$tgl=strtotime("+3 day",strtotime($tgl));
$tgl=date("Y-m-d",$tgl);
$url="http://portofolio.rikydwianto.com/perpus";
function form($a,$b,$c,$d)
{
    echo"<input type='$a' value='$d' name='$b' placeholder='$c' required>";
}
function alert($a)
{
	$url="http://localhost/riky_ab";
	$title="<small><b id=biru>SMK KOMPUTER </b><b id=merah>ABDI BANGSA</b></small>";
	$a=mysql_real_escape_string($a);
    echo"
	<script>
        swal({
	  title: '$title',
	  text: '<b id=tebal>$a</b>',
	  imageUrl: '$url/images/logo-ab.png',
	  html:true,
	  timer:10000,
	  imageSize:'200x200'
	});
    </script>";
}
function pindah($a)
{
    echo "<script>window.location.href='$a';</script>";
}
function geser($a)
{
	
	$url="http://localhost/riky_ab";
	$title="<small><b id=biru>SMK KOMPUTER </b><b id=merah>ABDI BANGSA</b></small>";
	$a=mysql_real_escape_string($a);
    echo"
	<script>
        swal({
	  title: '$title',
	  text: '<b id=tebal>MAAF . . . <br/>SELAIN ADMIN DAN PETUGAS DILARANG MASUK !!!</b>',
	  imageUrl: '$url/images/error/peringatan.jpg',
	  html:true,
	  imageSize:'200x200'
	});
		
    </script>";
	echo"<script>window.location.href='$url';</script>";

	}
function alert_berhasil($a)
{	$a=mysql_real_escape_string($a);
    echo"
	<script>
        swal('SUKSES', '$a', 'success')
    </script>";
}
?>
