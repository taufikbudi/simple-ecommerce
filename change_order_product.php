<?php
/* 	
	Membangun E-Commerce dengan PHP
 	By : Al-k ilmuwebsite staff 
	alkemail@gmail.com 
	http://www.ilmuwebsite.com
*/

session_id();
session_start();

require_once "config.php";

$jumlah = $_POST['jumlah'] ;
$no_order = $_POST['no_order_temp'];
$session = session_id();

$query_change = "update tbl_order_tmp set quantity_order ='$jumlah' where hidden_order='$no_order'";
$change = mysql_query($query_change) or die("Mysql query error");

if($change)
{
echo "Database telah di update ... ";
echo "<meta http-equiv='refresh' content='2;url=view_order_products.php'>";
}

else 
{
echo "kesalahan query";
}

?>