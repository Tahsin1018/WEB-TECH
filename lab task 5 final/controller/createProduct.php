

<?php  

require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['BuyingPrice'] = $_POST['BuyingPrice'];
	$data['SellingPrice'] = $_POST['SellingPrice'];

  if (addProduct($data)) {
  	echo 'Added successfully!!';
  }
} else {
	echo 'You can not access this page.';
}

?>