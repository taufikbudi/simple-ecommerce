<?php
/* 	
	Membangun E-Commerce dengan PHP
 	By : Al-k ilmuwebsite staff 
	alkemail@gmail.com 
	http://www.ilmuwebsite.com
*/

require_once "config.php";
?>

<html><head><title>Ilmuwebsite E-Commerce</title></head>
<p><center><h2>Welcome to Ilmuwebsite E-Commerce</center></h2></p>
<p><center>Ilmuwebsite E-Commerce, menjual barang-barang berkualitas, dicari ditoko <br>
manapun pasti nggak bakal ditemukan dengan mudah, selain itu pasti murah <br>dan juga harganya terjangkau...</center></p>
<body></body>
<table align='center' width='30%'>
<?php
$product_show = "select no_product, name_product, price_product from tbl_products order by no_product desc";
$query_product_show = mysql_query($product_show);

while($product = mysql_fetch_array($query_product_show))
{
$no = $product['no_product'] ;
$name = $product['name_product'];
$price = number_format($product['price_product'], 2) ;
$angka++ ;
echo "<tr><td><a href=view_product.php?id=$no>Gambar $angka</a></td><td width=30%>
	  <a href=view_product.php?id=$no>$name</a></td><td align=right>$price</td></tr>";
}

?>
</table>
</html>