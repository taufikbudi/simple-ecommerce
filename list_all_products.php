<?php
/* 	
	Membangun E-Commerce dengan PHP
 	By : Al-k ilmuwebsite staff 
	alkemail@gmail.com 
	http://www.ilmuwebsite.com
*/

require_once "config.php";
$show_products = "select * from tbl_products order by no_product asc";
$query_show_products = mysql_query($show_products);
?>

<html><head><title>List Products - E-Commerce</title></head>
<body>

<p><center><h2>List Products E-Commerce</center></h2>
<table width='80%' height= '50%' border='0' align='center'>
<tr><th width='5%' align='center' >No</th><th width='10%' align='center'>Nama</th>
<th align='center'width='40%'>Deskripsi</th><th align='center' width='5%'>Harga</th>
<th width='5%' align='center'>Tanggal</th></tr>

<?php
while ( $product = mysql_fetch_array($query_show_products) )
{
$no = $product['no_product'] ;
$date = $product['date_add_product'] ;
$name = $product['name_product'];
$desc = $product['desc_product'];
$price = $product['price_product'] ;

echo '<tr><td align=center>'.$no.'</td><td >'.$name.'</td><td >'.$desc.
	 '</td><td >'.$price.'</td><td >'.$date. '</td></tr>';
}
?>

</table>
</body>
</html>