<?php
include "connect.php";
//$id=$GET['userid'];
if (isset($_GET['tambah'])){
$nama=$_GET["nama"];
$email=$_GET["email"];
$query=mysql_query("UPDATE anggota SET nama='$nama',email='$email' WHERE userid='$id'");
}
echo $query;
?>