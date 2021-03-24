<?php include"config/setting.php";?>
<?php include"config/fungsi.php";?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title><?=$title?></title>
	  <?php include"view/page/link.php";?>
	  <meta content="toko handphone terlengkap di kota sukabumi" name="keyword">
	  <meta content="toko handphone di sukabumi" name="keyword">
	  <meta content="DISTRIBUTOR HANDPHONE TERLENGKAP" name="keyword">
	  <meta content="android supersimas apk" name="keyword">
	  <meta content="android supersimas" name="keyword">
	  <meta content="supersimas.apk" name="keyword">
	  <meta content="toko handphone terlengkap kota sukabumi" name="keyword">
	  <meta content="Distributor pulsa terlengkap dikota sukabumi" name="keyword">
	  <meta content="Distributor pulsa terlengkap sukabumi" name="keyword">
	  <meta content="Distributor pulsa terlengkap banten,palabuhan,nasional" name="keyword">
	  <meta content="<?=$title1?>" name="description">
	  <meta content="Riky Dwianto" name="author">
	  <meta content="all" name="robots">
	  
        
   </head>
   <body class='size-1140'>
   
   <div class=container>
      <!-- HEADER -->
      <?php include"view/page/header.php";?>
      <section>
		 
		 <div  style='float:'>
			 <div class="line" >
				<div class="margin">
				   
				</div>
			 </div>
			 <!-- ASIDE NAV AND CONTENT -->
			 <div class="line">
				<div class="box margin-bottom">
				   <div class="margin">
					  <!-- CONTENT -->
					  
					  <?php
					  $warna=array('#3498DB','#1abc9c','#8e44ad','#EC523F','#3498DB','#1abc9c','#8e44ad','#EC523F');
					  ?>
					  <article class="s-12 m-6 l-8">
						 <?php
				@$m=$_GET['m'];
				@$post=$_GET['post'];
				if($post)
				{
					include"view/post.php";;
					
				}
				else if(isset($_GET['cari']))
				{
					include"view/cari.php";
				}
				else if(isset($_GET['k']))
				{
					include "view/jenis.php";
				}
				else
				{
					switch($m)
					{
						default:include"view/jenis.php";
						break;
						
						case"galery": include"view/galery.php"; 
						//echo"<h1>UNDER MAINTENANCE</h1>";
						break;
						
						case"kontak": include"view/kontak.php"; ;
						break;
						
						case"loker": include"view/loker.php"; ;
						break;
						
						// case"artikel": include"view/artikel.php"; ;
						// break;
						// case"event": include"view/event.php"; ;
						// break;
					}
				}
				?> 
						 
								 
					  </article>
					  
					  
					  
					  <?php include"view/page/pinggir.php";?>
					  
				   </div>
				</div>
			 </div>
			 <!-- GALLERY CAROUSEL -->
			 <?php
			 include"view/slide-galery.php";
			 ?>
			</div>
		</section>
      <!-- FOOTER -->
      <footer class="line">
         <div class="box">
            <div class="s-12 l-6">
               <p>Simas Tel 2015, Design - <a href='//facebook.com/batox65'>Riky Dwianto</a></p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="<?=$url?>" title="<?=$title?>">IT & Server Team</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="assets/owl-carousel/owl.carousel.js"></script>  
      <script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
         	navigation : true,
         	slideSpeed : 300,
         	paginationSpeed : 400,
         	autoPlay : true,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	items : 4,
         	lazyLoad : true,
         	autoPlay : true,
         	navigation : true,
         	pagination : false
           });
         });	 
      </script>
	  </div>
   </body>
</html>