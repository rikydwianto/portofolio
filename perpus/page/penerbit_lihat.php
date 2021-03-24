<h2>Penerbit</h2>
<form action="" method="post">
<?php
    if(isset($_POST['cari']))
    {
    $cari=$_POST['cari'];
    $tambahan=" where penerbit.penerbit_nama like '%$cari%'";
    }
    else
    {
    $tambahan="";
    $cari="";
    }
?>
    <a href='<?=$url?>/tambah/penerbit'id=btn style="text-decoration:none;color:#000"><img src="<?=$url?>/images/icons/plus32.png" width="20px" style="float:left; "/> Tambah</a>
	Cari : <input type='text' name='cari' onchange='submit()' value="<?=@$cari;?>">
    
    
    <?php
    if(isset($_POST['hapus-banyak']))
    {
        @$id=$_POST['hapus'];
        $h=count($id);
        if($h==0)
        {
            echo"<script>alert('Tidak ada yang dipilih ka ');</script>";
            
        }
        for($i=0;$i<$h;$i++)
        {
           mysql_query("delete from penerbit where penerbit_kode='$id[$i]'");
            echo mysql_error();
        }
    }
    ?>
    
     
    <table border="1"id="tbl">
        <tr>
            <td>No.</td>
            <td>Kode</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Telepon</td>
            <td>#</td>
        </tr>
        <?php
        $q=mysql_query("select * from penerbit $tambahan");
        $no=1;
        while($row=  mysql_fetch_array($q))
            
        {
        ?>
        <tr>
            <td><?=$no?>. <input type="checkbox" name="hapus[]" value="<?=$row['penerbit_kode'];?>"></td>
            <td><?=$row['penerbit_kode'];?></td>
            <td><?=$row['penerbit_nama'];?></td>
            <td><?=$row['penerbit_alamat'];?></td>
            <td><?=$row['penerbit_telp'];?></td>
            <td>
                <a href="hapus/penerbit/<?=$row['penerbit_kode'];?>"><img src="<?=$url?>/images/icons/stop32.png" width="20px"title="HAPUS"style="float:left;padding-rigth:3px"/></a>
                <a href="edit/penerbit/<?=$row['penerbit_kode'];?>"><img src="<?=$url?>/images/icons/pencil32.png" width="20px"title="EDIT"/></a>
            </td>
            
        </tr>
        <?php
        $no++;
        }
        ?>
        <tr><td colspan="6"><input type="submit" name="hapus-banyak" value="Hapus Multi"></td></tr>
    </table>
</form>