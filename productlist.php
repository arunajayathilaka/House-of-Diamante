<?php
require_once 'init.php';

$productQuery=mysql_query("SELECT product_items.product_name,product_items.product_dec,product_items.product_price FROM product_items");

while($row=mysql_fetch_array($productQuery)){
	$products[]=$row;
}

?>