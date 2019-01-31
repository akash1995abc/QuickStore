<?php 
include "dbcon.php";
$id=$_GET['id'];

if(isset($_POST["update"]))
{
$name=$_POST["name1"];
$email=$_POST["email1"];
$phone=$_POST["phone1"];
$sql1="UPDATE `tbluser` SET `name`='$name',`address`='$email',`phone`='$phone' WHERE tbluser.id=$id; ";
mysqli_query($con,$sql1);
header("Location:tabedit.php");

}
?>
<html>
<head>
</head>
<body>
<?php 
                          
											$sql = "SELECT * FROM tbluser WHERE tbluser.id=$id;";
     										$result = mysqli_query($con, $sql);
											if (mysqli_num_rows($result) > 0) {
											
                      while($row = mysqli_fetch_array($result)) {
                        ?>
<form method="POST" action="#">
   <table>
  <tr>
   
    <td>Name</td>
    <td><input type="text" name="name1" value="<?php echo $row["name"] ?> "/></td>
    
  </tr>
  <tr>
   
   <td>Address</td>
   <td><input type="text" name="email1" value="<?php echo $row["address"] ?> "/></td>
   
 </tr>
 <tr>
   
   <td>Phone</td>
   <td><input type="text" name="phone1" value="<?php echo $row["phone"] ?> "/></td>
   
 </tr>
 <tr>
 <td><input  type="submit" name="update" value="Update"></td>
 </tr>
</table>
<a href="./tabledit.php">Prev<-</a>
</body>
<?php
                      }
                    }
?>
</html>