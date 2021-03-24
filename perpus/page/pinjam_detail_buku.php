<?php
$peminjam=  mysql_fetch_array(mysql_query("select * from peminjam where peminjam_kode='$Peminjam_kode'"));

?>
<?php
    if(isset($_POST['hapus-banyak']))
    {
        @$id=$_POST['hapus'];
        $h=count($id);
        if($h==0)
        {
            echo"<script>alert('Tidak ada yang dipilih  ');</script>";
            
        }
        for($i=0;$i<$h;$i++)
        {
           mysql_query("delete from detail_pinjam where buku_kode='$id[$i]' and peminjaman_kode='$Pinjam_kode'");
            echo mysql_error();
        }
    }
    ?>
<?php
    if(isset($_POST['hapus-semua']))
    {
        mysql_query("delete from detail_pinjam where peminjaman_kode='$Pinjam_kode'");
		alert("BERHASIL MENGAPUS DATA");
    }
    ?>
    <form method="post">
<table id="tbl">
	<tr>
    	<td colspan="3">Detail Pinjam</td>
    <tr>
        <td>Nomer Pinjam</td>
        <td><?=$Pinjam_kode?></td>
        <td rowspan="6">
        	<center><img src="<?=$url?>/images/photo/<?=$peminjam['peminjam_foto'];?>" alt="<?=$peminjam['peminjam_kode'];?>" width="100px" height="150px" /></center>
        </td>
    </tr>
    <tr>
        <td>Kode Peminjam</td>
        <td><?=$peminjam['peminjam_kode'];?></td>
    </tr>

    <tr>
        <td>Nama Peminjam</td>
        <td><?=$peminjam['peminjam_nama'];?></td>
    </tr>
    <tr>
        <td>Tanggal Pinjam</td>
        <td><?=date("Y-m-d")?></td>
    </tr>
    <tr>
        <td>Tanggal Harus Kembali</td>
        <td><?=$tgl?></td>
    </tr>
    <tr>
        <td>Waktu Pinjam</td>
        <td><?=date("h:i:s")?></td>
    </tr>
    
</table>

<table id="tbl">
    <tr>
        <td colspan="3">BUKU</td>
    </tr>
    <tr>
            
                <tr>
                    <td colspan="2">No. </td>
                <td>Judul</td>
                
                
                </tr>
                <?php
                $buku=mysql_query("select * from detail_pinjam,buku where detail_pinjam.buku_kode=buku.buku_kode and detail_pinjam.peminjaman_kode='$Pinjam_kode' ");
                $no=1;
                $di=  mysql_num_rows($buku);
                
                while($ambil_buku=  mysql_fetch_array($buku))
                {
                    echo"<tr>
                        <td colspan='2'>$no. <input type='checkbox' name='hapus[]' value='$ambil_buku[buku_kode]'></td>
                        <td>$ambil_buku[buku_judul]</td>
                        </tr>
                    ";
                    $no++;
                }
                if($di==0)$c="disabled=''";
                else $c="";
                ?>
            
            
                <td colspan="3">
                <input type="submit" value="SAVE PINJAM" name="pinjam" <?=$c;?> >
                <input type="submit" name="hapus-banyak" value="MULTI HAPUS" <?=$c;?> >
                <input type="submit" value="HAPUS SEMUA" name="hapus-semua"onclick="return confirm('MENGHAPUS SEMUA DATA ?')" <?=$c?>>
                </td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['pinjam']))
{
    mysql_query("insert into peminjaman values('$Pinjam_kode','$Petugas_kode','$Peminjam_kode',curdate(),'$tgl')");
    unset($_SESSION['Peminjam_kode']);
    unset($_SESSION['Pinjam_kode']);
    alert('Berhasil Disimpan di DB');
	pindah("$url/pinjam");
}
?>