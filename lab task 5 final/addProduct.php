<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   
<h2>ADD PRODUCT</h2>
 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="BuyingPrice">Buying Price:</label><br>
  <input type="value" id="BuyingPrice" name=BuyingPrice><br>
  <label for="SellingPrice">Selling Price:</label><br>
  <input type="value" id="SellingPrice" name="SellingPrice"><br>
  <br>
  <input type="checkbox" id="Display" name="Display" value="Display">
  <label for="Display"> Display</label><br>
  <br>
  <input type="submit" name = "createProduct" value="SAVE">
 <!--  <input type="reset">  -->
</form> 

</body>
</html>

