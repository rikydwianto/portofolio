<?php

@$id=$_GET['id'];
$sql=mysql_query("select * from buku natural join kategori natural join penerbit  where buku_kode='$id'");
$cek=  mysql_fetch_object($sql);
if(mysql_num_rows($sql)==0)
{
    include_once $url."/error/404.html";
}
else
{
    
    
    $isi=mysql_fetch_object(mysql_query("select replace('$cek->buku_diskripsi','\n','<br/>') AS isi	"));
?>

<p><img src="<?=$url?>/images/buku/<?=$cek->foto_buku?>" width="243" height="255" style="float:left; margin:10px"/></p>
<p><h2><?=$cek->buku_judul?></h2></p>
<p>
	<table border="0" style="font-size: 12px;
color: #515151;
line-height: 1.5;
margin-bottom: 20px;
text-align: justify;" >
	<tr>
    	<td>Pengarang</td>
        <td>&nbsp; : &nbsp;</td>
        <td><?=$cek->buku_pengarang?></td>
    </tr>
    <tr>
    	<td>Penerbit</td>
        <td>&nbsp; : &nbsp;</td>
        <td><?=$cek->penerbit_nama?></td>
    </tr>
    <tr>
    	<td>Kategori</td>
        <td>&nbsp; : &nbsp;</td>
        <td><?=$cek->kategori_nama?></td>
    </tr>
    <tr>
    	<td>Tahun Terbit</td>
        <td>&nbsp; : &nbsp;</td>
        <td><?=$cek->buku_thn_terbit?></td>
    </tr>
    <tr>
    	<td>Stok Buku</td>
        <td>&nbsp; : &nbsp;</td>
        <td><?=$cek->buku_jumlah?></td>
    </tr>
    
    

</table>
<h3>Deskripsi</h3>
<p><?=$isi->isi?></p>
</p>
  <?php
}
?>
  <br />
</p>