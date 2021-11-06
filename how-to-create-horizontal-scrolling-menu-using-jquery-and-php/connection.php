<?php
$servernme= "localhost";
$usernme = "root";
$pword = "";
$dbname ="menu2";
try {
  $conn = new PDO("mysql:host=$servernme;dbname=menu2", $usernme, $pword);
  // set the PDO error mode to exception
} catch(PDOException $e) {
  echo "no established connection: ";
}
// Create connection
$conn = new mysqli($servernme, $usernme, $pword,$dbname);
// Check connection
if ($conn->connect_error) {
  die("no established connection: ". $conn->connect_error);
}
$sql = "SELECT table_data FROM menu_items";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  }
} else {
  echo "no results found";
}
