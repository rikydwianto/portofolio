<?php
include"../../config/setting.php";
include"../../config/fungsi.php";
echo"Tunggu sebentar ...";
if(isset($_POST['publish']))
{
	$username=$_SESSION['username'];
	$judul= $_POST['judul'];
	$quote= $_POST['quote'];
	$jenis= $_POST['jenis'];
	$isi= mysql_real_escape_string($_POST['isi']);
	$tgl= date('Y-m-d H:i:s');
	$tumbnail=$_POST['tumbnail'];
	$input=mysql_query("insert into artikel (judul_artikel,deskripsi_singkat,jenis_artikel,isi_artikel,waktu_artikel,username,gambar_artikel)
	values('$judul','$quote','$jenis','$isi','$tgl','$username','$tumbnail')
	
	");
	if($input)
	{
		alert("Post Berhasil ditambahkan!");
		pindah("../");
	}
	else
	{
		alert("Post gagal ditambahkan!");
		pindah("../");
	}
}

if(isset($_POST['edit']))
{
	$id=$_POST['id'];
	$username=$_SESSION['username'];
	$judul= $_POST['judul'];
	@$quote= $_POST['quote'];
	$jenis= $_POST['jenis'];
	$isi= mysql_real_escape_string($_POST['isi']);
	$tumbnail=$_POST['tumbnail'];
	$up=mysql_query("update artikel set judul_artikel='$judul',deskripsi_singkat='$quote',jenis_artikel='$jenis', gambar_artikel='$tumbnail', isi_artikel='$isi' where id_artikel='$id'");
	if($up)
	{
		alert("Post Berhasil diedit!");
		pindah("../?edit=$id");
	}
	else
	{
		alert("Post gagal diedit!");
		echo mysql_error();
		pindah("../?edit=$id");
	}
}
if(isset($_POST['broadcast']))
{	
	$isi=$_POST['isi'];
	$subject=$_POST['subject'];
	$q=mysql_query("select * from email");
	while($r=mysql_fetch_object($q))
	{
		balas_email_admin("$r->email","$r->email","$subject","$isi");
	}
	alert("Email has been sent!");
	pindah("$url1?=email");
}

if(isset($_POST['balas']))
{	
	$isi=$_POST['isi'];
	$no=$_POST['no_email'];
	$subject=$_POST['subject'];
	$q=mysql_query("select * from email_masuk where no_email='$no'");
	$r=mysql_fetch_object($q);
	mysql_query("insert into email_keluar (no_email,email_keluar,username) values('$no','subject : $subject <br/> $isi','$_SESSION[username]')");
	balas_email_admin("$r->email","$r->nama","$subject","$isi");
	alert("Berhasil dibalas");
	pindah("$url1?m=inbox");
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
		
		balas_email_admin($email,"","SIMASTEL.com",$balas);
		
		mysql_query("insert into email (email) value('$email')");
		alert("Anda berhasil mendaftar, tunggu event - event selanjutnya dan dapatkan hadiahnya :) ");
		}
		else
		{
			alert("anda sudah mendaftar kan email $email, tetapi anda akan tetap mendapatkan info dari kami ");
		}
		
		
		pindah("$url1");
	}

if(isset($_POST['kirim-pesan']))
{	
	$isi=mysql_real_escape_string($_POST['isi']);
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	balas_email_admin("$email","$email","$subject","$isi");
	alert("Berhasil mengirim email ke $email ");
	pindah("$url1?m=email");
}


if(isset($_POST['save']))
{
	$F1         = $_FILES['F1']['tmp_name'];
	$F1Name     = $_FILES['F1']['name'];
	$F1Type     = $_FILES['F1']['type'];
	$F1Size     = $_FILES['F1']['size'];
	$caption=$_POST['caption'];
	 $direktori          = $_SERVER['DOCUMENT_ROOT']."/images/images/";
    $direktoriThumb     = $_SERVER['DOCUMENT_ROOT']."/images/.thumbs/images/";
    $file               = $direktori.$F1Name;
   
    //simpan gambar ukuran sebenernya
    $realImagesName     = $_FILES['F1']['tmp_name'];
    move_uploaded_file($realImagesName, $file);
   
    //identitas file gambar
    $realImages             = imagecreatefromjpeg($file);
    $width                  = imageSX($realImages);
    $height                 = imageSY($realImages);
   
    //simpan ukuran thumbs
    $thumbWidth     = 200;
    $thumbHeight    = ($thumbWidth / $width) * $height;;
   //($thumbWidth / $width) * $height;
    //mengubah ukuran gambar
    $thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
    imagecopyresampled($thumbImage, $realImages, 0,0,0,0, $thumbWidth, $thumbHeight, $width, $height);
   
    //simpan gambar thumbnail
    imagejpeg($thumbImage,$direktoriThumb.$F1Name);
   
    //hapus objek gambar dalam memori
    imagedestroy($realImages);
    imagedestroy($thumbImage);
	
	mysql_query("INSERT INTO galery(keterangan_galery,nama_gambar_galery)
        VALUES (
                '$caption',
                '$F1Name')");
        pindah($url1."?m=galery");
}



if(isset($_POST['tambah_akun']))
{
	$user=mysql_real_escape_string($_POST['username']);
	$password=md5(mysql_real_escape_string($_POST['password']));
	$nama=mysql_real_escape_string($_POST['nama']);
	mysql_query("
	insert into user(username,password,nama) values
	('$user','$password','$nama')
	");
	alert("Berhasil Ditambahkan");
	pindah('../');
}
















?>

