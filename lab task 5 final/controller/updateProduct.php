<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['Buying Price'] = $_POST['Buying Price'];
	$data['Selling Price'] = $_POST['Selling Price'];
	


  if (updateProduct($_POST['name'], $data)) {
  	echo 'Updated successfully!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["name"]);
  }
} else {
	echo 'You can not access this page.';
}


?>