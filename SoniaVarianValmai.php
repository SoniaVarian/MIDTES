<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b> <br>";
?>

<?php
echo"<b>Data Pribadi</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nama Lengkap			:".$_POST["name"]."<br>";
echo"Jenis Kelamin			:".$_POST["jk"]."<br>";
echo"E-Mail					:".$_POST["e-mail"]."<br>";
}
?>

<?php
echo"<b>Data Alamat Pengiriman</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nama Negara			:".$_POST["namanegara"]."<br>";
echo"Kota					:".$_POST["kota"]."<br>";
echo"Alamat					:".$_POST["alamat"]."<br>";
}
?>

<?php
echo"<b>Data No Kontak</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"No. Telepon			:".$_POST["notelepon"]."<br>";
echo"No. Handphone			:".$_POST["nohandphone"]."<br>";
echo"No. Faksimili			:".$_POST["nofaksimili"]."<br>";
}
?>

<form action="SoniaVarianValmai_MID.php"method="post">
<td>
<input type="submit"name="home"value="Home">