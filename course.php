<?php 
include("admin/config/connection.php") ;

$row['title']="";
$row['duration']="";
$row['fees']="";
$row['description']="";

$query="select* from courses where id='".$_GET['cid']."'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

?>

<html>
    <head>
         <title> Dmatics-Courses</title>  
         <link href="CSS/style.css" rel="stylesheet">       
    </head>         
    <body>
         <div class="outerBlock" align="center">
         <?php
              include("header.php");
              include("menubar.php");
             ?> 
                    
            <div class="slider" style="border:0px;"> 
              <img src="images\coursedet.png" width="100%" height="100%" alt="SliderImage">
            </div>   
            
            <div class="mainbody" style="border:0px; margin-top:45px;"> 
               <?php
                   include("mainleft.php");
                ?> 
               <div class="mainright" >

                  <div class="coursedetbox">
                       <div class="coursedettitle">
                          <h1><?php echo $row['title']?></h1>
                       </div>
                       <div class="cdetrow">
                             <div class="cdetdescL" style="height:70px; padding-top:5px; box-sizing:border-box;">Duration:</div>
                             <div class="cdetrowright"><?php echo $row['duration']?></div>
                        </div>
                        <div class="cdetrow">
                             <div class="cdetdescL" style="height:70px; padding-top:5px; box-sizing:border-box;">Fees:</div>
                             <div class="cdetrowright"><?php echo $row['fees']?></div>
                        </div>
                       <div class="cdetdescbox">
                          <div class="cdetdescL">Description:</div>
                          <div class="cdetdescR"><p><?php echo $row['description']?></p></div>
                       </div>
                       

                         <a href="courses.php">
                           <div class="cdetrow">
                             <div class="cdetdescL" style="height:50px; padding-top:5px; box-sizing:border-box;"></div>
                             <div class="cdetrowright"> 
                                   <input type="submit" name="back" value="Back to Courses" class="backbutt" style="margin-left:200px;">
                              </div>
                           </div>
                         </a>

                  </div>  


               </div>  
                 <?php
                      include("footer.php");
                  ?>  

          </div>
    </body>
</html>