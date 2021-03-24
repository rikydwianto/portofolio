<?php 
$post=$_GET['post'];
$q=mysql_query("select * from artikel,komentar where artikel.id_artikel=komentar.id and artikel.id_artikel=$post order by id_komen desc");
$hit=mysql_num_rows($q);
if($_SESSION['username'])
{
	$admin=" value='ADMIN' ";
}

?>



<p>
              <h3> [<?=$hit?>] Silahkan Berkomentar : </h3>      
<table >
<form action="<?=$url?>model/crud.php" method=post>
<input type=hidden name=id  value="<?=$post?>" >
              <tr>
                  <td>Nama</td>
                  <td><input type=text name="nama" placeholder="Nama *"></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><input type=text name="email" placeholder="Email "></td>
              </tr>
              <tr>
                  <td valign=top>Komentar</td>
                  <td><textarea name="isi" style='height:150px' placeholder='Isi Komentar'required></textarea></td>
              </tr>
              <tr>
                  <td colspan=1></td>
                  <td colspan=1><input type=submit name="komentar" value=Komentari>&nbsp;<input type=reset name=reset value="Reset"></td>
              </tr>
			  </form>
	</table>		  
<table>		  
	
	<?php
	if(mysql_num_rows($q)==0)
	{
		echo"<tr><td ><center><h3 style='color:red;font-style: italic'>belum ada komentar!</h3></center></td></tr>";
	}
	else
	{
	while($r=mysql_fetch_object($q))
	{
		?>
		
			<!-- <code></code> pada <strong></strong>-->
		<tr>
			<td valign=top><?=$r->nama?></td>
			<td><?=$r->komentar?><br/>
			<?=$r->tanggal_komentar." ".$r->waktu_komentar?></td>
		</tr>
		<?php
	}}
	?>
	
	
</table>
