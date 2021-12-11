
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:6px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Product_id</th>
			<th>Product_name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchProducts as $product => $product): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['ID'] ?></a></td>
				<td><?php echo $product['name'] ?></td>
				<td><a href="../editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>