<?php include"../../config/setting.php";?>
<?php include"../../config/fungsi.php";?>
<?php
if(isset($_POST['login']))
{
		$user	= mysql_real_escape_string($_POST['username']);
		$pass	= md5(mysql_real_escape_string($_POST['password']));
		$q		= mysql_query("SELECT * FROM user WHERE username = '$user' ");
		$val	= mysql_num_rows($q);
		$row 	= mysql_fetch_object($q);
		echo mysql_error();
		if ($val ==1){
			if($row->password ==$pass)
			{
				session_start();
				echo"Login Berhasil! harap tunggu sedang mengalihkan ke halaman index!";
				$_SESSION['username']	= "$row->username";
				$_SESSION['nama']		= "$row->nama";
				pindah('../index.php?msg=1');
			}
			else
			{
				header('location:../login.php?msg=3&user='.$user);
			}
		}
		else
		{ 
			
			header('location:../login.php?msg=2&user='.$user);
		}
}
 
?> 