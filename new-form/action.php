<?php
include_once("common/connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
  <?php
  $name = $email = $street =$city =$reg_date =$emailErr =$language =$country =$region =$postal =$age =$height =$accept =$telephone =$role =$labeltitle = $street2 = $address ="" ;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $reg_date = test_input($_POST["date"]);
    $labeltitle = test_input($_POST["labeltitle"]);
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
  ?>

<?php
echo "<h2>Here is the information :</h2>";
echo "PlayTitle: ";echo $labeltitle;
echo "<br>";
echo "Name: ";echo $name;
echo "<br>";
echo "Email: ";echo $email;
echo "<br>";
echo "Address: ";echo $street;
echo "<br>";
echo "Street2: ";echo $street2;
echo "<br>";
echo "City: ";echo $city;
echo "<br>";
echo "Postal/Zip Code: ";echo $postal;
echo "<br>";
echo "Country: ";echo $country;
echo "<br>";
echo "Region: ";echo $region;
echo "<br>";
echo "Phone: ";echo $telephone;
echo "<br>";
echo "Language: ";echo $language;
echo "<br>";
echo "Preferred Role: ";echo $role;
echo "<br>";
echo "Will you accept another?: ";echo $accept;
echo "<br>";
echo "Candidate Age: ";echo $age;
echo "<br>";
echo "Height:  ";echo $height ;
echo "<br>";
?>

<?php
$stmt = $conn->prepare("INSERT INTO Players (labeltitle, name, email, street, street2, country, accept, city, language, region,  telephone, postal, role, age, height) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssiisii", $labeltitle, $name, $email, $street, $street2, $country, $accept, $city, $language, $region,  $telephone, $postal, $role, $age, $height);
$stmt->execute();
 echo "successfully <br>";
$stmt->close();
$conn->close();
?>
<!-- immage -->
<?php
$select_dir = "media/";
$select_file = $select_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imgFileType = strtolower(pathinfo($select_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// //check file already are_exists
if(file_exists($select_file)){
  echo "file exist";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileUpload"]["size"] > 500000) {
  echo "Sorry,file is too large.";
  $uploadOk = 0;
}
//allow formats
if($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
//check
if($uploadOk == 0){
  echo "sorry, not uploaded";
  //if everything ok
}else {
  if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $select_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

</body>
</html>
