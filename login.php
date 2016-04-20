<?php 	
session_start(); 	
if( isset($_SESSION['userid']) ) { 	
header('location:index.php'); 	
} 	
require_once('connect.php'); 	
?> 	
<html> 	
<head> 	
<title>Login Member</title>
<style>
body{background-color:#d0e4fe;}
</style> 	
</head> 	
<body> 	
<center><table border="1" cellpadding="8" cellspacing="0"> 	
<form action="proseslogin.php" method="post"> 	
<tr>	
<th colspan="2">Member Login</td> 	
</tr> 	
<tr> 	
<td>User ID </td> 	
<td><input name="userid" type="text"/></td> 	
</tr> 	
<tr> 	
<td>Password</td> 	
<td><input name="password" type="password"/></td> 	
</tr> 	
<tr> 	
<td colspan="2" align="center"><input type="submit" name="Submit" 	
value="Login" /></td> 	
</tr> 	
<tr> 	
<td colspan="2" align="center">Belum Jadi Anggota? <a 	
href="register.php">Daftar</a></td></center>	
</tr> 	
</form> 	
</table> 	
</body> 	
</html>	
