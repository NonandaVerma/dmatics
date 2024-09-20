<?php 
include("admin/config/connection.php");

$row['title']="";
$row['description']="";

$query="select* from news where id='".$_GET['nid']."'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

?>

<html>
    <head>
         <title> Dmatics-News</title>  
         <link href="CSS/style.css" rel="stylesheet">  
         <script type="text/javascript" src="js/jssor.slider.min.js"></script>       
    </head>         
    <body>
      <div class="outerBlock" align="center">
         <?php
              include("header.php");
              include("menubar.php");
             ?> 

              <!-- Script for slider-->
      <script>
          jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
      </script>
                    
        <div class="slider" style="border:0px;"> 
              <!-- Jssor Slider Begin -->
              <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
             <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1250px; height: 600px;">
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1250px; height: 600px; overflow: hidden;">
                 <div><img u="image" src="images\n1.png"/></div>
                 <div><img u="image" src="images\n2.png" /></div>
                 <div><img u="image" src="images\n3.png"/></div>
               
             </div>
             <script>
                 jssor_slider1_starter('slider1_container');
              </script>
        </div>   
        <br>
            
            <div class="mainbody"> 
               <?php
                  include("mainleft.php");
               ?> 
                 <div class="mainright">
                    <div class="newsrow"><h1><?php echo $row['title']?></h1></div>
                    <div class="newsdescbox"><p><?php echo $row['description']?></p></div>

                    <a href="index.php">
                      <div class="formrow " style="background-color:#fff;">
                        <div class="formrowleft" style="background-color:#fff;"></div>
                        <div class="formrowright nopadding" style="background-color:#fff;">
                           <input type="submit" name="back" value="Back to Home" class="backbutt">
                        </div>
                      </div></a>
                    
                
                  </div>      
              </div> 
               <?php
                  include("footer.php");
               ?>  

          </div>
    </body>
</html>