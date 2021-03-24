<?php
@$page=$_GET['artikel'];
$query="select * from artikel natural join kategori_artikel where artikel.id_artikel='$page'";
$sql=mysql_query($query);
if(mysql_num_rows($sql)==0)
{
    header("location:$url/lihat/artikel");
}
$r=  mysql_fetch_array($sql);
?>
<h2>EDIT ARTIKEL</h2>
<p>
<form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
	<table id="tbl">
    <tr>
    	<td>
        	<input type="text" name="judul" required style="width: 80%" value="<?=$r['judul'];?>" id="judul" class="required"><input type="hidden" name="id_artikel" value="<?=$r['id_artikel'];?>">
        	<select name="kategori" required id="combo" class="required">
        	  <option value="" >Pilih Kategori</option>
        	  <option selected="" value="<?=$r['id_kategori'];?>">
        	    <?=$r['nama_kategori'];?>
       	      </option>
        	  <?php
                    $sql=mysql_query("select * from kategori_artikel where id_kategori!='$r[id_kategori]' order by nama_kategori asc");
                    while($r1=  mysql_fetch_array($sql))
                    {
                    ?>
        	  <option value="<?=$r1['id_kategori']?>">
        	    <?=$r1['nama_kategori'];?>
       	      </option>
        	  <?php
                    }
                    ?>
      	  </select></td>
    </tr>
    <tr><td>
    <img src="<?=$url?>/images/artikel/<?=$r['tumbnail'];?>" width="100%" height="20%"><input type="file" name="tumbal" />
    </td></tr>
    <tr>
    	<td>
        <textarea name='isi' id='isi' rows="30" cols="70%"  style="width: 638px; height: 400px;"><?=$r['isi_artikel'];?></textarea>
        </td>
    </tr>
        </tr>
    <tr>
        <td >
            <input type="submit" value="SIMPAN" name="edit-artikel" class="btn">
            <input type="reset" class="btn" value="RESET"  >
        </td>
        
    </tr>

    </table>
</p>
</form>