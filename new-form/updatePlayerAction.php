<?php
include_once("common/connection.php");
  $name = $email = $street =$city =$reg_date =$emailErr =$language =$country =$region =$postal =$age =$height =$accept =$telephone =$role =$labeltitle = $street2 = $address ="" ;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $reg_date = test_input($_POST["date"]);
    $labeltitle = test_input($_POST["labeltitle"]);
    $id= test_input($_POST["txtID"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $street = test_input($_POST["street"]);
    $street2 = test_input($_POST["street2"]);
    $city = test_input($_POST["city"]);
    $country = test_input($_POST["country"]);
    $telephone = test_input($_POST["telephone"]);
    $language = test_input($_POST["language"]);
    $role = test_input($_POST["role"]);
    $accept = test_input($_POST["accept"]);
    $age = test_input($_POST["age"]);
    $height = test_input($_POST["height"]);
    $region = test_input($_POST["region"]);
    $postal = test_input($_POST["postal"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
   $sql="UPDATE Players set name='$name', email='$email', telephone='$telephone', city='$city', street='$street', street2='$street2', language='$language', role='$role', accept='$accept', age='$age', height='$height', region='$region', labeltitle='$labeltitle', postal='$postal' WHERE id=$id";
  if($conn->query($sql)){
    header('Location: tableshow.php?msg="<span style="color:green">Successfully Updated</span>"');
  }else {
    header('Location: tableshow.php?msg="Something Went Wrong"');
  }
  $conn->close();
?>
