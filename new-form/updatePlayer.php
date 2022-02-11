<?php
include_once("common/connection.php");
$id=$_REQUEST['id'];

// $name=""; $email=""; $phone=''; $labeltitle=""; $street=""; $street2=""; $city=""; $region=""; $postal=""; $role=""; $age=""; $height="";
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $sql = "SELECT * FROM Players WHERE id=$id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $row=$result->fetch_assoc();
    $id;$name="";$email="";$phone=""; $labeltitle=""; $street=""; $street2=""; $city=""; $region=""; $postal=""; $role=""; $age=""; $height="";
    $id=$row["id"];
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["telephone"];
    $labeltitle=$row["labeltitle"];
    $street=$row["street"];
    $street2=$row["street2"];
    $city=$row["city"];
    $region=$row["region"];
    $postal=$row["postal"];
    $role=$row["role"];
    $age=$row["age"];
    $height=$row["height"];
    $language=$row["language"];
    $accept=$row["accept"];
  } else {
    echo "0 results";
  }
}
  $conn->close();
  ?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h4><u>If you'd like to try out in our  play,please fill in this Audition Form</u><h4>


<form method="post" action="updatePlayerAction.php">
  <!-- <input type="hidden" name="hiddenID" value="<?php echo $id;?>"> -->
<div>
<input type="hidden" name="txtID" value="<?php echo $id;?>">
<label for="reg_date">Date: </label>
<input type="reg_date" name="reg_date" placeholder="dd-mm-yyyy">
</div><br>
<div>
<label for="playtitle">PlayTitle:</label>
<input type="text" name="labeltitle" value="<?php echo $labeltitle;?>">
</div><br>
<div>
<label for="name">Name: </label>
<input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
</div><br>
<div>
<label for="email">Email:</label>
<input type="email" name="email" $emailErr = "Invalid email format" value="<?php echo $email;?>";>

</div><br>
<div>
<label for="address">Address:</label>
<input type="text" name="street" placeholder="Street Address" value="<?php echo $street;?>">
<br><br>
<input type="text" name="street2"placeholder="Street Address Line 2" value="<?php echo $street2;?>">
<br><br>
<input type="text" name="city" placeholder="City" value="<?php echo $city;?>"> <input type="text" name="region" placeholder="Region" value="<?php echo $region;?>"><br><br>
<input type="number" name="postal" placeholder="Postal/Zip Code" value="<?php echo $postal;?>"> <!--label for="country">Country:</label-->
 <select name="country" name="country">
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option selected value="BD">Bangladesh</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
</select>
</div><br>
<div>
<label for="telephone">Phone:</label>
<input type="tel" name="telephone"placeholder="### ### ####" value="<?php echo $phone;?>">
</div><br>
<div>
<label for="language">Language:</label>
<input type="checkbox" name="language" value="BN" <?php if($language=="BN"){ echo "checked";}?>>
<label for="bangla">Bengali</label>
<input type="checkbox" name="language" value="EN" <?php if($language=="EN"){ echo "checked";}?>>
<label for="english">English</label>
<input type="checkbox" name="language" value="HN" <?php if($language=="HN"){ echo "checked";}?>>
<label for="hindi">Hindi</label>
<input type="checkbox" name="language" value="AB" <?php if($language=="AB"){ echo "checked";}?>>
<label for="arabic">Arabic</label>
</div><br>

<div>
<label for="role">Preferred Role:</label>
<input type="text" name="role" value="<?php echo $role;?>">
</div><br>
<div>
<label for="accept">Will you accept another?: </label>
<input type="radio" name="accept"value="yes" <?php if($accept=="yes"){echo "checked";}?> >Yes
<input type="radio" name="accept" value="no" <?php if($accept=="no"){echo "checked";}?> >No
</div><br>
<div>
<label for="age">Candidate Age: </label>
<input type="number" name="age" value="<?php echo $age;?>">
</div><br>
<div>
<label for="height">Height: </label>
<input type="number" name="height" value="<?php echo $height;?>">
</div><br>
<div>
<input type="submit" name="update" value="UPDATE ">
</div><br>
</form>
</body>
</html>
