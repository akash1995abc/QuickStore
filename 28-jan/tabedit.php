<html>
<head>
<?php
include "dbcon.php";
if(isset($_POST["signup"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
mysqli_query($con,"insert into tbluser (name,address,phone) values('".$name."','".$email."','".$phone."')");

}
?>
</head>
   <body>
   
     <form method="POST" action="#">
   <table>
  <tr>
   
    <td>Name</td>
    <td><input type="text" name="name" placeholder="name"/></td>
    
  </tr>
  <tr>
   
   <td>Address</td>
   <td><input type="text" name="email" placeholder="Address"/></td>
   
 </tr>
 <tr>
   
   <td>Phone</td>
   <td><input type="text" name="phone" placeholder="Phone"/></td>
   
 </tr>
 <tr>
 <td><input  type="submit" name="signup" value="submit"></td>
 </tr>
</table>

 </form>
 <table border="1"> 
 
  <tr>
   
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Delete</th>
    <th>edit</th>
  </tr>
  <?php
                          include "dbcon.php";
											$sql = "SELECT * FROM tbluser ";
     										$result = mysqli_query($con, $sql);
											if (mysqli_num_rows($result) > 0) {
											
                      while($row = mysqli_fetch_array($result)) {
                        ?>
  <tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <input type="hidden" value=<?php $row['id']?>/>
    <td><a href="delete.php?id=<?php echo $row["id"]; ?>">delete</td>
    <td><a href="edit.php?id=<?php echo $row["id"]; ?>">edit</td>
  </tr>
                      <?php } ?>
</table>
                     
   </body>
</html>
<?php 
}?>