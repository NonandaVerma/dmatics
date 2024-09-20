<?php
include("config/connection.php");
include("config/session.php");


if($_GET['delid']!="")
{
  $del=$_GET['delid'];
  echo $delsql="delete from news where id=$del";
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
   $delsql="delete from news where id=$d";
   mysqli_query($conn,$delsql);
   $a++;
  }
}


$query="select* from news";
$result=mysqli_query($conn,$query);

?>

<html>
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
    <div class="main" style="height:1000px;">

        <div class="pagetitle"> View News</div>

        <div class="mright2" style="height:800px;">
         <form method="post">
           <div class="viewrow bold ">
              <div class="viewcol"> <input type="submit" name="delete" value="Delete " class="del" ></div>    
              <div class="viewcol w180"> Title</div>    
              <div class="viewcol w270"> Description</div>    
              <div class="viewcol"> Visible</div>    
              <div class="viewcol w150"> Action</div>    
          </div>

          <?php
             while($row=mysqli_fetch_assoc($result))
           {
          ?> 
          <div class="viewrow">
            <div class="viewcol2"> <input type="checkbox" name="delid[]" value="<?php echo $row ['id'];?>"> </div>    
            <div class="viewcol2 w180">  <?php echo $row['title']?> </div>    
            <div class="viewcol2 w270"> <?php echo $row['description']?>  </div>    
            <div class="viewcol2"> <?php 
                                  if($row['visible']==0)
                                     echo  "hide";
                                  else
                                    echo "show";
                                ?></div>    
            <div class="viewcol2 w150">
                <a href="addnews.php?updid=<?php echo $row['id']?>">
                  <div class="actionedit"> <b class="fa fa-pencil"></b> </div>
                </a>
                <a href="viewnews.php?delid=<?php echo $row['id']?>"> 
                   <div class="actiondelete"  onClick=" return del()"><b class="fa fa-trash-o"></b></div>
                   </div> 
                </a>   
            </div>
             <?php
              }
             ?>  
          </div>
         </form>

        </div>

    </div>

 </body>
</html>