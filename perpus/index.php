<?php include"config/setting.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?=$title;?></title>
<link rel="shortcut icon" href="<?=$url?>/images/logo-ab.png">
<link type="text/css" media="screen" rel="stylesheet" href="<?=$url;?>/stylesheets/reset.css" />
<link type="text/css" media="screen" rel="stylesheet" href="<?=$url;?>/stylesheets/main.css" />
  <script src="<?=$url?>/lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=$url?>/lib/sweet-alert.css"/>

</head>
<body  >
  <div id="header">
      <a href="<?=$url;?>/home"><img src="<?=$url?>/images/logo-ab.png" width="140" style=";float: left;margin-right: 20px;margin-top:5px; "height="140" alt="Logo AB" /></a>
  	<h1><a href="<?=$url;?>/home">SMK KOMPUTER <span style="color:#F00">ABDI BANGSA</span></a></h1>
    <strong><b>SEKOLAH BERBASIS KOMPUTER DAN BAHASA INGGRIS</b></strong>
    <ul id="social-media">
    <li class="item-1"><a href="http://facebook.com/batox65" target="_blank">Facebook</a></li>
        <li class="item-2"><a href="http://twitter.com/riky_ab" target="_blank">Twitter</a></li>
        <li class="item-3"><a href="http://boksing.cyber4rt.com" target="_blank">RSS</a></li>
    </ul>
    <h2><?=$title;?></h2>
    <?php include"config/menu.php";?>
  </div>
  <!-- //#header -->
	
  <div id="content">
  	<div id="content-inner" class="clearfix">
    	<?php
        include"config/main.php";
        
        ?>
        <!-- //.column -->
        </div>
    <!-- //#content-inner -->
  </div>
  <!-- //#content -->
  <div id="footer">
  	<div id="footer-inner">
        <p><strong><a href="http://twitter.com/riky_ab">&copy;Riky_AB</a></strong> <span>|</span> <strong><a href="http://www.facebook.com/batox65" title="Facebook">Riky Dwianto</a></strong></p>
    </div>
    <!-- //#footer-inner -->
  </div>
  
  <!-- //#footer -->
</body>
</html>