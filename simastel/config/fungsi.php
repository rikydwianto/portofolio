<?php
function alert($alert)
{
	echo"<script>alert('".$alert."');</script>";
}
function pindah($pindah)
{
	echo"<script>window.location.href='$pindah';</script>";
}
function injek($injek)
{
	return mysql_real_escape_string("$injek");
}


function balas_email($email,$nama,$subject,$body)
{
	require_once("../library/mail/class.phpmailer.php");
	require_once("../library/mail/PHPMailerAutoload.php");

	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host 	= "mail.simastel.com";
	$mail->Port 	= 25;
	$mail->Username = "no_reply@simastel.com";
	$mail->Password = "simas123";



	$mail->SetFrom('no_reply@simastel.com', 'SIMASTEL.COM');
	$mail->Subject = "$subject";
	$mail->MsgHTML("$body");
	$mail->AddAddress("$email", "$nama");

	if($mail->Send()) {
	 // echo "Terkirim ! Akan segera diproses !";
	} else {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	}


}
function balas_email_admin($email,$nama,$subject,$body)
{
	require_once("../../library/mail/class.phpmailer.php");
	require_once("../../library/mail/PHPMailerAutoload.php");

	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host 	= "mail.simastel.com";
	$mail->Port 	= 25;
	$mail->Username = "no_reply@simastel.com";
	$mail->Password = "simas123";



	$mail->SetFrom('no_reply@simastel.com', 'SIMASTEL.COM');
	$mail->Subject = "$subject";
	$mail->MsgHTML("$body");
	$mail->AddAddress("$email", "$nama");

	if($mail->Send()) {
	 // echo "Terkirim ! Akan segera diproses !";
	} else {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	}


}
//balas_email("batox65@gmail.com","riky","subject","BODY");




function hitung($jenis=null)
{
	if($jenis==null)
	{
	$q=mysql_query("select * from artikel");
	}
	else
	$q=mysql_query("select * from artikel where jenis_artikel='$jenis'");
	echo mysql_num_rows($q);
}



function hitung_pembaca($jenis=null)
{
	if($jenis==null)
	{
	$q=mysql_query("select sum(artikel_dilihat) as dilihat from artikel");
	}
	else
	$q=mysql_query("select sum(artikel_dilihat) as dilihat  from artikel where jenis_artikel='$jenis'");
	$r= mysql_fetch_object($q);
	echo $r->dilihat;
}




function Upload($uploadName){
    $direktori          = "/images/images/";
    $direktoriThumb     = "/images/.thumbs/images";
    $file               = $direktori.$uploadName;
   
    //simpan gambar ukuran sebenernya
    $realImagesName     = $_FILES['F1']['tmp_name'];
    move_uploaded_file($realImagesName, $file);
   
    //identitas file gambar
    $realImages             = imagecreatefromjpeg($file);
    $width                  = imageSX($realImages);
    $height                 = imageSY($realImages);
   
    //simpan ukuran thumbs
    $thumbWidth     = 200;
    $thumbHeight    = ($thumbWidth / $width) * $height;
   
    //mengubah ukuran gambar
    $thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
    imagecopyresampled($thumbImage, $realImages, 0,0,0,0, $thumbWidth, $thumbHeight, $width, $height);
   
    //simpan gambar thumbnail
    imagejpeg($thumbImage,$direktoriThumb."thumb_".$uploadName);
   
    //hapus objek gambar dalam memori
    imagedestroy($realImages);
    imagedestroy($thumbImage);
    }

	
	
	
	
	
	function get_first_image_url($data, $default_url = null) {

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `![alt text](IMAGE URL)`
     * [2]. `![alt text](IMAGE URL "optional title")`
     *
     * ... and the single-quoted version of them
     *
     */
    if(preg_match_all('#\!\[.*?\]\(([^\s]+?)( +([\'"]).*?\3)?\)#', $data, $matches)) {
        return $matches[1][0];
    }

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `<img src="IMAGE URL">`
     * [2]. `<img foo="bar" src="IMAGE URL">`
     * [3]. `<img src="IMAGE URL" foo="bar">`
     * [4]. `<img src="IMAGE URL"/>`
     * [5]. `<img foo="bar" src="IMAGE URL"/>`
     * [6]. `<img src="IMAGE URL" foo="bar"/>`
     * [7]. `<img src="IMAGE URL" />`
     * [8]. `<img foo="bar" src="IMAGE URL" />`
     * [9]. `<img src="IMAGE URL" foo="bar" />`
     *
     * ... and the uppercased version of them, and the single-quoted version of them
     *
     */
    if(preg_match_all('#<img .*?src=([\'"])([^\'"]+?)\1.*? *\/?>#i', $data, $matches)) {
        return $matches[2][0];
    }

    return $default_url; // Default image URL if nothing matched
}

?>


