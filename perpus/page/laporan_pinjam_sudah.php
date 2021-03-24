<h1>Laporan Peminjam Sudah Kembali</h1>

<table border="1">
<tr>
	<th>No.</th>
    <th>Nama</th>
    <th>Jumlah buku yang dipinjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal harus kembali</th>
    <th>Telat</th>
    <th>Denda</th>
</tr>
<?php
$no=1;
$sql=mysql_query("select count(*) as jumlah,datediff(curdate(),peminjaman_tgl) as denda,peminjaman.*,peminjam.* from detail_pinjam natural join peminjam natural join peminjaman where detail_pinjam.detail_status_kembali='sudah' group by peminjam.peminjam_kode order by peminjaman.peminjaman_tgl desc");
while($r=mysql_fetch_object($sql))
{
	?>
<tr>
	<td><?=$no;$no++;?></td>
    <td><?=$r->peminjam_nama?></td>
    <td><?=$r->jumlah?></td>
    <td><?=$r->peminjaman_tgl?></td>
    <td><?=$r->peminjaman_tgl_kembali?></td>
    <td>&nbsp;</td>
    <td></td>
    <tr>
	    <th colspan="2">No.</th>
        <th colspan="1">Rinci  Buku</th>
        <th colspan="1">Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <?php
	$sql1=mysql_query("select datediff(curdate(),peminjaman_tgl)  as denda,buku.*,detail_pinjam.*,peminjaman.* from detail_pinjam natural join buku natural join peminjaman where peminjam_kode='$r->peminjam_kode' and detail_pinjam.detail_status_kembali='sudah'");
	echo mysql_error();
	$no1=1;
	$total=0;
	$telat=0;
	while($R=mysql_fetch_object($sql1))
	{
		$tot=($R->denda)*500;
	?>
	<tr>
        <th colspan="2"><?=$no1;$no1++;?>.</td>
        <td colspan="1"><?=$R->buku_judul?></td>
        <td><?=$R->peminjaman_tgl?></td>
        <td><?=$R->detail_tgl_kembali?></td>
        <td><?=$R->denda?> Hari</td>
        <td><?=$tot;$total=$tot+$total?></td>
	</tr>
    <?php
	$telat=$telat+$R->denda;
	}
	
	?>
	
	<tr>
    	<td colspan="5">Total</td>
        <th><?=$telat?> Hari</th>
        <th><?=$total?></th>
    </tr>
    <?php	
}
?>

</table>