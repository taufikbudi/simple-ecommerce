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

$productno = $_POST['noproduct'];
$jumlah = $_POST['jumlah'];
$session = session_id();

$query_insert = "insert into tbl_order_tmp(session_order, quantity_order,no_product_order) 
		         values ('$session','$jumlah','$productno')";
mysql_query($query_insert) or die ("Mysql Error");

header("location: view_order_products.php");


?>