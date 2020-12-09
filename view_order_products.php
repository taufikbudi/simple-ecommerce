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
$session = session_id();

$query_order_view = "SELECT  hidden_order,no_product,name_product,quantity_order,price_product FROM 
					 tbl_products NATURAL JOIN tbl_order_tmp WHERE session_order = '$session' 
					 AND no_product_order = no_product ;";
$order_view = mysql_query($query_order_view) or die ("Mysql Error");
$jumlah_order = mysql_num_rows($order_view);
?>
<html><head></head><body>
<?php
echo "<center><h4>Anda memiliki order sebanyak : <font color=red>$jumlah_order</font></h4></center>";
echo "<table border=1 align=center width=65% >";
echo "<tr align=center><th width=5%>Jumlah</th><th width=30%>Image</th>
	  <th width=35%>Name Produk</th><th width=20%>Harga Satuan</th><th width=20%>Harga Total</th><th></th><th></th></tr>";
while ($view = mysql_fetch_array($order_view))
{
	extract($view);
	// echo $hidden_order." ".$quantity_order." ".$no_product_order."<br>" ;
	$hargasatuan = number_format($price_product, 2) ;
	$hargayangdibeli = number_format($quantity_order*$price_product, 2);
	
	$jumlah_hargayangdibeli += ($quantity_order*$price_product) ;
	
	echo "<tr align=center>
		  <form action=change_order_product.php method=POST><td>
		  <input type=hidden name=no_order_temp value=$hidden_order>
		  <input type=text name=jumlah value=$quantity_order size=5></td><td></td>
		  <td><a href=view_product.php?id=$no_product>$name_product</a></td><td align=right>".$hargasatuan."
		  </td><td align=right>".$hargayangdibeli."</td>
		  <td width=15%><input type=submit value='Update'>
		  </td>
		  </form><form action=del_order_product.php method=POST>
		  <td width=15%>
		  <input type=hidden name=no_order_temp value=$hidden_order>
		  <input type=submit value='Delete' >
		  </td></form></tr>";
}

echo "<tr><td colspan=4 align=right><b>Total Semuanya :</b></td><td align=right>
	  <b>".number_format($jumlah_hargayangdibeli,2)."</b></td></tr>";
echo "</table><br><center><form action=order_check_out.php method=post>
	  <input type=submit name=process value='Proceed to checkout'></form></center>";
echo "<center<a href='products.php'>Kembali ke halaman utama...</a></center>";
?>
</body>
</html>