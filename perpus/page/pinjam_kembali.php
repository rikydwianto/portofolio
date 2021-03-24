<h2>Pengembalian Buku</h2>
<?php
if(isset($_POST['reset']))
{
	unset($_SESSION['Pkembali_kode']);
}
if(isset($_POST['cari']))
{
	@$nama=$_POST['peminjam_kode'];
	@$kode=$_POST['peminjam_kode1'];
	@$CEK="";
	
	if($nama!="" && $kode!="")
	{
		$CEK="";
		alert("Pilih salah satu saja !");
	}
	else if($nama=="" && $kode=="")
	{
		$CEK="";
		alert("JANGAN KOSONG KEDUANYA, HARAP ISI SALAH SATU !!");
	}
	else if($nama!="")
	{
		$CEK=$nama;	
	}
	else if($kode!="")
	{
		$CEK=$kode;	
	}
	
	if($CEK!="")
	{
		@$cari=mysql_real_escape_string(strtoupper($_POST['peminjam_kode']));
		$query=mysql_query("select * from detail_pinjam natural join peminjaman natural join peminjam where peminjam_kode='$CEK' and detail_status_kembali=''");
	
		$cek=mysql_num_rows($query);
		$hitung=mysql_num_rows(mysql_query("select * from peminjaman where peminjam_kode='$CEK'"));
		$hit_user=mysql_num_rows(mysql_query("select * from peminjam where peminjam_kode='$CEK'"));
		if($hit_user==0)
		{
			alert("TIDAK ADA PEMINJAM DENGAN KODE : $cari");
			$_SESSION['Pkembali_kode']='';
		}
		else
		{
			if($hitung==0)
			{
				alert("$cari BELUM PERNAH MEMINJAM BUKU");
				$_SESSION['Pkembali_kode']='';
			}
			else 
			{
				if(mysql_num_rows($query)==0)
				{
					alert("TIDAK ADA BUKU YANG HARUS DIKEMBALIKAN");
					$_SESSION['Pkembali_kode']='';
				}
				else
				{
					$_SESSION['Pkembali_kode']=$CEK;
				}
			}
		}
	}
	$_SESSION['Pkembali']='';
	
	
echo mysql_error();
}
@$Pkembali_kode=$_SESSION['Pkembali_kode'];
?>
<table id="tbl">
<form action="" method="post">
	<input type="submit" name="reset" value="RESET" /> </form>
	<tr>
    	<td colspan="4">Pengembalian Buku</td>
    </tr>
    <tr>
    	<td>KODE PEMINJAM</td>
        <td><form action="" method="post"><input type="text" name="peminjam_kode" placeholder="KODE PEMINJAM . . . " value=""></td>
        <td>
        	<select name='peminjam_kode1'>
            <option value="" >Pilh Peminjam</option>
            <?php
				$sql=mysql_query("select * from peminjam order by peminjam_kode desc");
				while($P=mysql_fetch_object($sql))
				{
					?>
					<option value='<?=$P->peminjam_kode?>' ><?=$P->peminjam_kode?> - <?=$P->peminjam_nama?></option>
                    <?php	
				}
			?>
            </select>
        </td>
        <td><input type="submit" name="cari" value="CARI"/></form></td>
    </tr>
    <?php
	if(!empty($Pkembali_kode))
	{
		$sql=mysql_query("select * from detail_pinjam natural join peminjaman natural join peminjam where peminjam_kode='$Pkembali_kode' and detail_status_kembali=''");
		$user=mysql_fetch_object($sql);
		echo mysql_error();
		$q=mysql_query("select datediff(curdate(),peminjaman_tgl)  as denda,buku.*,detail_pinjam.*,peminjaman.* from detail_pinjam natural join buku natural join peminjaman where peminjam_kode='$Pkembali_kode' and detail_pinjam.detail_status_kembali=''");

		$denda=0;
		while($ww=mysql_fetch_object($q))
		{
		$denda=$denda+($ww->denda * 500);
		}
	?>
    <tr>
    <td>KODE</td>
    <td><?=$user->peminjam_kode?></td>
    <td rowspan="4" colspan="2">
    <center><img src="<?=$url?>/images/photo/<?=$user->peminjam_foto?>" alt="<?=$user->peminjam_nama?>" width="100px" height="100px"/></center>
    </td>
	</tr>
      <tr>
        <td>NAMA</td>
        <td><?=$user->peminjam_nama?></td>
      </tr>
      <tr>
        <td>TOTAL DENDA</td>
        <td><b>Rp. <?=$denda?></b></td>
       </tr>
       
   <?php
   }
   ?>
</form>
</table><br>
<br>
<?php
if(!empty($Pkembali_kode))
{
	$no=1;
	?>
    <table id="tbl">
    	<tr>
        	<td colspan="6">
            Detail Buku
            </td>
        </tr>
        <tr>
            <td width="20px">NO.</td>
            <td ><center>Judul Buku</center></td>
            <td><center>Tanggal Pinjam</center></td>
            <td><center>Telat</center></td>
            <td><center>Denda</center></td>
            <td></td>
        </tr>
        <?php
		$hari=0;
		$q2=mysql_query("select datediff(curdate(),peminjaman_tgl)  as denda,buku.*,detail_pinjam.*,peminjaman.* from detail_pinjam natural join buku natural join peminjaman where peminjam_kode='$Pkembali_kode' and detail_pinjam.detail_status_kembali=''");
		while($rinci=mysql_fetch_object($q2))
		{
		?>
        <tr>
            <td width="20px" valign="top"><?=$no;$no++;?></td>
            <td valign="top"><?=$rinci->buku_judul?></center></td>
            <td valign="top"><?=$rinci->peminjaman_tgl?></td>
            <td valign="top"><?=$rinci->denda?>Hari</td>
            <td valign="top">Rp. <?=$s=($rinci->denda)*500?>  </td>
            <td >
            	<center ><a href="<?=$url?>/kembalian-<?=str_rot13($s)?>_<?=$rinci->buku_kode?>_<?=$rinci->peminjaman_kode?>.html" title="Kembalikan"><img src="<?=$url?>/images/icons/leftturnarrow32.png" width="25px" /></a></center>
            </td>
        </tr>
        <?php
		$hari=$hari+$rinci->denda;
		}
		?>
        <tr>
            <td colspan="3"><b>Total</b> </td>
			<td><b><?=$hari?>Hari</b> </td>
            <td><b>Rp. <?=$denda?></b></td>
            <td>&nbsp;</td>

        </tr>
    </table>
    
    <?php
}
?>