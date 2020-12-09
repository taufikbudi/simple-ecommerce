<?php
/* 	
	Membangun E-Commerce dengan PHP
 	By : Al-k ilmuwebsite staff 
	alkemail@gmail.com 
	http://www.ilmuwebsite.com
*/
$host 	  = "localhost";
$username = "root";
$password = "";
$database = "simpl";

$connect  = mysql_connect($host, $username, $passwod ) ;
$select   = mysql_select_db($database, $connect);

if ($select) echo ""; 
else echo "Error Connection !!";

?>