
<?php
$post=$_GET['post'];
@mysql_query("update artikel set artikel_dilihat=artikel_dilihat+1 where id_artikel='$post'");
$r=mysql_query("select * from artikel NATURAL JOIN user where id_artikel='$post'");
if(mysql_num_rows($r)==0)
{	alert("halaman yg anda cari tidak ada !");
	pindah("$url");
}
$r=mysql_fetch_object($r);
 ?>
<title><?=$r->judul_artikel?></title>
<h2><?=$r->judul_artikel?></h2>
<hr/>

<p style='padding-bottom:15px;padding-top:15px;margin-top:10px'>
	<?php 
	
		echo $r->deskripsi_singkat;
		echo $r->isi_artikel;
		
	
	?>
</p>
<br/>
<b>Share This Post To :</b> 
<div style="color: #000000; background: rgb(38, 38, 38); border: 1px solid #B6B7B9; padding:4px 0px 4px 15px; margin:4px 0px 4px 0px;">
<a href="#" onclick='window.open("http://www.facebook.com/share.php?u=<?=$url;?>?post=<?=$_GET['post']?>","_blank","toolbar=yes,location=yes,menubar=yes,copyhistory=yes,directories=no,status=no,resizable=no,width=500,height=400")'>
<i class="icon-facebook_circle red icon2x "  ></i>
</a>
&nbsp;
<a href="#" onclick='window.open("http://twitter.com/intent/tweet?url=<?=$url;?>?post=<?=$_GET['post']?>;text=<?=$r->judul_artikel?>&amp;hashtags=SIMASTEL","_blank","toolbar=yes,location=yes,menubar=yes,copyhistory=yes,directories=no,status=no,resizable=no,width=500,height=400")'>
<i class="icon-twitter_circle red icon2x "  ></i>
</a> 
</div>
<div style="color: #000000; background: #d1d9ff; border: 1px solid #B6B7B9;padding-top:0px; ">
Ditulis Oleh : <strong><?=$r->nama?></strong> <br/>
 pada <?=$r->waktu_artikel?><br/>
Tayangan : <strong><?=$r->artikel_dilihat?>X

</strong>
 
 
</div>
<p id=komentar>
<?php include "view/komentar.php"; ?>
</p>