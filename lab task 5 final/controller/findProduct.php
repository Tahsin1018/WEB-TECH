<?php

require_once '../model/model.php';

if (isset($_POST['findProduct'])) {
	
		echo $_POST['product_name'];

    try {
    	
    	$allSearchedproducts = searchProduct($_POST['product_name']);
    	require_once '../showSearchProducts.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}