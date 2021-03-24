<?php 
session_start();
date_default_timezone_set('Asia/Jakarta');
mysql_connect("localhost","rikj6893","Ebd8sdfbEPwt53");
mysql_select_db("rikj6893_simastel");
$url="http://portofolio.rikydwianto.com/simastel/";
$slogan="TOKO HANDPHONE, DISTRIBUTOR PULSA TERLENGKAP DI KOTA SUKABUMI";
$nama_toko='SIMAS TEL';
$title=$nama_toko.' - '.$slogan;
$title1=$slogan.'';
$url1="http://protofolio.rikydwianto.com/simastel/cadmin/";
$folder='sdsd';
// $_SESSION['username']='riky_ab';
// $_SESSION['nama']='Riky Dwianto';

			@$m=$_GET['m'];
				@$post=$_GET['post'];
				if($post || isset($_GET['k']))
				{
					$r=mysql_query("select * from artikel NATURAL JOIN user where id_artikel='$post'");
					$r=mysql_fetch_object($r);
					$title=$nama_toko.' - '.$r->judul_artikel;
					$title1=$r->deskripsi_singkat;
				}
				else
				{
					switch($m)
					{					
						case"galery": 
							$title=$nama_toko.' - '."Galerry";
						break;
						
						case"kontak": 
							$title=$nama_toko.' - '."Kontak";
						break;
						
						case"loker": 
							$title=$nama_toko.' - '."Lowongan Kerja";
						break;
						
					}
				}
@chmod($_SERVER['DOCUMENT_ROOT'],0777) ;
// echo $_SERVER['DOCUMENT_ROOT'];
?>