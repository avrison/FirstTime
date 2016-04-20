<?php 		
session_start(); 		
if(isset($_SESSION['userid'])) { 		
header('location:index.php'); } 		
?> 		
<html> 		
<head> 		
<title>Pendaftaran Member</title> 
<style>
body{background-color:#d0e4fe;}
</style> 		
</head> 		
<body> 		
<center><table border="1" cellpadding="8" cellspacing="0"> 		
<form action="prosesregister.php" method="post"> 		
<tr> 		
<th colspan="2" align="center">Pendaftaran Anggota</td> 		
</tr> 		
<tr> 		
<td>Nama Lengkap </td> 		
<td><input name="nama" type="text" size="40" /></td> 	
</tr> 	
<tr> 	
<td>Email</td> 	
<td><input name="email" type="text" size="40" /></td> 	
</tr> 	
<tr> 	
<td>User ID </td> 	
<td><input type="text" name="userid" size="40" /></td> 	
</tr> 	
<tr> 	
<td>Password</td> 	
<td><input type="password" name="password" size="40" /></td> 	
</tr> 	
<tr> 	
<td colspan="2" align="center"><input name="Submit" type="submit" 	
value="Daftar"/></td> 	
</tr> 	
<tr> 	
<td colspan="2" align="center"><font color="#0000FF">Sudah Jadi Anggota? <a 	
href="login.php">Login</a></font></td> 	
</tr> 	
</form> 	
</table>
</center> 	
</body> 	
</html> 	