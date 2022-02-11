<?php
include_once("common/connection.php");

 $stmt = $conn->prepare("INSERT INTO Players (labeltitle, name, email, street, street2, city, region,  telephone, postal, role, age, height) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
 $stmt->bind_param("sssssssiisii", $labeltitle, $name, $email, $street, $street2, $city, $region,  $telephone, $postal, $role, $age, $height);

$stmt->close();
$conn->close();
?>
