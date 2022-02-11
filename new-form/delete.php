<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['id'])){
  $id=$_GET['id'];


$sql = "DELETE  FROM Players WHERE id=$id";
$result = $conn->query($sql);
if($result){
}else{
  die(mysqli_error($conn));

}
header("Location:tableshow.php");
}

$conn->close();
?>
