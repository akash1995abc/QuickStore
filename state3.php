<?php
include 'dbcon.php';

if(!isset($_POST['id'])) exit;
$uid = $_POST['id'];
?>
 
<select  class="state" ><option  disabled="disabled" selected="selected">Dist</option>
<?php
$query = mysqli_query($con,"select * from   district where sid=".$uid." ");
if(mysqli_num_rows($query))
{
	while($row = mysqli_fetch_array($query))
		echo '<option value="'.$row['did'].'">'.$row['dname'].'</option>';
}
?></select>