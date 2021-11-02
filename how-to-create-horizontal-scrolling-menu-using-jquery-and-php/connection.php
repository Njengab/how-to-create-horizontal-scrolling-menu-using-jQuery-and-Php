<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="menu2";

try {
  $conn = new PDO("mysql:host=$servername;dbname=menu2", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();

}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
  }
} else {
  echo "0 results";
}
$conn->close();
?>