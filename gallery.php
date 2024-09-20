<html>
    <head>
         <title> Dmatics-Gallery</title>  
         <link href="CSS/style.css" rel="stylesheet">  
         <script type="text/javascript" src="js/jssor.slider.min.js"></script>     
    </head>         
    <body>
         <div class="outerBlock" align="center">
         <?php
              include("header.php");
              include("menubar.php");
         ?>
         
         <div class="galleryintro">
            <img src="images\eventi.jpg" width="100%" height="100%" alt="event">
         </div>

         <div class="gallerytext">
            <p>“Step into the spotlight of achievement!<br> Our Gallery page is a tribute to the journey of excellence undertaken by our outstanding students.<br> Based in Jodhpur, we take immense pride in being recognized as the best coding classes in the city. Through a curated collection of videos and images, witness the transformation of dreams into reality. Each frame tells a unique story of determination, growth, and success. Join us in applauding the accomplishments of our talented individuals as they embark on new chapters in their professional lives. Explore the gallery, be inspired, and celebrate the power of education and dedication! </p>
         </div>

        <div class="gopening">
            <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:70px;">THE INAUGURATION PARTY</h1>

             <div class="gopenvid1">
              <video  width="100%" height="100%" autoplay loop muted>
                  <source src="images\gopen1.mp4" type="video/mp4">
              </video>
             </div>

             <div class="gopenimg1">
                  <img src="images\gopenimg1.jpg" width="100%" height="100%" alt="Inauguration Image"> 
             </div>

             <div class="gopenimg2">
                  <img src="images\gopenimg2.jpg" width="100%" height="100%" alt="Inauguration Image"> 
             </div>

         </div>
        
         <div class="gtraining">
                <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:70px; color:#000;">Corporate training workshop</h1>

                <div class="gtrainimg1">
                   <img src="images\gtrainimg1.jpg" width="100%" height="100%" alt="Inauguration Image"> 
                </div>

                <div class="gtrainimg2">
                   <img src="images\gtrainimg2.jpg" width="100%" height="100%" alt="Inauguration Image"> 
                </div>

                <div class="gtrainimg3">
                   <img src="images\gtrainimg3.jpg" width="100%" height="100%" alt="Inauguration Image"> 
                </div>

                <div class="gtrainvid">
                   <video  width="100%" height="100%" autoplay loop muted>
                       <source src="images\gtraimgvid1.mp4" type="video/mp4">
                    </video>
                </div>
         </div>

         <div class="gmeet">
                <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:70px; color:#000;">Guest Meet-Up</h1>

                <div class="gmeetimg">
                  <img src="images\gmeet.jpg" width="100%" height="100%" alt="Inauguration Image"> 
                </div>

                <div class="gmeetimg">
                  <img src="images\gmeet1.jpg" width="100%" height="100%" alt="Inauguration Image"> 
                </div>
         </div>

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
                    
      <div class="slider" style="border:none;"> 
              <!-- Jssor Slider Begin -->
           <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
           <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1250px; height: 600px;">
              <!-- Slides Container -->
              <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1250px; height: 600px; overflow: hidden;">
              <div><img u="image" src="images\gslider1.jpg"/></div>
              <div><img u="image" src="images\gslider2.jpg" /></div>
              <div><img u="image" src="images\gslider3.jpg"/></div>
              <div><video  width="100%" height="100%" autoplay loop muted>
                       <source src="images\gslider4.mp4" type="video/mp4">
                   </video>
              </div>    
              <div><video  width="100%" height="100%" autoplay loop muted>
                       <source src="images\gslider6.mp4" type="video/mp4">
                   </video>
              </div>    
              <div><video  width="100%" height="100%" autoplay loop muted>
                       <source src="images\gslider5.mp4" type="video/mp4">
                   </video>
              </div>   
             
           </div>
                <script>
                   jssor_slider1_starter('slider1_container');
                 </script>
       </div>   
            
      <div class="mainbody"> 
            <?php
               include("mainleft.php");
              ?> 

          <div class="mainright"><h1> Student's Desk at <blue>D</blue><red>matics:</red></h1>
                <div class="galleryimage">
                  <img src="images\g1.jpg" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g2.webp" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g3.jpg" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g4.jfif" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g5.jpg" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g6.jpg" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g7.jfif" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g8.jpg" height="100%" width="100%">
                </div>
                <div class="galleryimage">
                  <img src="images\g9.jpg" height="100%" width="100%">
                </div>
          </div> 
          
      </div> 
            
            <?php
              include("footer.php");
            ?>  

          </div>
    </body>
</html>