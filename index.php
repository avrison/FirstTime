<?php 			
session_start(); 			
if ( !isset($_SESSION['userid']) ) { 			
header('location:login.php'); 			
} 			
else { 			
$user = $_SESSION['userid']; 			
} 			
require_once('connect.php'); 			
$query = mysql_query("SELECT * FROM anggota WHERE userid = '$user'"); 		
$hasil = mysql_fetch_array($query); 			
?> 	
<html> 	
<head> 	
<title>Halaman Utama</title> 	
<style> 	
body{background-color:#d0e4fe;} 	
</head>
</style>
<body>
<center>
<?php 	
echo "<h2>Selamat Datang, $user</h2>"; 	
echo "Nama Lengkap : " . $hasil['nama'] . "<br />"; 	
echo "Email : " . $hasil['email']; 	
?> 	 
<br/>
<a href="edit.php"><b>Edit</b></a> <br/>
<a href="logout.php"><b>Logout</b></a>	
</center>
</body> 	
</html>	
