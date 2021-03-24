<?php
include"../config/setting.php";
include"../config/fungsi.php";
if(isset($_POST['kontak']))
{
	$nama=$_POST['nama'];
	$web=$_POST['web'];
	$email=$_POST['email'];
	$isi=$_POST['isi'];
	$balas="Terima kasih $nama ,  <br/>  ";
	$balas.="<code>$isi</code><br/>";
	$balas.="Email anda akan segera kami proses <br/>Terima kasih <br/><br/><br/>";
	$balas.="Simastel";
	balas_email($email,"$nama","SIMASTEL.COM",$balas);
	mysql_query("insert into email_masuk (email,nama,website,email_masuk,waktu_email_masuk) values('$email','$nama','$web','$isi',curdate())");
	echo mysql_error();
	alert("Terima kasih $nama ... email anda akan segera kami proses");
	pindah("../");
}

if(isset($_POST['komentar']))
{
	$isi=mysql_real_escape_string($_POST['isi']);
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$post=$_POST['id'];
	$query=mysql_query("insert into komentar (id,nama,komentar,waktu_komentar,tanggal_komentar,email_komentar) values($post,'$nama','$isi',now(),curdate(),'$email')");
	if($query)
	{
		pindah("$url?post=$post");
	}
	else
	{
		echo mysql_error();
		alert("Gagal berkomentar");
		pindah("$url?post=$post");
	}
}


if(isset($_POST['langganan']))
	{
		$email=$_POST['email'];
		$cek=mysql_num_rows(mysql_query("select * from email where email='$email'"));
		if($cek==0)
		{
		$balas="Terima kasih Telah berlangganan SIMASTEL.com ,  <br/>  ";
		$balas.="Anda akan segera mendapatkan informasi seputar SIMAS TEL <br/>Terima kasih <br/><br/><br/>";
		$balas.="Simastel";
		
		balas_email($email,"","SIMASTEL.com",$balas);
		
		mysql_query("insert into email (email) value('$email')");
		alert("Anda berhasil mendaftar, tunggu event - event selanjutnya dan dapatkan hadiahnya :) ");
		}
		else
		{
			alert("anda sudah mendaftar kan email $email, tetapi anda akan tetap mendapatkan info dari kami ");
		}
		
		
		pindah("$url");
	}
?>

