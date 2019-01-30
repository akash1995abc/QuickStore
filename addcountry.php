<html>
<head>
<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
<script>
$(function(){

$(".state").change(function(e){e.preventDefault();
var t=this,id=$(t).val();//alert($(t).val());
$.ajax({type:"POST",url:"addstate.php",data:{id:id},cache:"false",
success:function(data){
//alert(data);
$("#dist").show().html(data);
},error:function(data){
}});
});

});
</script>
<?php 
include "dbcon.php";
if(isset($_POST["addc"]))
{
    $cname=$_POST["country"];
   // $sql="INSERT INTO country cname values $cname";
    mysqli_query($con,"insert into country (cname) values('".$cname."')");
}

?>


</head>
   <body>
   <div style="width:100%;"> <!-- Main Div -->
            <div style="float:left;background-color: lightblue; width:33.4%;">
             <h2>Add Country</h2>
             <form method="POST" action="#">
             <input type="text" name="country" placeholder="Country Name"/>
             <input  type="submit" name="addc" value="Add">
             </form>
            </div>




            <div style="float:right;background-color: green; width:33.3%; ">
            <h2>Add State</h2>
            

            <select class="state" id="stateid">
            <option >Select Country</option>
            <?php
                         
											$sql = "SELECT * FROM country ";
     										$result = mysqli_query($con, $sql);
											if (mysqli_num_rows($result) > 0) {
											
                      while($row = mysqli_fetch_array($result)) {
                        ?>
            <option value="<?php echo $row["cid"]?>"><?php echo $row["cname"]?></option>
                      <?php } ?>
                    </select>
            <form method="POST" action="addstate.php">
            <input type="text" id="stateidtxtbox" name="statename" placeholder="State Name"/>
            <input  type="submit" name="state" value="Add">
            </form>
                      <?php }?>
            </div>







            <div style="float:right;background-color: yellow; width:33.3%; ">
            <h2>Add District</h2>
            <form method="POST" action="#">
            <input type="text" name="district" placeholder="District Name"/>
             <input  type="submit" name="district" value="Add">
             </form>
            </div>
  
</div>
</body>
</html>
   
    