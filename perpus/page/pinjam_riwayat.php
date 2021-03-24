<h2>Riwayat Peminjaman</h2>
<?php
$total1=0;
$kode=$_SESSION['kode'];
$q=mysql_query("select datediff(curdate(),peminjaman_tgl_kembali)*500 as denda,buku.*,detail_pinjam.*,peminjaman.* from detail_pinjam natural join buku natural join peminjaman where peminjam_kode='$kode' and detail_status_kembali='' order by peminjaman_tgl desc");
echo mysql_error();

?>
<h2>Yang Belum dikembalikan</h2>
<table border="1" id="tbl">
    <tr>
        <td>No. </td>
        <td>Judul Buku</td>
        <td>Tanggal Pinjam</td>
        <td>Tanggal Harus Kembali</td>
        <td>Denda</td>
    </tr>
    <?php
    $no=1;
    if(mysql_num_rows($q)==0)
    {
        ?>
    <tr><td colspan="5" ><b align="center">TIDAK ADA !!</b></td></tr>
        <?php
    }
    else
    {
    while($R=  mysql_fetch_object($q))
    {
        if($R->detail_status_kembali=='')
        {
            $status="Belum Dikembalikan";
        }
        else
        {
            $status="Sudah Kembali";
        }
        if($R->denda>0)$den=$R->denda*500;
		else $den=0;
        ?>
    <tr>
        <td><?=$no;?>.</td>
        <td><?=$R->buku_judul?></td>
        <td><?=$R->peminjaman_tgl?></td>
        <td><?=$R->peminjaman_tgl_kembali?></td>
        <td>Rp. <?=$den?></td>
    </tr>
    <?php
    $no++;
    $total1=$total1+$den;
    }
    }
    ?>
    <tr><td colspan="4" ><b align="left">JUMLAH</b></td>
        <td >Rp. <?=$total1?></td>
    </tr>
</table>
<br />

<h2>Yang sudah dikembalikan</h2>
<?php
$tdenda=0;
$kode=$_SESSION['kode'];
$q1=mysql_query("select datediff(curdate(),peminjaman_tgl_kembali) as denda,buku.*,detail_pinjam.*,peminjaman.* from detail_pinjam natural join buku natural join peminjaman where peminjam_kode='$kode' and detail_status_kembali='sudah' order by peminjaman_tgl_kembali desc");
echo mysql_error();

?>
<table border="1" id="tbl">
    <tr>
        <td>No. </td>
        <td>Judul Buku</td>
        <td>Tanggal Pinjam</td>
        <td>Tanggal Kembali</td>
        <td>Denda</td>
    </tr>
    <?php
    $no=1;
    if(mysql_num_rows($q1)==0)
    {
        ?>
    <tr><td colspan="5" ><b align="center">TIDAK ADA !!</b></td></tr>
        <?php
    }
    else
    {
    while($R1=  mysql_fetch_object($q1))
    {
        if($R1->detail_status_kembali=='')
        {
            $status="Belum Dikembalikan";
        }
        else
        {
            $status="Sudah Kembali";
        }
        if($R1->denda>0)$td1=$R1->denda*500;
		else $td1=0;
        ?>
    <tr>
        <td><?=$no;?>.</td>
        <td><?=$R1->buku_judul?></td>
        <td><?=$R1->peminjaman_tgl?></td>
        <td><?=$R1->detail_tgl_kembali?></td>
        <td>Rp. <?=$td1?></td>
    </tr>
    <?php
    $no++;
    $tdenda=$tdenda+$td1;
    }
    }
    ?>
    <tr><td colspan="4" ><b align="left">JUMLAH</b></td>
        <td ><?=$tdenda?></td>
    </tr>
</table>