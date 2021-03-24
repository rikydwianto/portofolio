<?php include"page/kategori_tambah.php";?>
<form action="" method="post">
<table border="1" id="tbl">
<!--    <a href="<?=$url?>/tambah/kategori" id="id">Tambah</a>-->

    <?php
    if(isset($_POST['hapus-banyak']))
    {
        @$ia=$_POST['hapus'];
        $h=count($ia);
        if($h==0)
        {
            echo"<script>alert('Tidak ada yang dipilih ka ');</script>";
            
        }
        for($i=0;$i<$h;$i++)
        {
            mysql_query("delete from kategori where kategori_kode='$ia[$i]'");
            echo mysql_error();
        }
    }
    ?>

    <tr>
        <td>No. </td>
        <td>Kode</td>
        <td>Nama Kategori</td>
        <td></td>
    </tr>
    <?php
    $q=mysql_query("select * from kategori");
    $no=1;
    while($r=  mysql_fetch_array($q))
    {
    ?>
    <tr>
        <td><?=$no;?>. <input type="checkbox" name="hapus[]" value="<?=$r['kategori_kode'];?>"></td>
        <td><?=$r['kategori_kode'];?></td>
        <td><?=$r['kategori_nama'];?></td>
        <td>
        <a href="edit/kategori/<?=$r['kategori_kode'];?>"><img src="<?=$url?>/images/icons/pencil32.png" width="15px" style="float:left" title="EDIT"/></a>
            <a href="hapus/kategori/<?=$r['kategori_kode'];?>"><img src="<?=$url?>/images/icons/stop32.png" width="15px" title="HAPUS"/></a>
            
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
    <tr><td colspan="4"><input type="submit" name="hapus-banyak" value="Hapus Multi"></td></tr>
</table>
</form>