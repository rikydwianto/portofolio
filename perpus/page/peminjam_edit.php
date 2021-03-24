<title>Proses / <?=$title?></title><h2>Edit Peminjam</h2>
<?php
@$sql=mysql_query("select * from peminjam where peminjam_kode='$_GET[peminjam_kode]'");
if(mysql_num_rows($sql)==0)
{
	include"error/404.html";
	pindah("$url/peminjam");
}
$r=mysql_fetch_object($sql);

?>
<form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
<table id="tbl">
	<tr>
    	<td colspan="2">Peminjaman : </td>
    </tr>
    <tr>
		<td>Kode Peminjam</td>
        <td><input type=text name="kode" readonly="" value="<?=$r->peminjam_kode?>"/></td>    
    </tr>
        <tr>
		<td>Nama Peminjam</td>
        <td><input type=text name="nama" value="<?=$r->peminjam_nama?>"/></td>    
    </tr>
        <tr>
		<td>Alamat Peminjam</td>
        <td><input type=text name="alamat"value="<?=$r->peminjam_alamat?>" /></td>    
    </tr>
        <tr>
		<td>Telp Peminjam</td>
        <td><input type=number name="telp" value="<?=$r->peminjam_telp?>"/><input type="hidden" name=old value="<?=$r->peminjam_foto?>"></td>    
    </tr>
        <tr>
		<td>Foto </td>
        <td>
        	<img src='<?=$url?>/images/photo/<?=$r->peminjam_foto?>' width="100"height='100'/>
	        <input type=file name="file" />
		</td>    
    </tr>
        <tr>
		<td>Username</td>
        <td><input type=text name="username" value="<?=$r->username?>" /></td>    
    </tr>
        <tr>
		<td>Password</td>
        <td><input type=text name="password" />*)<br/>
        	*) Jangan isi password jika tidak mengeditnya
        </td>    
    </tr>
        <tr>
		<td></td>
        <td><input type=submit value="Tambah"name="peminjam-edit" /></td>    
    </tr>
</table>
</form>