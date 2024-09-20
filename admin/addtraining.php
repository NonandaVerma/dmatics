<?php 
include("config/connection.php");
include("config/session.php");

$row['tcname']="";
$row['amount']="";
$row['duration']="";
$row['tcdetail']="";
$msg="";

if($_GET['updid']!="")
{
   $query="select* from trainingcourse where id='".$_GET['updid']."'";
   $result=mysqli_query($conn, $query);
   $row=mysqli_fetch_assoc($result);


    if(isset($_POST['submit']))
      {    
   $upd="update trainingcourse set tcname='".$_POST['tcname']."',amount='".$_POST['amount']."',duration='".$_POST['duration']."',tcdetail='".$_POST['tcdetail']."' where id='".$_GET['updid']."'";
   mysqli_query($conn, $upd);
   echo"<script> window.location='viewtraining.php';</script>";     
  
   }
   
}
else
if(isset($_POST['submit']))
{    

 $Trname=$_POST['tcname'];
 $Duration=$_POST['duration'];
 $Amount=$_POST['amount'];
 $Tcdetail=$_POST['tcdetail'];


 $query="insert into trainingcourse (tcname, duration, amount, tcdetail) values ('$Trname', '$Duration','$Amount', '$Tcdetail')";

  if( mysqli_query($conn, $query)) 
   { $msg="query successfully submitted";}
 else{ $msg="query fail" .mysqli_error($conn); }


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
    <div class="main" style="height:900px;">

       <div class="pagetitle"> Add Training </div>

       <div class="mright" style="height:700px;">

         <form method="post">
            <div class="row">   
               <input type="text" name="tcname" placeholder="Training Course Name" class="input" value="<?php echo $row['tcname']?>">
            </div>

            <div class="row">   
               <input type="text" name="amount" placeholder="Amount" class="input" value="<?php echo $row['amount']?>">
            </div>

            <div class="row">   
              <input type="text" name="duration" placeholder="Duration" class="input" value="<?php echo $row['duration']?>">
            </div>

            <div class="row" style="height:200px">   
              <textarea name="tcdetail" placeholder="Description" class="tarea"><?php echo $row['tcdetail']?></textarea>
            </div>

            <div class="row" style="background-color:#d9f0fb;">   
              <input type="submit" name="submit" value="Submit" class="btn">
               <?php echo $msg;?>
             </div>

         </form>

       </div>
    </div>
 
 </body>
</html>