<?php include"../config/setting.php";?>
<?php include"../config/fungsi.php";?>
<?php
if(isset($_SESSION['username']))
{
	alert("anda sudah login, anda harus logout dulu untuk menuju halaman Login");
	pindah("$url1");
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8"> 
    <title>Login Admin <?=$nama_toko?></title>
   
        <link rel="stylesheet" href="assets/login/css/style.css">
  </head>

  <body>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<div id="logmsk" style="display: block;">
    <div id='close'>X</div>
    <div id="userbox">
	
	<form method=post action='model/login.php'>
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">Sign up</h1>
        <div id="sumsk" style="display: none;">Sending</div>
        <input id="name" name='username' placeholder="ID" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
        <input id="pass" name='password' type="password" placeholder="Password" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
        <p ><?php
		if(isset($_GET['msg']))
		{
			@$user=$_GET['user'];
			switch($_GET['msg'])
			{
				case 1:
					echo"anda harus login terlebih dahulu";
				break;
				
				case 2:
					echo"Tidak Ditemukan akun <b>$user</b>";
				break;
				
				case 3:
					echo"User <b>$user</b> salah password !";
				break;
			}
		}
		?>
		</p>
		
		
        <p id="nameal" style="display: none; opacity: 1;">ID:</p>
        <p id="passal" style="display: none; opacity: 1;">Password:</p>
		<input type=submit name=login id=signupb value='Login'>
		</form>
    </div>
</div>
    
        <script src="assets/login/js/index.js"></script>
	
    
    
    
  </body>
</html>
