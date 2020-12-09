<?php
/* 	
	Membangun E-Commerce dengan PHP
 	By : Al-k ilmuwebsite staff 
	alkemail@gmail.com 
	http://www.ilmuwebsite.com
*/

require_once "config.php";
$tbl_product = "create table tbl_products ( no_product int(5) NOT NULL, 
			   date_add_product date NOT NULL, name_product varchar(20) NOT NULL, 
			   desc_product text NOT NULL, price_product DEC(10,2) NOT NULL, 
			   PRIMARY KEY(no_product) );" ;
$sql_tbl_product = mysql_query($tbl_product) or die("tbl_product can't created");

$tbl_order_tmp = "create table tbl_order_tmp( hidden_order int(5) auto_increment, session_order varchar(30) NOT NULL, 
				  quantity_order int(3) NOT NULL, no_product_order int(5) NOT NULL, 
				  PRIMARY KEY(hidden_order));";
$sql_tbl_order_tmp = mysql_query($tbl_order_tmp) or die ("tbl_order_tmp can't created");

$tbl_customer = "create table tbl_customer ( number_customer int(5) NOT NULL, first_name varchar(20) NOT NULL, 
				    last_name varchar(50) NOT NULL, address_1 varchar(75) NOT NULL, 
				    address_2 varchar(75) NOT NULL, city varchar(20) NOT NULL,
				    state varchar(20) NOT NULL, post_code int(9) NOT NULL, 
				    mail varchar(35) NOT NULL, PRIMARY KEY(number_customer));";
$sql_tbl_customer = mysql_query($tbl_customer) or die ("tbl_custmoer can't created");
											
$tbl_order =  "create  table tbl_order ( order_number int (5) NOT NULL, order_date date NOT NULL, number_customer int(5) NOT NULL, 
			  sub_total dec(12,2) NOT NULL, shipping dec(12,2) NOT NULL, cost_delivery dec(12,2) NOT NULL, 
			  total dec(12,2) NOT NULL,  ship_first_name varchar(20) NOT NULL, ship_last_name varchar(30) NOT NULL, 
			  ship_add_1 varchar(75) NOT NULL, ship_add_2 varchar(75) NOT NULL, ship_city varchar(50) NOT NULL, 
			  ship_state varchar(25) NOT NULL, ship_post_code int(8) NOT NULL, ship_phone_nmr int(15) NOT NULL,
			  email varchar(35) NOT NULL, PRIMARY KEY(order_number) );";
$sql_tbl_order = mysql_query($tbl_order) or die ("tbl_order can't created");
							 
$tbl_order_count = "create table tbl_order_count(order_number int(5) NOT NULL, quantity_order int(5) NOT NULL, 
					product_number int(5) NOT NULL,  KEY(order_number)) ;";
$sql_tbl_count = mysql_query($tbl_order_count) or die ("tbl_order_count can't created");

$products = "insert into tbl_products values
		     ('001',Now(),'Mouse Optic Techno','Mouse techno terkenal dengan kestabilannya, karena menggunakan optic anda tidak perlu lagi membersihkan permukaan dibawahnya...','1500000'), 
			  ('002',Now(),'Notebook Acer Aspire 3680','Acer, notebook keluaran tahun 2007 ini telah banyak digunakan oleh para bisnisman muda, dan berbakat, seperti Mr.Al-k misalnya ... :D','400000000'),
			  ('003',Now(),'Headphone Keenion','Headphone keren yang dilengkapi dengan effect 3D, pasang ditelinga anda, dan rasakan kekuatan suaranya... menggemparkan telinga anda, sampai anda tidak bisa mendengar lagi ... hueheuuehue ... ','4500000'),
			  ('004',Now(),'Nokia Serie N70','Nokia Serie N70, smart phone yang digunakan oleh para eksekutif muda pemegang saham... b-scorpio misalnya, tapi anehnya dia tidak memiliki notebook acer ... ','300000'),
			  ('005',Now(),'Supra X 125','Larinya tak ada tandingannya, melesat bagai kilat. Supra X 125 dirancang untuk sport motor. Pelengkap gaya pemikat wanita ... :D~`','1500000')";

$sql_products = mysql_query($products ) or die ( "products can't created");
?>