<?php 
include("admin/config/connection.php") ;

$row['tcname']="";
$row['tcdetail']="";
$row['duration']="";
$row['amount']="";

$query="select* from trainingcourse";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<html>
    <head>
         <title> Dmatics-Training</title>  
         <link href="CSS/style.css" rel="stylesheet">  
        
    </head>         
    <body>
      <div class="outerBlock" align="center"> 
         <?php 
              include("header.php");
              include("menubar.php");
         ?> 
     
         <div class="slider" > 
            <video  width="100%" height="100%" autoplay loop muted>
              <source src="images\training.mp4" type="video/mp4">
            </video>
         </div>

          <div class="mainbody"> 
            <div class="trainingbar"><h1>Our Training Courses</h1></div>

            <div class="trainsubbox">
                     
                       <div class="trainsubject">
                          <h1>Web Development</h1>
                          <p>HTML (Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices. </p>
                       </div>
                       <a href="course.php"><div class="tbutton">Duration:- 6 months</div></a>
                       <a href="enquiry.php"><div class="tbutton">Amount:- 45,000</div></a>
                   </div>

              <?php
                 while($row=mysqli_fetch_assoc($result))
                 {
                 ?> 
                    
                   <div class="trainsubbox">
                       
                       <div class="trainsubject">
                          <h1><?php echo $row['tcname']?></h1>
                          <p> <?php echo $row['tcdetail']?></p>
                       </div>
                       <div class="tbutton"> Duration:- <?php echo $row['duration']?></div></a>
                       <div class="tbutton"> Amount:- <?php echo $row['amount']?></div></a>
                   </div>

                <?php
                }
                ?> 
                
              </div>
              
            <?php
              include("footer.php");
            ?>  
    
        </div>
        
    </body>
</html>