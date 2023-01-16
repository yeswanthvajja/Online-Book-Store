<?php
   
   include_once "config.php";
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Retrieve Data fr</title>

 </head>
 <body>
   <h1>Retrieve Data from DB</h1>

<?php
    $sql = "SELECT * FROM userinfo";

    if($result = $conn->query($sql)) {
      
    
  
    
    if($result->num_rows > 0) {
  ?>

    <table>
      <tr>
        <th>First Name</th>
        <th>last name</th>
        <th>E-mail Address</th>
        <th>Password</th>
        <th> age </th>
        <th>Phone number</th>
        <th> address </th>
      </tr>

    <?php
      while($row = $result->fetch_array()) {
  ?>
<tr>

<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['pnumber'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['isAdmin'];?></td>

</tr>

<?php
}
?>

      </table>
      <?php

    }
     
     else {
         echo "No results :/";
 }
}
     else {
      echo "ERROR: $sql. " .$conn->error;
             }
?>

 </body>
</html>
