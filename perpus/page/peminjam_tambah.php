<?php
$sql=  mysql_fetch_array(mysql_query("select max(peminjam_kode) as akhir from peminjam"));
if($sql['akhir']=="NULL")
{
    $kode="PMN0001";
}
else
{
    $pecah= (int) substr($sql['akhir'],4)+1;
    $kode="PMN".sprintf("%04s",$pecah);
}
?>
<h2>Tambah Peminjam</h2>
<form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
<table id="tbl">
	<tr>
    	<td colspan="2">Tambah Peminjaman</td>
    </tr>
    <tr>
		<td>Kode Peminjam</td>
        <td><input type=text name="kode" readonly="" value="<?=$kode?>"/></td>    
    </tr>
        <tr>
		<td>Nama Peminjam</td>
        <td><input type=text name="nama" required/></td>    
    </tr>
        <tr>
		<td>Alamat Peminjam</td>
        <td><input type=text name="alamat" required/></td>    
    </tr>
        <tr>
		<td>Telp Peminjam</td>
        <td><input type=number name="telp" required/></td>    
    </tr>
        <tr>
		<td>Foto </td>
        <td><input type=file name="file" /></td>    
    </tr>
        <tr>
		<td>Username</td>
        <td><input type=text name="username" required/></td>    
    </tr>
        <tr>
		<td>Password</td>
        <td><input type=text name="password" required/></td>    
    </tr>
        <tr>
		<td></td>
        <td><input type=submit value="Tambah"name="peminjam-tambah" /><input type="reset" value="Reset"/></td>    
    </tr>
</table>
</form>