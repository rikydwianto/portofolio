

<?php
@$menu=$_GET['menu'];
@$act=$_GET['act'];
@$level=$_SESSION['level'];

if($level=="" || $level=="user")
{ 	
	if($menu=="buku" && $act!="baca")geser("$url");
	else if($menu=="penerbit")geser("$url");
	else if($menu=="petugas")geser("$url");
	else if($menu=="peminjam")geser("$url");
	else if($menu=="kategori")geser("$url");
	else if($menu=="laporan")geser("$url");
	else if($menu=="artikel")
		if($act!="baca")geser("$url");
	else if($menu=="pinjam")geser("$url");
}
else if($level=="petugas")
{
	if($menu=="buku")
	{
		if($act!="baca")geser("$url");
	}
	else if($menu=="penerbit")geser("$url");
	else if($menu=="petugas")geser("$url");
	else if($menu=="kategori")geser("$url");
}
else if($level=="admin")
{
	if($menu=="pinjam")geser("$url");
	else if($menu=="peminjam")geser("$url");
}
?>


<?php


?>


<?php
if(!isset($_GET['menu']))
{
    include 'page/blog_terbaru.php';
}
else
{
?>
<div class="column main">
    <p>
<?php

switch($menu)
{
    case"":
        include"page/blog_terbaru.php";
    break;
    
    case"list-buku":
        include"page/list_buku.php";
    break;
    case"riwayat":
        include"page/pinjam_riwayat.php";
    break;
	case"profile":
        include"page/profile.php";
    break;
    
    case"blog":
        include"page/blog_lihat.php";
    break;
    case"artikel":
        switch($act)
        {
            case"baca":
                include"page/baca.php";
            break;
		 	case"tambah":
                include"page/buat-artikel.php";
            break;
            case"edit":
                include"page/edit-artikel.php";
            break;
            case"lihat":
                include"page/lihat-artikel.php";
            break;
            case"hapus":
                include"page/hapus-artikel.php";
            break;	
/*            default:
                include"page/blog_lihat.php";
            break;
*/			
        }
    break;
    
    case"kontak":
        include"page/kontak.php";
    break;
    


    
    default :
        include"error/404.html";
    break;

    case"buku":
        switch ($act) {
            case "":
                include"page/buku_lihat.php";
            break;
            case "lihat":
                include"page/buku_lihat.php";
            break;
            case "tambah":
                include"page/buku_tambah.php";
            break;
            case "edit":
                include"page/buku_edit.php";
            break;
            case "hapus":
                include"page/buku_hapus.php";
            break;
            case "baca":
                include"page/buku_baca.php";
            break;
            default:
                include"page/buku_liat.php";
            break;

        }
    break;
    case"penerbit":
        switch ($act) {
            case "":
                include"page/penerbit_lihat.php";
            break;
            case "lihat":
                include"page/penerbit_lihat.php";
            break;
            case "tambah":
                include"page/penerbit_tambah.php";
            break;
            case "edit":
                include"page/penerbit_edit.php";
            break;
            case "hapus":
                include"page/penerbit_hapus.php";
            break;

        }
    break;
    case"pinjam":
        switch ($act)
        {
            case"pinjam":
            	include"page/pinjam_tambah.php";
            break;
			case"":
            	include"page/pinjam_tambah.php";
            break;
            case"lihat":
            	include"page/pinjam_lihat.php";
            break;
            case"kembali":
            	include"page/pinjam_kembali.php";
            break;
        }
        
    break;
    case "kategori":
                switch ($act) {
                    case "tambah":
                        include"page/kategori_tambah.php";
                    break;
                    case "hapus":
                        include"page/kategori_hapus.php";
                    break;
                    case "edit":
                        include"page/kategori_edit.php";
                    break;
                    case "lihat":
                        include"page/kategori_lihat.php";
                    break;

                    default:
                        include"page/kategori_lihat.php";
                        break;
                }
     break;
    case "petugas":
                switch ($act) {
                    case "tambah":
                        include"page/petugas_tambah.php";
                    break;
                    case "hapus":
                        include"page/petugas_hapus.php";
                    break;
                    case "edit":
                        include"page/petugas_edit.php";
                    break;
                    case "lihat":
                        include"page/petugas_lihat.php";
                    break;
                    default:
                        include"page/petugas_lihat.php";
                     break;
                }
     break;
    case "laporan":
        case "":
            include"page/laporan.php";
        break;
                switch ($act) {
                    case "lihat":
                        include"page/petugas_lihat.php";
                    break;
					case "priodik":
                        include"page/laporan_priodik_1.php";
                    break;

                    default:
                        include"page/petugas_lihat.php";
                        break;
                }
     break;
	 
	 case "peminjam":
                switch ($act) {
                    case "tambah":
                        include"page/peminjam_tambah.php";
                    break;
                    case "hapus":
                        include"page/peminjam_hapus.php";
                    break;
                    case "edit":
                        include"page/peminjam_edit.php";
                    break;
                    case "lihat":
                        include"page/peminjam_lihat.php";
                    break;

                    default:
                        include"page/peminjam_lihat.php";
                        break;
                }
     break;
	 

}
?>
    </p>
</div>
<?php
 include"page/sidebar.php";
}
?>