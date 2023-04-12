<?php

//fetch_data.php
include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM products WHERE p_cat_id='10'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["man"]))
	{
		$man_filter = implode("','", $_POST["man"]);
		$query .= "
		 AND manufacturer_title IN('".$man_filter."')
		";
	}
	if(isset($_POST["cat"]))
	{
		$cat_filter = implode("','", $_POST["cat"]);
		$query .= "
		 AND cat_title IN('".$cat_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-xl-3 col-lg-3 col-sm-5 col-xs-4 filterprod">
				<div style="background-color:#fff;border:1px solid #ccc; border-radius:5px; padding:10px; margin-bottom:10px; height:325px;">
					<a href="../details.php?pro_id='. $row['product_id'] .' "><img src="../admin_area/product_images/'. $row['product_img1'] .'" alt="" class="img-responsive"></a>
					<p align="center"><strong><a href="../details.php?pro_id='. $row['product_id'] .' ">'. $row['product_title'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3 align="center">Ooops Nothing Found!</h3>';
	}
	echo $output;
}

?>
<html>
<link rel="stylesheet" href="..styles/style.css">    
</html>