<h2>LAPORAN</h2>
<table id="tbl">
    <tr>
        <td colspan="2">Pilih Laporan</td>
    </tr>
    <tr>
        <td >1.</td>
        <td ><a href="<?=$url?>/laporan/buku" target="_blank">Laporan Buku</a></td>
    </tr>
    <tr>
        <td >2.</td>
        <td ><a href="<?=$url?>/laporan/kembalian" target="_blank">Laporan Peminjam buku yang sudah kembali</a></td>
    </tr>
    <tr>
        <td >3.</td>
        <td ><a href="<?=$url?>/laporan/peminjaman" target="_blank">Laporan Peminjam buku yang Belum kembali</a></td>
    </tr>
    <tr>
        <td >4.</td>
        <td ><a href="<?=$url?>/laporan/priodik" target="_blank">Laporan Per Priodik</a></td>
    </tr>
    <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
    </tr>
</table>
<?php
if(isset($_GET['act'])=="priodik")include("page/laporan_priodik_1.php");

?>