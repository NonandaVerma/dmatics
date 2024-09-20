<?php 

include("config/connection.php");
include("config/session.php");

$delid="";
$del=$_GET['delid'];
if($del!="")
{
  echo $delsql="delete from enquiry where id=$del";
  mysqli_query($conn,$delsql);
}

if(isset($_POST['delete']))
{
  $tot= count($_POST['delid']);
  echo $tot;
  $a=0;
  while($a<$tot)
  {
   $d=$_POST['delid'][$a];
   $delsql="delete from enquiry where id=$d";
   mysqli_query($conn,$delsql);
   $a++;
  }
}

$query="select* from enquiry";
$result=mysqli_query($conn,$query);

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

      <div class="pagetitle">  Admin- Enquiry </div>

      <div class="mright2" style="height:600px;">

        <form method="post">

           <div class="viewrow bold" style="margin-top:20px;">
              <div class="viewcol"> <input type="submit" name="delete" value="Delete" class="del" ></div>    
              <div class="viewcol w150"> Name</div> 
              <div class="viewcol w150"> Person no.</div>   
              <div class="viewcol w200">Email</div>
              <div class="viewcol w200">Enquiry topic</div>         
           </div>

           <?php
            while($row=mysqli_fetch_assoc($result))
             {
           ?> 

           <div class="viewrow" style="margin-top:20px;">
              <div class="viewcol2"> <input type="checkbox" name="delid[]" value="<?php echo $row ['id'];?>"> </div>    
              <div class="viewcol2 w150"><?php echo $row['name']?> </div> 
              <div class="viewcol2 w150"> <?php echo $row['personNUMBER']?> </div>   
              <div class="viewcol2 w200"><?php echo $row['email']?> </div>
              <div class="viewcol2 w200"><?php echo $row['enquiry']?> </div>  
           </div>      
           <?php
            }
           ?> 
        </form>

      </div>
      </div>

    </div>

 </body>
</html>