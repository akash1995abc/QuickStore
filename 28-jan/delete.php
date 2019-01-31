<?php 
include "dbcon.php";
$id=$_GET['id'];
echo $id;
mysqli_query($con,"DELETE FROM tbluser WHERE id=$id");
header("Location:tabedit.php");

?>