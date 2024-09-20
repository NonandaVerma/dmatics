<?php 
include("config/connection.php");
include("config/session.php");


if(isset($_POST['submit']))
{
   $Filename=$_FILES['gimage']['name'];
   $Tmpname=$_FILES['gimage']['tmp_name'];
   $Visible=$_POST['visible'];

   $Folder="images/".$Filename;
   move_uploaded_file($Tmpname,$Folder);

   $sql="insert into gallery(image,visible) values('$Filename','$Visible')";


if(mysqli_query($conn,$sql))
{
   echo "<br>Data inserted succesfully";
}
else{ echo "Insertion fail";}

}

?>

<html>
 <head> 
    <link href="css/style.css" rel="stylesheet">
 </head>

 <body>  
   <div class="bar"></div>

   <!-- Navbar -->
   <?php include ("mleft.php") ?>

   <!-- Admin bar-->   
   <?php include ("header.php") ?>

   <!-- main start -->
   <div class="main">
       <div class="pagetitle"> Add Gallery </div>
       <div class="mright">
         <form method="post" enctype="multipart/form-data">

             <div class="row" style="background-color:#fff; font-size:17px; padding-left:20px; padding-top:10px; box-sizing:border-box;">
               Please choose the file you want to upload by clicking the button below:
            </div>

             <div class="row" style="background-color:#d9f0fb; font-size:20px;">   
                <input type="file" name="gimage">
             </div>

             <div class="row" style="background-color:#d9f0fb; font-size:18px;">   
               <input type="radio" name="visible" value="1" class="rbtn"  > Show 
                <input type="radio" name="visible" value="0"  class="rbtn" > Hide  
             </div>

             <div class="row" style="background-color:#d9f0fb;">   
                 <input type="submit" name="submit" value="Submit" class="btn">
             </div>

         </form>

       </div>
   </div>
 
 </body>
</html>