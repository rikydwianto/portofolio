<html>
<head><?php include"../config/setting.php"; ?>
<title><?=$title;?></title>
<link rel="shortcut icon" href="<?=$url?>/images/logo-ab.png">
<link type="text/css" media="screen" rel="stylesheet" href="<?=$url;?>/stylesheets/reset.css" />
<link type="text/css" media="screen" rel="stylesheet" href="<?=$url;?>/stylesheets/main.css" />
  <script src="<?=$url?>/lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=$url?>/lib/sweet-alert.css"/>
</head>
<body>
<?php
chmod("../images/",0777) ;

if(isset($_POST['buku-tambah']))
{
    $kode=$_POST['kode'];
    $kategori=$_POST['kategori'];
    $penerbit=$_POST['penerbit'];
    $judul=$_POST['judul'];
    $jumlah=$_POST['jumlah'];
    $deskripsi=$_POST['deskripsi'];
    $pengarang=$_POST['pengarang'];
    $tahun=$_POST['tahun'];
    $nama=$kode."-_-".$_FILES['photo']['name'];
    $alamat="../images/buku/$nama";
    move_uploaded_file($_FILES['photo']['tmp_name'],"$alamat");
    if(empty($_FILES['photo']['name']))$nama='none.jpg';
	else $nama=$kode."-_-".$_FILES['photo']['name'];
    mysql_query("insert into buku values('$kode','$kategori','$penerbit','$judul','$jumlah','$deskripsi','$pengarang','$tahun','$nama')");
    alert_berhasil("Berhasil Diinput");
	pindah("$url/buku");
    echo mysql_error();
}
if(isset($_POST['buku-edit']))
{
    $kode=$_POST['kode'];
    $kategori=$_POST['kategori'];
    $penerbit=$_POST['penerbit'];
    $judul=$_POST['judul'];
    $jumlah=$_POST['jumlah'];
    $deskripsi=$_POST['deskripsi'];
    $pengarang=$_POST['pengarang'];
    $tahun=$_POST['tahun'];
    @$asal=$_FILES['photo']['tmp_name'];
    @$photo=$kode."-_-".$_FILES['photo']['name'];
    if(!empty($_FILES['photo']['name']))
    {
        $masuk=",foto_buku='$photo'";

    }
    else
    {
        $masuk="";
    }
	move_uploaded_file($asal,"../images/buku/$photo");
    mysql_query("update buku set buku_judul='$judul',buku_jumlah='$jumlah',
            buku_diskripsi='$deskripsi',buku_pengarang='$pengarang',buku_thn_terbit='$tahun',
            kategori_kode='$kategori',penerbit_kode='$penerbit' $masuk where buku_kode='$kode'
            ");
    alert_berhasil("Berhasil edit");
    pindah("$url/buku");
    
    echo mysql_error();

}
if(isset($_POST['penerbit-tambah']))
{
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    mysql_query("insert into penerbit values('$kode','$nama','$alamat','$telp')");
	alert_berhasil("$Penerbit Berhaisl ditambhkan");
	pindah("$url/penerbit");
    echo mysql_error();
}
if(isset($_POST['penerbit-edit']))
{
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    mysql_query("update penerbit set penerbit_nama='$nama',penerbit_alamat='$alamat',penerbit_telp='$telp' where penerbit_kode='$kode'");
    alert_berhasil("Berhasil Edit");
    pindah("$url/penerbit");
    echo mysql_error();
}
if(isset($_POST['kategori-tambah']))
{
    
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $cek= mysql_num_rows(mysql_query("select * from kategori where kategori_kode='$kode' "));
    if($cek==1)
    {
    	alert("Gagal Ditembahkan ");
    	pindah("$url/penerbit");
        
    }
    mysql_query("insert into kategori values('$kode','$nama')");
    alert_berhasil("Kategori Berhasil ditambah");
    pindah("$url/kategori");}
if(isset($_POST['kategori-edit']))
{
    
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];

    mysql_query("update kategori set kategori_nama='$nama' where kategori_kode='$kode'");
alert("Kategori Berhasil Edit");
    pindah("$url/kategori");}

