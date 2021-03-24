<h2>TAMBAH ARTIKEL</h2>
<p>
<form action="<?=$url?>/modul/crud.php" method="post" enctype="multipart/form-data">
	<table id="tbl">
    <tr>
    	<td>
        	<input type="text" name="judul" style="width: 80%" value="" required id="judul" placeholder="Judul Artikel . . . ." class="required">
   	      <select name="kategori" id="combo" class="required" required> 
<option value="" >Pilih Kategori</option>
                    <?php
                    $sql=mysql_query("select * from kategori_artikel order by nama_kategori asc");
                    while($r1=  mysql_fetch_array($sql))
                    {
                    ?>
                    <option value="<?=$r1['id_kategori']?>"><?=$r1['nama_kategori'];?></option>
                    <?php
                    }
                    ?>
            </select>
        </td>
    </tr>
    <tr><td>
    <input type="file" name="tumbal" />
    </td></tr>
    <tr>
    	<td>
        <textarea name='isi' id='isi' rows="30" cols="70%" required style="width: 638px; height: 400px;"></textarea>
        </td>
    </tr>
        </tr>
    <tr>
        <td >
            <input type="submit" value="BUAT ARTIKEL" name="buat-artikel" class="btn">
            <input type="reset" class="btn" value="RESET"  >
        </td>
        
    </tr>

    </table>
</p>
</form>