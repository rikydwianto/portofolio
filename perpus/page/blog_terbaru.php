<h2>ARTIKEL TERBARU</h2><br /><hr/>

<?php
$sql=mysql_query("select * from artikel natural join kategori_artikel order by id_artikel desc limit 0,3");
while($r=  mysql_fetch_object($sql))
{
    ?>
        <div class="column">
            <h3><a href="<?=$url;?>/artikel/baca/<?=$r->id_artikel?>" style="color:#3c3c3c;text-decoration:none;font-weight:bold"><?=strtolower(substr($r->judul,0,25));?></a></h3>
        <p class="info">Posted on <?=$r->tgl_posting?> by <strong>ADMIN</strong></p>
        <img src="images/artikel/<?=$r->tumbnail?>" width="300" height="152"alt="<?=$r->tumbnail?>" />
        <p>
            Kategori : <?=$r->nama_kategori?><br/>
            Dibaca : <?=$r->dibaca?>X
        </p>
        <p class="read-more"><a href="<?=$url;?>/artikel/baca/<?=$r->id_artikel?>">Selengkapnya</a></p>
    </div>
    <?php
}
?>
<h2>BUKU TERBARU</h2><br /><hr/>

<?php
$sql1=mysql_query("select * from buku natural join kategori natural join penerbit order by buku_kode desc limit 0,3");
while($r1=  mysql_fetch_object($sql1))
{
    ?>
        <div class="column">
            <h3><a href="<?=$url;?>/buku/baca/<?=$r1->buku_kode?>" style="color:#3c3c3c;text-decoration:none;font-weight:bold"><?=strtolower(substr($r1->buku_judul,0,30));?></a></h3>
			<p>Pengarang : <strong><?=$r1->buku_pengarang?></strong></p>
        <img src="<?=$url?>/images/buku/<?=$r1->foto_buku?>" width="300" height="152"alt="<?=$r1->foto_buku?>" />
        <p>
            Kategori : <?=$r1->kategori_nama?><br/>            
            Penerbit : <?=$r1->penerbit_nama?><br/>
            Jumlah   : <?=$r1->buku_jumlah?>X
        </p>
        <p class="read-more"><a href="<?=$url;?>/buku/baca/<?=$r1->buku_kode?>">Selengkapnya</a></p>
    </div>
    <?php
}
?>