<?php
include_once("common/connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h4><u>If you'd like to try out in our  play,please fill in this Audition Form</u><h4>


<form method="post" action="action.php" enctype="multipart/form-data">
<div>
<label for="reg_date">Date: </label>
<input type="reg_date" name="reg_date" placeholder="dd-mm-yyyy">
</div><br>
<div>
<label for="playtitle">PlayTitle:</label>
<input type="text" name="labeltitle">
</div><br>
<div>
<label for="name">Name: </label>
<input type="text" name="name" placeholder="Name">
</div><br>
<div>
<label for="email">Email:</label>
<input type="email" name="email" $emailErr = "Invalid email format";>

</div><br>
<div>
<label for="address">Address:</label>
<input type="text" name="street" placeholder="Street Address">
<br><br>
<input type="text" name="street2"placeholder="Street Address Line 2">
<br><br>
<input type="text" name="city" placeholder="City"> <input type="text" name="region" placeholder="Region"><br><br>
<input type="number" name="postal" placeholder="Postal/Zip Code"> <!--label for="country">Country:</label-->
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
<input type="tel" name="telephone"placeholder="### ### ####">
</div><br>
<div>
<label for="language">Language:</label>
<input type="checkbox" name="language" value="BN">
<label for="bangla">Bengali</label>
<input type="checkbox" name="language" value="EN" checked>
<label for="english">English</label>
<input type="checkbox" name="language" value="HN">
<label for="hindi">Hindi</label>
<input type="checkbox" name="language" value="AB">
<label for="arabic">Arabic</label>
</div><br>

<div>
<label for="role">Preferred Role:</label>
<input type="text" name="role">
</div><br>
<div>
<label for="accept">Will you accept another?: </label>
<input type="radio" name="accept"value="yes" checked>Yes
<input type="radio" name="accept" value="no">No
</div><br>
<div>
<label for="age">Candidate Age: </label>
<input type="number" name="age">
</div><br>
<div>
<label for="height">Height: </label>
<input type="number" name="height">
</div><br>
<div>
<label for="fileUpload">File Upload: </label>
<input type="file" name="fileUpload" id="fileUpload">
</div><br>
<div>
<input type="submit" name="btnSubmit" value="SUBMIT AUDITION FORM ">
</div><br>

</form>

</body>
</html>
