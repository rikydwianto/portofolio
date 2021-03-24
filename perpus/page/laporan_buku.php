<h2>Laporan Buku</h2>
<div style="min-height:400px;">
    <p >
    <table id="tbl" border="1">
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Pengarang</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
        </tr>
        
        <?php
        $no=1;
        $total=0;
        $sql=mysql_query("select * from buku natural join kategori natural join penerbit order by buku_kode desc");
        while($r=  mysql_fetch_object($sql))
        {
            ?>
        <tr>
            <td valign="top"><?=$no;?>.</td>
            <td valign="top"><?=$r->buku_kode?></td>
            <td valign="top"><?=$r->buku_judul?></td>
            <td valign="top"><?=$r->buku_thn_terbit?></td>
            <td valign="top"><?=$r->buku_pengarang?></td>
            <td valign="top"><?=$r->kategori_nama?></td>
            <td valign="top"><?=$r->penerbit_nama?></td>
            <td valign="top"><?=$r->buku_jumlah?></td>
        </tr>
            <?php
            $total=$total+$r->buku_jumlah;
            $no++;
        }
        ?>
        <tr>
            <td colspan="7">Jumlah</td>
            <td ><?=$total?></td>
        </tr>
    </table>


</p>
</div>