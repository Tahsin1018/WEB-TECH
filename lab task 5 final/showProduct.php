<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
	
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['Name'] ?>"><?php echo $product['name'] ?></a></td>
		<td><?php echo $product['BuyingPrice'] ?></td>
		<td><?php echo $product['SellingPrice'] ?></td>
	
	</tr>

</table>


</body>
</html>