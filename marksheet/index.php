<?php
$grade=$grade1=$grade2=$grade3=$grade4=$grade5=$grade6=$grade7=$grade8=$grade9="";
if(isset($_POST['subtn'])){
$bn=$_POST['ban'];
$en=$_POST['eng'];
$mt=$_POST['math'];
$ph=$_POST['phy'];
$ch=$_POST['chem'];
$bi=$_POST['bio'];
$ss=$_POST['ssc'];
$is=$_POST['ist'];
$ec=$_POST['eco'];
$sc=$_POST['sci'];}
//for bangla
if ($bn>0 && $bn<=32){
  $grade = "F <br>";
}
else if ($bn>=33 && $bn<=39) {
  $grade = "D <br>";
}
else if ($bn>=40 && $bn<=49) {
  $grade = "C <br>";
}
else if ($bn>=50 && $bn<=59) {
  $grade = "B <br>";
}
else if ($bn>=60 && $bn<=69) {
  $grade = "A- <br>";
}
else if ($bn>=70 && $bn<=79) {
  $grade = "A <br>";
}
else if ($bn>=80 && $bn<=100) {
  $grade = "A+ <br>";
}
  //for english
  if ($en>0 && $en<=32){
    $grade1 = "F <br>";
  }
  else if ($en>=33 && $en<=39) {
    $grade1 = "D <br>";
  }
  else if ($en>=40 && $en<=49) {
    $grade1 = "C <br>";
  }
  else if ($en>=50 && $en<=59) {
    $grade1 = "B <br>";
  }
  else if ($en>=60 && $en<=69) {
    $grade1 = "A- <br>";
  }
  else if ($en>=70 && $en<=79) {
    $grade1 = "A <br>";
  }
  else if ($en>=80 && $en<=100) {
    $grade1 = "A+ <br>";
  }
//for math
if ($mt>0 && $mt<=32){
  $grade2 = "F <br>";
}
else if ($mt>=33 && $mt<=39) {
  $grade2 = "D <br>";
}
else if ($mt>=40 && $mt<=49) {
  $grade2 = "C <br>";
}
else if ($mt>=50 && $mt<=59) {
  $grade2 = "B <br>";
}
else if ($mt>=60 && $mt<=69) {
  $grade2 = "A- <br>";
}
else if ($mt>=70 && $mt<=79) {
  $grade2 = "A <br>";
}
else if ($mt>=80 && $mt<=100) {
  $grade2 = "A+ <br>";
}

//for physics
if ($ph>0 && $ph<=32){
  $grade3 = "F <br>";
}
else if ($ph>=33 && $ph<=39) {
  $grade3 = "D <br>";
}
else if ($ph>=40 && $ph<=49) {
  $grade3 = "C <br>";
}
else if ($ph>=50 && $ph<=59) {
  $grade3 = "B <br>";
}
else if ($ph>=60 && $ph<=69) {
  $grade3 = "A- <br>";
}
else if ($ph>=70 && $ph<=79) {
  $grade3 = "A <br>";
}
else if ($ph>=80 && $ph<=100) {
  $grade3 = "A+ <br>";
}
  //for chemistry
  if ($ch>0 && $ch<=32){
    $grade4 = "F <br>";
  }
  else if ($ch>=33 && $ch<=39) {
    $grade4 = "D <br>";
  }
  else if ($ch>=40 && $ch<=49) {
    $grade4 = "C <br>";
  }
  else if ($ch>=50 && $ch<=59) {
    $grade4 = "B <br>";
  }
  else if ($ch>=60 && $ch<=69) {
    $grade4 = "A- <br>";
  }
  else if ($ch>=70 && $ch<=79) {
    $grade4 = "A <br>";
  }
  else if ($ch>=80 && $ch<=100) {
    $grade4 = "A+ <br>";
  }
  //Biology
  if ($bi>0 && $bi<=32){
    $grade5 = "F <br>";
  }
  else if ($bi>=33 && $bi<=39) {
    $grade5 = "D <br>";
  }
  else if ($bi>=40 && $bi<=49) {
    $grade5 = "C <br>";
  }
  else if ($bi>=50 && $bi<=59) {
    $grade5 = "B <br>";
  }
  else if ($bi>=60 && $bi<=69) {
    $grade5 = "A- <br>";
  }
  else if ($bi>=70 && $bi<=79) {
    $grade5 = "A <br>";
  }
  else if ($bi>=80 && $bi<=100) {
    $grade5 = "A+ <br>";
  }
  //social Science
  if ($ss>0 && $ss<=32){
    $grade6 = "F <br>";
  }
  else if ($ss>=33 && $ss<=39) {
    $grade6 = "D <br>";
  }
  else if ($ss>=40 && $ss<=49) {
    $grade6 = "C <br>";
  }
  else if ($ss>=50 && $ss<=59) {
    $grade6 = "B <br>";
  }
  else if ($ss>=60 && $ss<=69) {
    $grade6 = "A- <br>";
  }
  else if ($ss>=70 && $ss<=79) {
    $grade6 = "A <br>";
  }
  else if ($ss>=80 && $ss<=100) {
    $grade6 = "A+ <br>";
  }
  //Islamic
  if ($is>0 && $is<=32){
    $grade7 = "F <br>";
  }
  else if ($is>=33 && $is<=39) {
    $grade7 = "D <br>";
  }
  else if ($is>=40 && $is<=49) {
    $grade7 = "C <br>";
  }
  else if ($is>=50 && $is<=59) {
    $grade7 = "B <br>";
  }
  else if ($is>=60 && $is<=69) {
    $grade7 = "A- <br>";
  }
  else if ($is>=70 && $is<=79) {
    $grade7 = "A <br>";
  }
  else if ($is>=80 && $is<=100) {
    $grade7 = "A+ <br>";
  }
  //Economics
  if ($ec>0 && $ec<=32){
    $grade8 = "F <br>";
  }
  else if ($ec>=33 && $ec<=39) {
    $grade8 = "D <br>";
  }
  else if ($ec>=40 && $ec<=49) {
    $grade8 = "C <br>";
  }
  else if ($ec>=50 && $ec<=59) {
    $grade8 = "B <br>";
  }
  else if ($ec>=60 && $ec<=69) {
    $grade8 = "A- <br>";
  }
  else if ($ec>=70 && $ec<=79) {
    $grade8 = "A <br>";
  }
  else if ($ec>=80 && $ec<=100) {
    $grade8 = "A+ <br>";
  }
  //Science
  if ($sc>0 && $sc<=32){
    $grade9 = "F <br>";
  }
  else if ($sc>=33 && $sc<=39) {
    $grade9 = "D <br>";
  }
  else if ($sc>=40 && $sc<=49) {
    $grade9 = "C <br>";
  }
  else if ($sc>=50 && $sc<=59) {
    $grade9 = "B <br>";
  }
  else if ($sc>=60 && $sc<=69) {
    $grade9 = "A- <br>";
  }
  else if ($sc>=70 && $sc<=79) {
    $grade9 = "A <br>";
  }
  else if ($sc>=80 && $sc<=100) {
    $grade9 = "A+ <br>";
  }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grade</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <script src="inc/jquery.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </head>
