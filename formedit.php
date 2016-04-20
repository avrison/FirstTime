<?php
include "connect.php";
$id=$_GET['userid'];
$query=mysqlquery("SELECT userid,nama,email FROM anggota WHERE userid='$id'");
$row=mysql_fetch_assoc($query);
?>
<html>
<head><title>Edit</title></head>
<style>
body{background-color:#d0e4fe;}
</style>
<body>
<center><table border="1" cellpadding="8" cellspacing="0"> 
<form action="edit.php" method="get">
<table>
<tr>
<th colspan="2">Member Login</td> 	
</tr> 	
<tr> 	
<td>User ID </td> 	
<td><input name="userid" type="text" value="<?php echo $row=['nama'];?>"/></td> 	
</tr> 	
<tr> 	
<td>Password</td> 	
<td><input name="email" type="text" value="<?php echo $row=['email'];?>"/></td> 	
</tr> 	
<tr> 	
<td colspan="2" align="center"><input type="submit" name="tambah" 	
value="Edit" /></td> 	
</tr> 	
<tr> 	
<td colspan="2" align="center"><a 	
href="index.php">Back</a></td></center>	
</tr> 	
</form> 	
</table> 	
</body> 	
</html>	
