<?php
@$level=$_SESSION['level'];
@$menu=$_GET['menu'];
@$act=$_GET['act'];
echo $menu;
	if($menu=="")$a="class='active'";
	else if($menu=="home")$b="class='active'";
	else if($menu=="buku")$c="class='active'";
	else if($menu=="penerbit")$d="class='active'";
	else if($menu=="peminjam")$f="class='active'";
	else if($menu=="kategori")$g="class='active'";
	else if($menu=="laporan")$h="class='active'";
	else if($menu=="artikel")$i="class='active'";
	else if($menu=="buku") $k="class='active'";
	else if($menu=="penerbit")$l="class='active'";
	else if($menu=="petugas") $petugas="class='active'";
	else if($menu=="pinjam")
	{
		if($act=="pinjam") $pinjam="class='active'";
		else if($act=="kembali")$kembali="class='active'";
	}
	else if($menu=="blog")$r="class='active'";
	else if($menu=="kontak")$s="class='active'";
	else if($menu=="profile")$t="class='active'";
	else if($menu=="list-buku")$u="class='active'";
	else if($menu=="riwayat")$ri="class='active'";

?>

<?php
if($level=="admin")
{
    ?>
    <ul id="main-nav">
    	<li><a href="<?=@$url?>/home" <?=@$a?> >Home</a></li>
    	<li><a href="<?=@$url?>/buku"  <?=@@$c?> >Buku</a></li>
    	<li><a href="<?=@$url?>/penerbit" <?=@$d?> >Penerbit</a></li>
    	<li><a href="<?=@$url?>/petugas" <?=@$petugas?> >Petugas</a></li>
    	<li><a href="<?=@$url?>/kategori" <?=@$g?> >Kategori</a></li>
    	<li><a href="<?=@$url?>/laporan" <?=@$h?> >Laporan</a></li>
        <li><a href="<?=@$url?>/lihat/artikel" <?=@$i?> >Artikel</a></li>
        <li><a href="<?=@$url?>/logout" >Logout</a></li>
        
    </ul>
    <?php
}
else if($level=="petugas")
{
    ?>
    <ul id="main-nav">
    	<li><a href="<?=@$url?>/home" <?=@$a?> >Home</a></li>
        <li><a href="<?=@$url?>/list-buku" <?=@$u?>>Buku</a></li>
        <li><a href="<?=@$url?>/pinjam" <?=@$pinjam?>>Pinjam</a></li>
        <li><a href="<?=@$url?>/kembali" <?=@$kembali?>>Kembali</a></li>
        <li><a href="<?=@$url?>/peminjam" <?=@$f?>>Peminjam</a></li>
        <li><a href="<?=@$url?>/laporan"<?=@$h?>>Laporan</a></li>
        <li><a href="<?=@$url?>/logout" >Logout</a></li>
    </ul>
    <?php
}
else if($level=="user")
{
    ?>
    <ul id="main-nav">
    	<li><a href="<?=@$url?>/home" <?=@$a?>>Home</a></li>
        <li><a href="<?=@$url?>/riwayat" <?=@$ri?>>Riwayat Pinjam</a></li>
        <li><a href="<?=@$url?>/list-buku" <?=@$u?>>List Buku</a></li>
        <li><a href="<?=@$url?>/blog" <?=@$r?>>Blog</a></li>
         <li><a href="<?=@$url?>/profile" <?=@$t?>>Profile</a></li>
        <li><a href="<?=@$url?>/kontak" <?=@$s?>>Kontak</a></li>
        <li><a href="<?=@$url?>/logout" >Logout</a></li>
    </ul>
    <?php
}
else
{
    ?>
    <ul id="main-nav">
    	<li><a href="<?=@$url?>/home"  <?=@$a?>>Home</a></li>
        <li><a href="<?=@$url?>/list-buku" <?=@$u?>>List Buku</a></li>
        <li><a href="<?=@$url?>/blog" <?=@$r?>>Blog</a></li>
         <li><a href="<?=@$url?>/profile" <?=@$t?>>Profile</a></li>
        <li><a href="<?=@$url?>/kontak" <?=@$s?>>Kontak</a></li>
        <li><a href="<?=@$url?>/login" >Login</a></li>
    </ul>
    <?php
}
?>