if(isset($_POST['petugas-tambah']))
{
    $a=$_POST['kode'];
    $b=$_POST['nama'];
    $c=$_POST['alamat'];
    $d=$_POST['hp'];
    $e=$_POST['username'];
    $f=md5($_POST['pass']);
    
	if(empty($_FILES['photo']['name']))$nama='none.jpg';
	else $nama=$a."-_-".$_FILES['file']['name'];

    $alamat="../images/photo/$nama";
    move_uploaded_file($_FILES['file']['tmp_name'], $alamat);
    mysql_query("INSERT INTO petugas (petugas_kode, petugas_nama, petugas_alamat, petugas_telp, petugas_foto,  username, password) VALUES 
        ('$a', '$b', '$c', '$d', '$nama', '$e', '$f')");
    echo mysql_error();
    echo alert_berhasil("Berhasil Diinput");
    echo pindah("$url/petugas");
    echo mysql_error();
}
if(isset($_POST['petugas-edit']))
{
    $a=$_POST['kode'];
    $b=$_POST['nama'];
    $c=$_POST['alamat'];
    $d=$_POST['hp'];
    $e=$_POST['username'];
    @$status=$_POST['status'];
    @$f=md5($_POST['pass']);
    @$nama=$a."-_-".$_FILES['file']['name'];
    $alamat="../images/photo/$nama";
    if(empty($status))$status='y';
    else $status=$_POST['status'];
    if(!empty($_FILES['file']['name']))
    {
        $oldphoto=$_POST['photo'];
        if($oldphoto!="none.jpg")
        {
            @$hapus="../images/photo/$oldphoto";
            @unlink($hapus);
        }
        move_uploaded_file($_FILES['file']['tmp_name'], $alamat);
        $masuk=",petugas_foto='$nama'";
        
        
    }
    else
    {
        $masuk="";
    }
    
    mysql_query("update petugas set petugas_nama='$b', petugas_alamat='$c', petugas_telp='$d',   username='$e' $masuk where petugas_kode='$a'");
    echo alert_berhasil("Berhasil EDIT");
    echo pindah("$url/petugas");
    echo mysql_error();
}
if(isset($_POST['peminjam-edit']))
{
	@$kode=$_POST['kode'];
    @$nama=$_POST['nama'];
    @$alamat=$_POST['alamat'];
    @$telp=$_POST['telp'];
    @$foto=$_FILES['file']['name'];
    @$user=$_POST['username'];
    @$pass=$_POST['password'];
    if(empty($pass))$a='';
    else $a=", password=md5('$pass')";
    if(empty($foto))$up="";
    else
    {
    	$old=$_POST['old'];
        if($old!='none.jpg')
        {
        	$hapus="../images/photo/$old";
        	@unlink($hapus);
            
        }
        $up=", peminjam_foto='$kode"."-_-"."$foto'";
		$folder="../images/photo/$kode"."-_-".$foto;
        move_uploaded_file($_FILES['file']['tmp_name'],$folder);
    }
		

    $sql="update peminjam set username='$user',peminjam_nama='$nama',peminjam_telp='$telp' $a $up where peminjam_kode='$kode'";
    mysql_query($sql);
    alert("$kode Berhasil Diedit");
    pindah("$url/peminjam");
}
if(isset($_POST['peminjam-tambah']))
{
	@$kode=$_POST['kode'];
    @$nama=$_POST['nama'];
    @$alamat=$_POST['alamat'];
    @$telp=$_POST['telp'];
    @$foto=$_FILES['file']['name'];
    @$user=$_POST['username'];
    @$pass=md5($_POST['password']);
    if(empty($foto))$up="none.jpg";
    else
    {
        
        $up="$kode-_-$foto";
		$folder="../images/photo/$kode"."-_-".$foto;
        move_uploaded_file($_FILES['file']['tmp_name'],$folder);
    }
	

    $sql="INSERT INTO peminjam (peminjam_kode, peminjam_nama, peminjam_alamat, peminjam_telp, peminjam_foto, username, password) VALUES ('$kode', '$nama', '$alamat', '$telp', '$up', '$user', '$pass');";
    if(mysql_query($sql))
	{
    alert_berhasil("$kode Berhasil Tambah");
    pindah("$url/peminjam");
	}
	else
	{
		alert("Gagal menambahkan");
		echo mysql_error();
		pindah("$url/peminjam");
	}
}

// ARTiKEL



if(isset($_POST['buat-artikel']))
{
    $judul=$_POST['judul'];
    $isi=mysql_real_escape_string($_POST['isi']);
    $kategori=$_POST['kategori'];
    $query="INSERT INTO artikel (id_artikel, judul, id_kategori, isi_artikel, tgl_posting, waktu, tumbnail, dibaca) VALUES (NULL, '$judul', '$kategori', '$isi', curdate(), '".date("h:i:s")."', 'null', '0')";
	
    $sql=  mysql_query($query);
    $id=  mysql_insert_id();
    $photo=$id."_".$_FILES['tumbal']['name'];
    $asal=$_FILES['tumbal']['tmp_name'];
	if($_FILES['tumbal']['name']=="")$p="none.jpg";
	else $p=$photo;
    $folder="../images/artikel/".$photo;
    mysql_query("update artikel set tumbnail='$p' where id_artikel='$id'");
    move_uploaded_file($asal, $folder);
	
    if($sql)
    {
		alert_berhasil('Berhasil membuat artikel : )');
        pindah("$url/lihat/artikel");
		
    }
    else
    {
		alert('Gagal membuat artikel :('.mysql_error());
        pindah("$url/lihat/artikel");
	}
}

if(isset($_POST['edit-artikel']))
{
    $id_artikel=$_POST['id_artikel'];
    $judul=$_POST['judul'];
    $isi=mysql_real_escape_string($_POST['isi']);
    $kategori=$_POST['kategori'];
    @$photo=$id_artikel."_".$_FILES['tumbal']['name'];
    $asal=$_FILES['tumbal']['tmp_name'];
    $folder="../images/artikel/".$photo;
    if(!empty($_FILES['tumbal']['name']))
    {
        $a=",tumbnail='$photo'";
        move_uploaded_file($asal, $folder);
    }
    else
    {
        $a="";
    }
    
    $query="update artikel set judul='$judul',isi_artikel='$isi',id_kategori='$kategori' $a where id_artikel='$id_artikel'";
    $sql=  mysql_query($query);
    if($sql)
    {
            alert_berhasil('Berhasil Diedit ');
            pindah("$url/lihat/artikel");
            
    }
    else
    {
        alert("Gagal Edit : ".mysql_error());
            pindah("$url/edit/$id_artikel");
    }
}
?>


</body>
</html>