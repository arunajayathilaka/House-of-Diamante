<?php
require_once 'init.php';

if(isset($_POST['item1']) && isset($_POST['item2'])){
		
	$itemname1=$_POST['item1'];
	$itemname2=$_POST['item2'];
	

	$productQuery=mysql_query("SELECT product_items.product_name,product_items.product_dec,product_items.product_price FROM product_items WHERE product_name='{$itemname1}' OR product_name='{$itemname2}'");

	while($row=mysql_fetch_array($productQuery)){
		$products[]=$row;
	}
	if(@count($products) != 0 ){
		foreach($products as $product1){
			echo '
				<div class="col-md-6">
								<div class="thumbnail">
									<img src="http://placehold.it/320x150" alt="">
									<div class="caption">
										<h4 class="pull-right">'.$product1['product_price'].'</h4>
										<h4><a href="#">'.$product1['product_name'].'</a>
										</h4>
										<p>'.$product1['product_dec'].' </p>
									</div>
									
									<div>
									</div>
								</div>
							</div>
			';
		}
	}
	else{
		echo '<p>not found</p>';
	}
}
?>