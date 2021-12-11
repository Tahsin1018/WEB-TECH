<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE product_info (
  
  name VARCHAR(30) NOT NULL,
  Buying Price int(30) NOT NULL,
 
  Selling Price int(30) NOT NULL
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>