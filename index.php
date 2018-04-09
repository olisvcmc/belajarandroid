<!DOCTYPE html>

<html>

<head>

<title>Input File</title>

</head>

<body>

<h2>Form Input</h2>

<form action="#" method="post">

<b>Input Nama</b><br>

<input type="text" name="nama"><br><br>

<b>Input Alamat</b><br>

<textarea name="alamat"></textarea><br><br>

<input type="submit" name="submit" value="Submit">

</form>

 

</body>

</html>



<?php

$server = 'http://sql209.byethost.com:3306';

$user   = 'b4_16675020';

$pass   = "nurkholis";

$db     = 'b4_16675020_spam_bengkulu';

 

$a = mysql_connect($server, $user, $pass);

mysql_select_db($db, $a);

 
 

if(isset($_POST['submit']))

{

$nama = $_POST['nama'];

$alamat = $_POST['alamat'];

 

$simpan = mysql_query("insert into cobaku values('$nama', '$alamat')");

 

if($simpan)

{

echo "Berhasil Simpan";

}

else

{

echo "Gagal Tersimpan";

}

}

?>