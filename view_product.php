<?php
/* 	
	Membangun E-Commerce dengan PHP
 	By : Al-k ilmuwebsite staff 
	alkemail@gmail.com 
	http://www.ilmuwebsite.com
*/
require_once "config.php";

$orderid = $_REQUEST['id'] ;

$view_order = "select no_product, name_product, desc_product, 
			   price_product from tbl_products where no_product = '$orderid'";
			   
$query_view_order = mysql_query($view_order);
$view = mysql_fetch_array($query_view_order);
$no = $view['no_product'] ;
$name = $view['name_product'];
$desc = $view['desc_product'];
$price = number_format($view['price_product'], 2) ;
?>

<html><head></head><body>
<table border=0 align=center width=50%>
<tr><td>IMAGE</td><td width=70%>

<?php
echo "<b>$name</b><br>";
echo "$desc<br>";
echo "No Produk : $no <br>";
echo "Harga : $price<br><br>";
?>

</td><tr>
<td></td><td><form action="add_order_product.php" method="POST">Jumlah : 
<input type="jumlah" name="jumlah"><input type="hidden" name="noproduct" value="<?php echo $no ;?>">
<input type="submit" name="submit" value="Add to Cart"></form></td></tr>
<tr><td></td><td><form action="view_order_products.php" method="POST">
<input type=submit name=view_product value="View Cart"></form></td></tr>
</table><center<a href="products.php">Kembali...</a></center>
</body></html>