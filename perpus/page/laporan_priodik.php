<script src="<?=$url?>/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="<?=$url?>/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<h1>Laporan Peminjam <?=$status=$_SESSION['Status']?> Kembali</h1>
<h3>Dari Tanggal : <?=$tglAwal=$_SESSION['tglAwal']?> Sampai <?=$tglAkhir=$_SESSION['tglAkhir']?>  </h3>
<?php
$a="";
if($status=="belum")$a="";
else $a="sudah";
?>
<table border="1">
<tr>
<th>No. </th>
<th>Nama</th>
<th>Judul Buku</th>
<th>Tanggal Pinjam</th>
<th>Telat</th>
<th>Denda</th>
</tr>
<?php
$sql=mysql_query("select datediff(curdate(),peminjaman.peminjaman_tgl) as hari,detail_pinjam.*, peminjaman.*, buku.*,peminjam.* from detail_pinjam natural join buku natural join peminjaman natural join peminjam where detail_status_kembali='$a' and peminjaman_tgl between '$tglAwal' and '$tglAkhir'");
echo mysql_error();
$no=1;
$total=0;

while($r=mysql_fetch_object($sql))
{
	?>
    <tr>
        <td ><?=$no;$no++;?></td>
        <td ><?=$r->peminjam_nama?></td>
        <td><?=$r->buku_judul?></td>
        <td><?=$r->peminjaman_tgl?></td>
        <td><?=$r->hari?> Hari</td>
	    <td>Rp. <?=$r->hari*500?></td>
    </tr>
    
    <?php
	$total=$total+($r->hari*500);
}
?>
<tr><td colspan="5">Jumlah Denda</td>
<td>Rp. <?=$total?></td>
</tr>
</table>