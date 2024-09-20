<?php 
include("config/connection.php");
include("config/session.php");

$row['title']="";
$row['visible']="";
$row['description']="";
$msg="";

if($_GET['updid']!="")
{

$query="select* from news where id='".$_GET['updid']."'";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);

    if(isset($_POST['submit']))
   {    
     $updquery="update news set title='".$_POST['title']."', description='".$_POST['description']."',visible='".$_POST['visible']."' where id='".$_GET['updid']."' ";
     mysqli_query($conn,$updquery);

     "<script> window.location='viewnews.php';</script>";
   }

   
}

else
if(isset($_POST['submit']))
{    

 $Title=$_POST['title'];
 $Description=$_POST['description'];
 $Visible=$_POST['visible'];

 $query="insert into news (title, description,visible) values ('$Title', '$Description', '$Visible')";

if( mysqli_query($conn, $query)) 
{ $msg="query successsfully submitted";}
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
     <div class="main">

        <div class="pagetitle"> Add News </div>

        <div class="mright">
          <form method="post">

            <div class="row">   
               <input type="text" name="title" placeholder="Title" class="input" value="<?php echo $row['title']?>">
            </div>

            <div class="row" style="height:200px">   
               <textarea name="description" placeholder="Description" class="tarea"><?php echo $row['description']?></textarea>
            </div>

            <div class="row" style="background-color:#d9f0fb; font-size:18px;">   
               <input type="radio" name="visible" value="1" class="rbtn" <?php if($row['visible']=="1") echo "checked"; ?> > Show 
               <input type="radio" name="visible" value="0"  class="rbtn" <?php if($row['visible']=="0") echo "checked"; ?> > Hide 
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