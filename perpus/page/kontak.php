<div class="column main">
        	<h2>SMK KOMPUTER ABDI BANGSA</h2>
           <p>Untuk Bertanya, Keritik, Saran, atau Informasi lebih detail <br> Anda dapat mengisinya pada Form dibawah !
</p>
           <form action="" method="post">
           	<fieldset id="contact">
            	<ul>
                	<li>
                    	<label>Nama:</label>
                        <input class="input-text" name="nama" type="text">
                    </li>
                    <li>
                    	<label>Email:</label>
                        <input class="input-text" name="email" type="email" required>
                    </li>
                    <li>
                    	<label>Pesan:</label>
                        <textarea name="isi"cols="" rows="" required></textarea>
                    </li>
                    <li>
                    	<input value="Submit" class="input-button" type="submit" name="kirim">
                    </li>
                </ul>
            </fieldset>
           </form>
           <?php
		   if(isset($_POST['kirim']))
		   {
				mail("rikydwianto@ymail.com","Kritik dan Saran dari $_POST[nama]",$_POST['isi'],"From : $_POST[email]");
				alert_berhasil("TERIMA KASIH UNTUK KRITIK DAN SARANNYA . . . :) ");
			}
		   
		   ?>
           <div id="info">
           	<h3>Alamat</h3>
                <p>2011-2015<br/>
                Jalan Karamat No. 55, Kota Sukabumi<br>
                Jawa Barat 43122 Indonesia</p>


                <h3>Alamat </h3>
                <p>2015-Seterusnya<br/>
                Jalan Benteng Kidul, Kota Sukabumi<br>
                Jawa barat 43122 Indonesia</p>


                <h3>Telepon</h3>
                <p>
                    0266 - 23699<br/>
                    +62 - 85720830557<br/>
                    +62 - 85722184223<br/>
                    +62 - 88298600039<br/>
                </p>
                <h3>Web & Email</h3>
                <p>
                    smkabdibangsa@yahoo.com<br/>
                    smkabdibangsa@gmail.com<br/>
                    <a href="http://www.smkkomputer-abdibangsa.sch.id">Portal 1</a><br/>
                    <a href="http://smkabdibangsa.blogspot.com">Portal 2</a><br/>
                </p>
           </div>
           
        </div>