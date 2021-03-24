      <script src="<?=$url?>/lib/sweet-alert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=$url?>/lib/sweet-alert.css"/>

<?php
include_once 'config/setting.php';
session_destroy();

echo alert('Berhasil Logout ');
echo pindah("$url");
?>
