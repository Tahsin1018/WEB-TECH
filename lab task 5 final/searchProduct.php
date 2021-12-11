
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findProduct.php">
      <h1>SEARCH</h1>
      <input type="text" name="product_name" />
      <input type="submit" name="findProduct" value="Search By Name"/>
    </form>


 
  </body>
</html>