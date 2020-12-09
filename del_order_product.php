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
$no_order = $_POST['no_order_temp'];

$query_delete = "delete from tbl_order_tmp where hidden_order='$no_order'";

$delete = mysql_query($query_delete);
if($delete)
{
echo "Delete Record berhasil ... ";
echo "<meta http-equiv='refresh' content='2;url=view_order_products.php'>";
}

else 
{
echo "kesalahan query";
}

?>