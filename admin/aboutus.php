<?php 
include("config/connection.php");
include("config/session.php");


$row['title']="";
$row['description']="";


$query="select* from aboutus where id=1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);


if(isset($_POST['submit']))
{
   $upd="update aboutus set title='".$_POST['title']."',description='".$_POST['description']."'";
   mysqli_query($conn,$upd);
  
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

           <div class="pagetitle"> About Us </div>

           <div class="mright">
              <form method="post">
                 <div class="row">   
                    <input type="text" name="title" placeholder="Title" class="input" value="<?php echo $row['title']?>">
                 </div>

                 <div class="row" style="height:200px">   
                    <textarea name="description" placeholder="Description" class="tarea"><?php echo $row['description']?></textarea>
                 </div>

                 <div class="row"  style="background-color:#d9f0fb;">   
                    <input type="submit" name="submit" value="Update" class="btn">
                 </div>
               </form>
           </div>
        </div>   
  </body>

</html>