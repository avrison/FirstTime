<html>
<head>
<title>Login Filed</title>
</head>
<style>
body{background-color:#d0e4fe;}
</style>
<body>
<?php 			
session_start(); 			
require_once ('connect.php'); 			
$user = $_POST['userid'];			
$pass = $_POST['password'];			
$cekuser = mysql_query("SELECT * FROM anggota WHERE userid = '$user'"	); 		
$jumlah = mysql_num_rows($cekuser); 			
$hasil = mysql_fetch_array($cekuser); 			
if ( $jumlah == 0 ) { 			
echo '<center>User ID Belum Terdaftar!</center><br/>'; 			
echo '<center><a href="login.php">&laquo; Back</center></a>'; 			
} else { 			
if ( $pass <> $hasil['password'] ) { 			
echo 'Password Salah!<br/>'; 			
echo '<a href="login.php">&laquo; Back</a>'; 			
} else { 			
$_SESSION['userid'] = $user; 			
header('location:index.php'); 			
} 			
} 			
?>
</body>
</html>			
