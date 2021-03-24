<p><br>
  <br>
</p>
<form action="" method="post">
<table width="200" id=tbl>
  <tr>
    <td colspan="3">LAPORAN PER PRIODIK</td>
  </tr>
  <tr>
    <td rowspan="2" width="30px">TANGGAL</td>
    <td width="30px">AWAL</td>
    <td>
      <input type="date" name="tgl_awal" required="" id="tgl_awal">
      *)
   ex : <b><?=date("Y-m-d")?></b></td>
  </tr>
  <tr>
    <td width="30px">SAMPAI</td>
    <td><input type="date" name="tgl_akhir" required="" id="tgl_akhir" />
    *) ex : <b><?=date("Y-m-d")?></b></td>
  </tr>
    <tr>
    <td width="30px">STATUS</td>
    <td>&nbsp;</td>
    <td>
      <select name="status" id="status" required="">
        <option selected value="">Pilih Status</option>
        <option value="belum">Belum Kembali</option>
        <option value="sudah">Sudah Kembali</option>
      </select>
    </td>
  </tr>
  <tr>
  	<td></td>
    <td></td>
    <td><input name="lihat" type="submit" value="LIHAT LAPORAN"></td>
  
  </tr>
  <?php
	if(isset($_POST['lihat']))
	{
		@$_SESSION['tglAwal']=$_POST['tgl_awal'];
		@$_SESSION['tglAkhir']=$_POST['tgl_akhir'];
		@$_SESSION['Status']=$_POST['status'];
		alert("TUNGGU SEBENTAR . . . .");
		pindah("$url/laporan-priodik");
	}
  ?>
</table>
<p>&nbsp; </p>
</form>