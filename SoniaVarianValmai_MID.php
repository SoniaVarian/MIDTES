<html>
<body>
<form action="SoniaVarianValmai.php" method="post">
<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b><br>";
?>
<pre>
<?php
echo"<b>Data Pribadi</b><br>";
?>

Nama Lengkap		: <input type="text" name="namalengkap" />
Jenis Kelamin		: <input type="radio" name="LP" Value="Pria">Pria<input type="radio" name="LP" Value="Wanita">Wanita
E-Mail 	   		: <input type="text" name="e-mail" />

<?php
echo"<b>Data Alamat Pengirim</b><br>";
?>
<pre>
Nama Negara 		: <input type="text" name="namanegara" />

Kota			: <input type="text" name="kota" />

Alamat			: <input type="text" name="alamat" />

Kode Post		: <input type="text" name="kodepost" />


<?php
echo"<b>Data No Kontak</b><br>";
?>
<pre>

No. Telepon  		: <input type="text" name="notelepon" />

No. Handphone		: <input type="text" name="nohandphone" />

No. Faksimili		: <input type="text" name="nofaksimili" />

			<input type="Submit"/ name="Send" value="Send"/><input type="Submit"/name="Reset" value="Reset"/>
			</form>
			<form action="SoniaVarianValmai_MID.php">
</pre>

</form>
</body>
</html>	