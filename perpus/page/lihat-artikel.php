<h2 class="isi_title">Daftar Artikel</h2>
<br/>

<form action="" method="post" >   
    <?php
    if(isset($_POST['multi']))
    {
        @$a=$_POST['id_artikel'];
        $jml= count($a);
        for($i=0;$i<$jml;$i++)
        {
            mysql_query("delete from artikel where id_artikel='$a[$i]'");
			echo mysql_error();
        }
		alert_berhasil(mysql_error());
    }
    ?>
    <table id="tbl">
        <a href="<?=$url?>/tambah/artikel" id="btn" style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" style="float:left; " width="20px">ARTIKEL</a>
        <tr><td colspan="7">ARTIKEL</td></tr>
        <tr>
            <td >No.</td>
            <td >Judul</td>
            <td >Kategori</td>
            <td >Dibaca</td>
            <td >Tanggal/Waktu</td>
            <td>Aksi</td>

        </tr>
        <?php
        
        $query="select * from artikel natural join kategori_artikel order by artikel.id_artikel desc";
        $sql=  mysql_query($query);
        $no=1;
        while($r=  mysql_fetch_array($sql))
        {
        ?>
        
        <tr>
            <td ><?=$no;$no++;?>. <input name="id_artikel[]" type="checkbox" value="<?=$r['id_artikel']?>" /></td>
            <td ><?=$r['judul']?></td>
            <td ><?=$r['nama_kategori']?></td>
            <td ><?=$r['dibaca']?></td>
            <td ><?=$r['tgl_posting']?> <?=$r['waktu']?></td>
            <td>
      	<a href='<?=$url?>/artikel/baca/<?=$r['id_artikel']?>' target="_blank"><img src="<?=$url?>/images/icons/search32.png" width="15px" style="float:left" title="Detail Artikel"/></a>

      	<a href='<?=$url?>/edit/artikel/<?=$r['id_artikel']?>'><img src="<?=$url?>/images/icons/pencil32.png" width="15px" style="float:left" title="Edit"/></a>
        <a href='<?=$url?>/hapus/artikel/<?=$r['id_artikel']?>'><img src="<?=$url?>/images/icons/stop32.png" width="15px" title="Hapus"></a>
	
            </td>

        </tr>
        
        <?php
        $no++;
        }
        ?>
        <tr><td colspan="7"><input type="submit" name="multi" value="Hapus" class="btn" /></td></tr>
    </table>
    
    
    
</form>