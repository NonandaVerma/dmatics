<?php 
include("config/connection.php");
include("config/session.php");

$row['Cperson']="";
$row['personNo']="";
$row['email']="";
$row['address']="";

if(isset($_POST['submit']))
{    

$upd="update contactus set Cperson='".$_POST['cperson']."', personNo='".$_POST['mobile']."',email='".$_POST['uemail']."',address='".$_POST['address']."' where id=1" ;
mysqli_query($conn, $upd) or die("Execution failed");
 
}

$query="select* from contactus";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

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

         <div class="pagetitle"> Contact Us </div>
         <div class="mright">
         <form method="post">
            <div class="row">   
                <input type="text" name="cperson" placeholder="Contact Person" class="input" value="<?php echo $row['Cperson']?>">
            </div>

            <div class="row">   
                <input type="email" name="uemail" placeholder="Email" class="input" value="<?php echo $row['email']?>">
            </div>

            <div class="row">   
               <input type="text" name="mobile" placeholder="Mobile" class="input" value="<?php echo $row['personNo']?>">
            </div>

            <div class="row" style="height:200px">   
                <textarea name="address" placeholder="Address" class="tarea"><?php echo $row['address']?></textarea>
            </div>

            <div class="row"  style="background-color:#d9f0fb;">   
                <input type="submit" name="submit" value="Update" class="btn">
            </div>

         </form>
         
      </div>

  </body>

</html>