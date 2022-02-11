<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data show</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <script src="inc/jquery.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </head>
<body>
  <?php
  include_once("common/connection.php");
  ?>
   <!-- $msg=$_GET['msg']; -->


  <div class="panel-body">
    <!-- <?php echo $msg;?> -->
    <table class="table table-striped">
      <tr>
        <th width="20%">Id</th>
        <th width="20%">Name</th>
        <th width="20%">Email</th>
        <th width="20%">Telephone</th>
        <th width="20%">Action</th>
      </tr>
      <?php

      $sql = "SELECT id, name, email, telephone FROM Players WHERE id!=22 ORDER BY name";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $id=1;$name="";$email="";$phone="";
          $id=$row["id"];
          $name=$row["name"];
          $email=$row["email"];
          $phone=$row["telephone"];?>
          <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $name;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $phone;?></td>
            <td>
              <a href="updatePlayer.php?id=<?php echo $id;?>">Update</a>
              <a href="delete.php?id=<?php echo $id;?>">Delete</a>
            </td>
          </tr>
        <?php }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
    </table>

</div>

  </body>
  </html>