<body>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Students Marksheet</h2>
      </div>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="panel-body">
        <table class="table table-striped ">
          <th width="20%">Serial</th>
          <th width="20%">Subject</th>
          <th width="20%">Obtained Marks</th>
          <th width="20%">Grade</th>
          <tr>
            <td>01</td>
            <td>Bangla</td>
            <td><input type="number" name="ban" value="<?php echo $bn;?>"></td>
            <td><?php echo $grade;?></td>
            </tr>
          <tr>
            <td>02</td>
            <td>English</td>
            <td><input type="number" name="eng" value="<?php echo $en;?>"></td>
            <td><?php echo $grade1;?></td>
            </tr>
          <tr>
            <td>03</td>
            <td>Math</td>
            <td><input type="number" name="math" value="<?php echo $mt;?>"></td>
            <td><?php echo $grade2;?></td>
            </tr>
          <tr>
            <td>04</td>
            <td>Physics</td>
            <td><input type="number" name="phy" value="<?php echo $ph;?>"></td>
            <td><?php echo $grade3;?></td>
            </tr>
          <tr>
            <td>05</td>
            <td>Chemistry</td>
            <td><input type="number" name="chem" value="<?php echo $ch;?>"></td>
            <td><?php echo $grade4;?></td>
            </tr>
          <tr>
            <td>06</td>
            <td>Biology</td>
            <td><input type="number" name="bio" value="<?php echo $bi;?>"></td>
            <td><?php echo $grade5;?></td>
            </tr>
          <tr>
            <td>07</td>
            <td>Social Science</td>
            <td><input type="number" name="ssc" value="<?php echo $ss;?>"></td>
            <td><?php echo $grade6;?></td>
            </tr>
          <tr>
            <td>08</td>
            <td>Islamic Study</td>
            <td><input type="number" name="ist" value="<?php echo $is;?>"></td>
            <td><?php echo $grade7;?></td>
            </tr>
          <tr>
            <td>09</td>
            <td>Economics</td>
            <td><input type="number" name="eco" value="<?php echo $ec;?>"></td>
            <td><?php echo $grade8;?></td>
            </tr>
          <tr>
            <td>10</td>
            <td>Science</td>
            <td><input type="number" name="sci" value="<?php echo $sc;?>"></td>
            <td><?php echo $grade9;?></td>
            </tr>
          </table>
          </div>
          <div>
            <input type="submit" value="CHECK GRADE" name="subtn" style="display:none">
          </div><br>
  </form>
  </div>
</body>
</html>
