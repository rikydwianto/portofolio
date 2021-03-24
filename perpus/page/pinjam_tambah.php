<h2>Tambah Peminjaman</h2>
<?php
if(isset($_POST['reset']))
{
	unset($_SESSION['Peminjam_kode']);	
	unset($_SESSION['Pinjam_kode']);
}
?>
<?php
    $tgl1=date("ymd");
    
   $akhir=  mysql_fetch_array(mysql_query("select max(peminjaman_kode) as akhir from peminjaman where peminjaman_kode like'%$tgl1%'"));
    if($akhir['akhir']=="")$_SESSION['Pinjam_kode']=$tgl1."-001";
    else
    {
        $Pkode=  substr($akhir['akhir'], 7)+1;
        $_SESSION['Pinjam_kode']=$tgl1."-".sprintf("%03s",$Pkode);
    }
	
	
	if(isset($_POST['next']))
	{
		@$nama=$_POST['nama'];
		@$kode=$_POST['kode'];
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
			
			$hitung=mysql_num_rows(mysql_query("select * from peminjaman natural join detail_pinjam where peminjam_kode='$CEK' and detail_status_kembali=''"));
			$hit_user=mysql_num_rows(mysql_query("select * from peminjam where peminjam_kode='$CEK'"));
			if($hit_user==1)
			{
				
				if($hitung>0)
				{
					$_SESSION['Peminjam_kode']="";
					alert("UNTUK MEMINJAM BUKU BARU, KEMBALIKAN BUKU YANG LALU !!");	
				}
				else
				{
						$_SESSION['Peminjam_kode']=$CEK;
				}
			}
			else
			{
				alert("TIDAK ADA PEMINJAM DENGAN KODE : ".strtoupper($CEK));	
			}
		}
		else
		{
			$_SESSION['Peminjam_kode']="";

		}
	}
	

	//VARIABLE
	@$Pinjam_kode=$_SESSION['Pinjam_kode'];
	@$Peminjam_kode= $_SESSION['Peminjam_kode'];
	@$Petugas_kode= $_SESSION['kode'];

	if(isset($_POST['tambah-buku']))
	{
		
		@$buku_kode=$_POST['kode_buku'];
		@$buku_kode1=$_POST['kode_buku1'];
		
		@$c="";
		if($buku_kode!="" && $buku_kode1!="")
		{
			$c="";
			alert("PILIH SALAH SATU UNTUK MENGINPUTKAN BUKU !!");
		}
		else if($buku_kode=="" && $buku_kode1=="")
		{
			$c="";
			alert("JANGAN DIKOSONGKAN KEDUANYA, HARAP MEMILIH SALAH SATU FROM PEMINJAMAN BUKU !!");
		}
		else if($buku_kode!="")
		{
			$c=$buku_kode;	
		}
		else if($buku_kode1!="")
		{
			$c=$buku_kode1;	
		}
		$cek=mysql_num_rows(mysql_query("select * from detail_pinjam where peminjaman_kode='$Pinjam_kode' and buku_kode='$c'"));
		if ($cek==1)
		{
			alert("TIDAK BOLEH ADA BUKU YANG SAMA!");	
		}
		else
		{
			
				$q=mysql_query("insert into detail_pinjam(peminjaman_kode,buku_kode)values('$Pinjam_kode','$c')");
				if($q)
				{
					alert("BUKU BERHASILDITAMBAHKAN !!");		
				} 
				else
				{
					alert("BUKU GAGAL TIDAK DITAMBAHKAN : ".mysql_error());
				}
			echo mysql_error();
		}
		
	}
?>

	<form method=post><input type="submit" name='reset' value="Reset"></form>
     <table id="tbl">
    	<tr><td colspan="4">PINJAM</td></tr>
        <tr>
   		     <td>Nama Peminjam </td>
    		  <td> 
              	<form action="" method="post"><select name="nama">
                    <option value=""selected="">Cari & Pilih Peminjam</option>
                    <?php
                    $q=mysql_query("select * from peminjam order by peminjam_kode desc");
                    while($row=  mysql_fetch_array($q))
                    {
                    ?>
                    <option value="<?=$row['peminjam_kode'];?>"><?=$row['peminjam_kode'];?> -- <?=substr($row['peminjam_nama'],0,30);?></option>
                    <?php
                    }
                    ?>
                </select>
                </td>
                <td>
                 <input type="text" name="kode" value="<?=@$_SESSION['Peminjam_kode']?>" ="Input Kode Peminjam . . ."/> 
              
              
              </td>
              <td><input type="submit" name="next" value="NEXT"></td></form>
          </tr>
          <?php
		  if(!empty($Peminjam_kode))
		  {
			  ?>
          <tr>
          	<td >Buku</td>
          	<td>
           	<form action="" method="post"><select name="kode_buku">
            <option value=""selected="">Pilih Buku</option>
            <?php
            $q1=mysql_query("select * from buku where buku_jumlah>0 order by buku_kode desc");
            while($row1=  mysql_fetch_array($q1))
            {
            ?>
            <option value="<?=$row1['buku_kode'];?>"><?=$row1['buku_kode'];?> -- <?=substr($row1['buku_judul'],0,25);?></option>
            <?php
            }
            ?>
            </select>
            </td>
            <td>
            
            <input type='text' name='kode_buku1' placeholder='Input kode buku . . .' />
        
            </td>
            <td>
            	<input type="submit" name="tambah-buku" value="TAMBAH">
            </td>
            </form>
          </tr>
          <?php 
		  }?>
          </table>
          <?php
		  if(!empty($Peminjam_kode))include_once"pinjam_detail_buku.php";
		  ?>
    </form>