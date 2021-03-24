<?php include"config/setting.php"; ?>
<?php
if(empty($_SESSION['level']) || $_SESSION['level']=='user')
{
    pindah("$url/home");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<link rel="shortcut icon" href="<?=$url?>/images/logo-ab.png"/>
<style>
    table{border-collapse: collapse}
    table td{padding:5px}
    table th{padding:5px}
</style>
</head>

<body>
<table style="width:65%;margin:auto" border="0">
  <tr>
    <td valign="top"><img src="<?=$url?>/images/logo-ab.png"width="150" height="150" style="float:left"alt="Logo" />
      <center>
    <b style="font-size:23px">YAYASAN ABDI BANGSA PEMBANGUNAN INDONESIA</b><br/>
    <span style="font-size:19px;font-weight:bold">SEKOLAH MENENGAH KEJURUAN (SMK) KOMPUTER<br />
		<font color="red" >ABDI BANGSA</font></span><br/>
        
        <span style="font-size:18px;text-align:center">
        	<b style="font-size:20px;">Sekolah Berbasis Komputer dan Bahasa Inggris</b><br />
			
            <span style="font-size:16px">Jalan Karamat Nomer 55 Telp. 0266-236299 Fax. 0266-218316 Sukabumi 43122 Jawa Barat <br/>
			Email : smkabdibangsa@yahoo.com http://www.smkkomputer-abdibangsa.sch.id<br />
			<i style="font-size:14px">Teraktreditasi : B Ban-S/M NO. 02.00/209/BAP-SM/SKA/2012</i>
            
            </span>
            </span>
            </center>
            
        </span>
        
        	
    
    <div style="border-bottom:1px black solid;margin-bottom:2px"></div>
    <div style="border-bottom:4px black solid"></div>
    </center>
    </td>
    
  </tr>
  <tr >
    <td >
        <?php
        @$menu=$_GET['menu'];

        switch($menu)
        {
            case"buku":
                include"page/laporan_buku.php";
            break;
			case"peminjaman":
                include"page/laporan_pinjam_belum.php";
				
            break;
			
			case"kembalian":
                include"page/laporan_pinjam_sudah.php";
            break;
			case"priodik":
                include"page/laporan_priodik.php";
            break;
            default :
                include"error/404.html";
            break;
        }
        ?>
        
    </td>
  </tr>
  <tr>
  	<td align="left">
    	<hr/>
        <div style="color:#999;text-align:right">SMK Komputer Abdi Bangsa | 55
    </td>
  </tr>
</table>
    <script>
       //window.print();
    </script>
</body>
    
</html>