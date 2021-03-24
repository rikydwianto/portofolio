<?php include"../config/setting.php";?>
<?php include"../config/fungsi.php";?>
<?php 
if(!isset($_SESSION['username']))
{
	header('location:login.php?msg=1');
	echo "kosong session";
}
else
{
	//echo"ada session";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>ADMIN SIMASTEL / <?=$title?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<?php include"view/page/link.php"; ?>

</head>
<body>
<!-- Header -->
<?php include"view/page/header.php";?>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		
		<!-- End Small Nav -->
		
		<!-- Message OK 
		<div class="msg msg-ok">
			<p><strong>Your file was uploaded succesifully!</strong></p>
			<a href="#" class="close">close</a>
		</div>
		 -->		
		
		<!-- Message Error 
		<div class="msg msg-error">
			<p><strong>You must select a file to upload first!</strong></p>
			<a href="#" class="close">close</a>
		</div>
		End Message Error -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				
				<!-- Box -->
				<?php
				if(isset($_GET['k']))
					include"view/jenis.php";
				else if(isset($_GET['edit']))
					include"view/edit-artikel.php";
				else if(isset($_GET['hapus']))
					include"model/hapus-post.php";
				else if(isset($_GET['hapus-komen']))
					include"model/hapus-komen.php";
				else if(isset($_GET['hapus_gambar']))
					include"model/hapus_galery.php";
				else if(isset($_GET['unsub']))
					include"model/hapus-email.php";
				else if(isset($_GET['q']))
					include"view/cari.php";
				else
				{
					@$m=$_GET['m'];
					switch($m)
					{
						default:include"view/tambah-artikel.php";
						break;
						
						case"komentar":include"view/komentar.php";
						break;
						
						case"galery":include"view/galery.php";
						break;
						
						case"email":include"view/email.php";
						break;
						
						case"inbox":include"view/email-masuk.php";
						break;
						
						case"outbox":include"view/email-keluar.php";
						break;
						
						case"kirim-email":include"view/kirim-email.php";
						break;
						
						case"akun":include"view/akun.php";
						break;
						
						
					}
				}
				?>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<?php include"view/page/sidebar.php"; ?>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2015 - <?=$nama_toko?></span>
		<span class="right">
			Design by <a href="http://facebook.com/batox65" target="_blank" title="Facebook">Riky Dwianto</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
	
	<script>
	CKEDITOR.replace('isi',{
	filebrowserBrowseUrl: 'library/kcfinder/browse.php?type=files',
	filebrowserImageBrowseUrl: 'library/kcfinder/browse.php?type=images',
	filebrowserFlashBrowseUrl: 'library/kcfinder/browse.php?type=flash',
	filebrowserUploadUrl: 'library/kcfinder/upload.php?type=files',
	filebrowserImageUploadUrl: 'library/kcfinder/upload.php?type=images',
	filebrowserFlashUploadUrl: 'kcfinder/upload.php?type=flash'
	});
	</script>
	
</body>
</html>