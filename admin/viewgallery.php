<?php 

include("config/connection.php");
include("config/session.php");

$rowsel="";
$delid="";
$del=$_GET['delid'];

if($del!="")
{
  
  $delsql=" delete from gallery where id=$del";
  mysqli_query($conn,$delsql);

}

if(isset($_POST['delete']))
{
  $tot=count($_POST['delid']);
  echo $tot;
  $a=0;
    while($a<$tot)
    {
     $d=$_POST['delid'][$a];
    //query to frst select the images we want to delete and then delete them from folder
     $sqlsel="select* from gallery where id=$d";
     $resultsel= mysqli_query($conn,$sqlsel);
     $rowsel=mysqli_fetch_assoc($resultsel);
     $path="images/".$rowsel['image'];
     unlink($path); //The command to delete the image from folder

     $delsql="delete from gallery where id=$d"; //deleting from database
     mysqli_query($conn,$delsql);
     $a++;
    }
}

$query="select* from gallery";
$result=mysqli_query($conn,$query);

?>

 <head> 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/func.js"></script>
 </head>

 <body>
 <div class="bar"></div>

   <!-- Navbar -->
   <?php include ("mleft.php") ?>

   <!-- Admin bar-->   
   <?php include ("header.php") ?>

  <!-- main start -->
  <div class="main">
  <div class="pagetitle"> View gallery </div>

   <div class="mright2">
      <form method="post">
        <div class="viewrow bold">
           <div class="viewcol"> <input type="submit" name="delete" value="Delete" class="del" ></div>    
           <div class="viewcol w450"> Image</div>    
           <div class="viewcol"> Visible</div>    
           <div class="viewcol w150"> Action</div>    
        </div>

        <?php
          while($row=mysqli_fetch_assoc($result))
           {
        ?>

        <div class="viewrow">
            <div class="viewcol"><input type="checkbox" name="delid[]" value="<?php echo $row ['id'];?>">  </div>    
            <div class="viewcol w450"><img src="images/<?php echo $row['image']?>" width="40" height="40" alt="images"></div>    
            <div class="viewcol">   <?php 
                                    if($row['visible']==0)
                                          echo  "hide";
                                    else
                                          echo "show";
                                ?> </div>    
           <div class="viewcol w150">
              <a href="addgallery.php?updid=<?php echo $row['id']?>">
                <div class="actionedit"> <b class="fa fa-pencil"></b> </div></a>
              <a href="viewgallery.php?delid=<?php echo $row['id']?>"> 
                <div class="actiondelete"  onClick=" return del()"><b class="fa fa-trash-o"></b></div>
          </div> </a>

        </div>   
        <?php
         }
       ?>   
    </div>
     
    </div>
    
      </form>
   </div>

  </div>
 </body>
</html>