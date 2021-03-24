<!DOCTYPE html>
<?php include_once 'config/setting.php'; ?>
<?php
@$user=$_SESSION['user'];

if($user!="")
{
	pindah("$url/home");	
}
?>
<html>

<head>
	
  <meta charset="UTF-8">

  <title><?=$title?></title>
	<link type="text/css" media="screen" rel="stylesheet" href="<?=$url;?>/stylesheets/reset.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="<?=$url;?>/stylesheets/main.css" />

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="stylesheets/login.css" media="screen" type="text/css" />
      <script src="<?=$url?>/lib/sweet-alert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=$url?>/lib/sweet-alert.css"/>
</head>

<body>
    <br/>
    <br/>
  <div class="login-card">
      <center><img src="<?=$url?>/images/logo-ab.png" width="140" height="140" alt="Logo AB" /></center><br>

    <form method="post">
    <input type="text" name="kode" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <select name="level" required="">
                        <option value="">PILIH LEVEL</option>
                        <option value="admin">ADMIN</option>
                        <option value="petugas">PETUGAS</option>
                        <option value="peminjam">PEMINJAM</option>
                    </select>
    <input type="submit" name="klik" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    
      <?php
                    if(isset($_POST['klik']))
                    {
                        $kode=  mysql_real_escape_string($_POST['kode']);
                        $pass=mysql_real_escape_string(md5($_POST['pass']));
                        $level=$_POST['level'];
                        if($level=="admin")
                        {
                            //ADMIN
                            $sql=mysql_query("select * from admin where login_username='$kode' ");
                            echo mysql_error();
                            if(mysql_num_rows($sql)>0)
                            {
                                $r=  mysql_fetch_array($sql);
                                if($r['login_password']==$pass)
                                {
                                    $_SESSION['level']='admin';
                                    $_SESSION['user']=$kode;
                                    
                                    echo"PASSWORD BENAR !! LANJUTKAN !! <br />";
                                    echo alert('Berhasil Login');
                                    echo pindah('home');
                                }
                                else
                                {
                                    echo"PASSWORD SALAH, SILAHKAN PERIKSA KEMBALI !";
                                }
                            }
                            else
                            {
                                echo"USERNAME/KODE : <b>$kode</b>, Tidak Terdaftar di DATABASE !";
                            }
                            
                        }
                        else if($level=="petugas")
                        {
                            //PETUGAS
                            $sql=mysql_query("select * from petugas where username='$kode' ");
                            echo mysql_error();
                            if(mysql_num_rows($sql)==1)
                            {
                                $r=  mysql_fetch_array($sql);
                                if($r['password']==$pass)
                                {
                                    
                                    $_SESSION['level']='petugas';
                                    $_SESSION['kode']=$r['petugas_kode'];
                                    $_SESSION['user']=$kode;
                                    
                                    echo"PASSWORD BENAR !! LANJUTKAN !! <br />";
                                    echo alert('Berhasil Login !');
                                    echo pindah('home');
                                }
                                else
                                {
                                    echo"PASSWORD SALAH, SILAHKAN PERIKSA KEMBALI !";
                                }
                            }
                            else
                            {
                                echo"USERNAME/KODE : <b>$kode</b>, Tidak Terdaftar di DATABASE !";
                            }
                        }
                        else
                        {
                            //USER
                            $sql=mysql_query("select * from peminjam where username='$kode' ");
                            echo mysql_error();
                            if(mysql_num_rows($sql)==1)
                            {
                                $r=  mysql_fetch_array($sql);
                                if($r['password']==$pass)
                                {
                                    
                                    $_SESSION['level']='user';
                                    $_SESSION['kode']=$r['peminjam_kode'];
                                    $_SESSION['user']=$kode;
                                    
                                    echo"PASSWORD BENAR !! LANJUTKAN !! <br />";
                                    echo alert('Berhasil Login !');
                                    echo pindah('home');
                                }
                                else
                                {
                                    echo"PASSWORD SALAH, SILAHKAN PERIKSA KEMBALI !";
                                }
                            }
                            else
                            {
                                echo"USERNAME/KODE : <b>$kode</b>, Tidak Terdaftar di DATABASE !";
                            }
                        }
                        echo mysql_error();
                    }
                    ?>
      <br/><a href="<?=$url?>/home">Home</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>