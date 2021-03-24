<div class=box>
<h1>SIMASTEL </h1>
<b>
<code>
<h3>Alamat</h3>
Jl. A. Yani No. 235 Kota Sukabumi <br/> 
YM : <a href="ymsgr:sendIM?simascard" style=''>SimasCard<img src="http://opi.yahoo.com/online?u=simascard&amp;m=g&amp;t=2&amp;l=us"/></a>
&nbsp;<a href="ymsgr:sendIM?suarasimas">SuaraSimas<img src="http://opi.yahoo.com/online?u=suarasimas&amp;m=g&amp;t=2&amp;l=us"/></a>
&nbsp;<a href="ymsgr:sendIM?simas.server">simas.server<img src="http://opi.yahoo.com/online?u=simas.server&amp;m=g&amp;t=2&amp;l=us"/></a>

<h3>Info/Komplain </h3>
    HP 		: 0857 2396 2494 <br/>
    Pin		: 284325B5 <br/>
    Telp 	:(0266) 225 114 <br/>
    Email 	: simas.online235@gmail.com <br/>

</code>
</b>

<hr/>
			Anda dapat menghubungi kami disini, anda dapat menyampaikan Kritik atau saran anda disini </center>
<form method="post" action="<?=$url?>model/crud.php">
<input type=text name=nama required placeholder='Nama *'>
<input type=text name=web placeholder='Website ' >
<input type=email name=email required placeholder='Email *'>
<textarea name=isi required placeholder='Isi Pesan *'></textarea>
<input type=submit value=Kirim name=kontak>
</form>

Lokasi SIMASTEL
<div id="map" style="width: 100%; height: 250px;"></div> 
 
        <script type="text/javascript">
              
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-6.922748,106.9321814);
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 17,
                  center: myLatlng
              };
              
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"SIMASTEL"
              });
        </script> 
</div>