<?php 	
$dbhost = 'localhost'; 	
$dbuser = 'root'; 	
$dbpass = ''; 	
$dbname = 'db_avrison'; 	
$konek = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Koneksi 	
Gagal!'); 	
mysql_select_db($dbname); 	
?>	
