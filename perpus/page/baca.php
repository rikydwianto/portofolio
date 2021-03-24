<?php

@$id=$_GET['id'];
$sql=mysql_query("select replace(isi_artikel,'\n','<br/>') as isi,artikel.*,kategori_artikel.* from artikel natural join kategori_artikel where id_artikel='$id'");
$cek=  mysql_fetch_object($sql);
if(mysql_num_rows($sql)==0)
{
    header("location:$url/error/404.html");
}
else
{
    mysql_query("update artikel set dibaca=dibaca+1 where id_artikel='$id'");
    
?>

<h2><?=$cek->judul?></h2>
<p>Kategori : <?=$cek->nama_kategori?><br/>
Dibaca : <?=$cek->dibaca?><br/>
oleh <b>Admin</b> Pada <?=$cek->tgl_posting?> <?=$cek->waktu?>

</p>
<img src="<?=$url?>/images/artikel/<?=$cek->tumbnail?>" style="width: 100%;max-height: 50%;"/>
<p style="padding: 5px">
    
    <?=$cek->isi?>
    
</p>
<?php
}
?>