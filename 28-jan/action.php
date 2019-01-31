<?php
   if(isset($_GET["signup"]))
{
    $name=$_GET["name1"];
    $email=$_GET['email'];
    echo "NAME:", $name;
    echo "<br>EMAIL:", $email;
}
    ?>