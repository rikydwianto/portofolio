<h2>Data Peminjam</h2>
<a href='<?=$url?>/tambah/peminjam'id=btn style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" width="20px" style="float:left; "/> Tambah</a>
<table id="tbl">
    	<tr>
    <td >No.</td>
    <td >Kode</td>
    <td >Nama</td>
    <td >Alamat</td>
    <td >Telpon</td>
    <td >Username</td>
    <td >Photo</td>
    <td >#</td>
    </tr>
    <?php
	$no=1;
	$sql=mysql_query("select * from peminjam order by peminjam_kode desc");
	while($r=mysql_fetch_object($sql))
	{
	?>
    <tr>
    <td ><?=$no;$no++;?></td>
    <td ><?=$r->peminjam_kode?></td>
    <td ><?=$r->peminjam_nama?></td>
    <td ><?=$r->peminjam_alamat?></td>
    <td ><?=$r->peminjam_telp?></td>
    <td ><?=$r->username?></td>
    <td ><img src="<?=$url?>/images/photo/<?=$r->peminjam_foto?>" style="" width="50px"title="Edit"></td>
    <td >
    	<a href='<?=$url?>/edit/peminjam/<?=$r->peminjam_kode?>'><img src="<?=$url?>/images/icons/pencil32.png" width="15px" title="Edit"/></a>
        <a href='<?=$url?>/hapus/peminjam/<?=$r->peminjam_kode?>'><img src="<?=$url?>/images/icons/stop32.png" width="15px" title="Hapus"></a>
        </td>
    </tr>
    <?php
	}
	?>
    <tr>
    	<td colspan="8"></td>
    </tr>
</table>