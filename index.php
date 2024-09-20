<?php 
include("admin/config/connection.php");

$query="select* from home where id=1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$newssql="select* from news where visible=1";
$resultnews=mysqli_query($conn,$newssql);

?>

<html>
    <head>
         <title>Dmatics-HOME</title>  
         <link href="CSS/style.css" rel="stylesheet">     
         <script type="text/javascript" src="js/jssor.slider.min.js"></script>    

        
    </head>         
    <body>
         <div class="outerBlock">
             <?php
                include("header.php");
                include("menubar.php");
              ?>  

      <div class="intro">
          <div class="introheading">
            <p>All the skills you need in one place</p>
          </div>

          <div class="introtext">
            <p> Top Mentorship Programs in Tech & Data- Designed and Delivered by Industry maestros.</p>
          </div>
      </div>

     <div class="indexstyle">
        <p style="padding-top:60px; box-sizing:border-box">Restricted by opportunities?</p>
        <h1 style="font-size:80px;">Get the tech career you deserve. Faster.</h1>
        <p>Structured coding courses that get you there faster with confidence.</p>
         <a href="courses.php"> <div class="expofferbutt">Explore courses</div></a> 
      </div>

      <div class="exploreouter">
          <h1 style="padding-top:30px; box-sizing:border-box;">Explore Top Career Domains</h1>
          <p style="font-size:18px;">Discover career paths that truly resonate with your passion & explore mentorship programs that align perfectly with you.</p>
          
           <div class="explore">
            <h4>Web Development</h4>
             <div class="exploreimg">
               <img src="images\icon2.png" width="80%" height="100%" alt="coursesicon">
             </div>
          </div>

          <div class="explore">
            <h4>App Development</h4>
             <div class="exploreimg">
               <img src="images\icon1.png" width="80%" height="100%" alt="coursesicon">
             </div>
          </div>

          <div class="explore">
            <h4>Data Analytics</h4>
             <div class="exploreimg">
               <img src="images\icon3.png" width="80%" height="100%" alt="coursesicon">
             </div>
          </div>

          <div class="explore">
            <h4>Cyber Security</h4>
             <div class="exploreimg">
               <img src="images\icon4.png" width="80%" height="100%" alt="coursesicon">
             </div>
          </div>
      </div>

      <div class="scrollanim"> 
          <div class="scroll" style="margin-top:80px;"> 25+ years of</div>
          <div class="scroll"> transforming</div>
          <div class="scroll"> tech careers</div>
          <div class="scroll2"> 
             <div class="scrolLine"></div>
          </div>  
          <div class="scroll2"> 
            <div class="scrolLine"></div>
          </div>

          <div class="scroll"> 
              <div class="scrollicon"></div>
          </div>
          <div class="scroll"> 1.5 Lac+ learners</div>
          <div class="scroll" style="font-size:40px; width:900px; margin-left:180px;"> cracked dream roles at top tech companies</div>
          <div class="scroll2">
              <div class="scrolLine"></div>
          </div>
         <div class="scroll2">
             <div class="scrolLine"></div>
         </div>

         <div class="scroll">
             <div class="scrollicon1"></div>
         </div>
          <div class="scroll" style=" width:1100px; margin-left:60px;"> 1400 Alumni abroad</div>
          <div class="scroll" style="font-size:40px; width:900px; margin-left:180px;"> & more in 103/111 Unicorns</div>
          <div class="scroll2">
               <div class="scrolLine"></div>
         </div> 
         <div class="scroll2">    
              <div class="scrolLine"></div>
         </div>

          <div class="scroll"> 
              <div class="scrollicon2"></div>
          </div>
          <div class="scroll" style=" width:900px; margin-left:180px;"> 30LPA+ highest CTC</div>
          <div class="scroll" style="font-size:40px; width:900px; margin-left:180px;"> after completing the course</div>
          <div class="scroll2">    
              <div class="scrolLine"></div>
         </div>
         <div class="scroll2">    
              <div class="scrolLine"></div>
         </div>

          <div class="scroll"> 
              <div class="scrollicon3"></div>
          </div>
          <div class="scroll"> 78% average hike</div>
          <div class="scroll" style="font-size:40px; width:900px; margin-left:180px;"> via our placement cell</div>

          <div class="scroll">
             <a href="courses.php"> <div class="expofferbutt">Explore courses</div></a> 
          </div>
      </div>

      <div class="whyus">
         <h1>WHY US ??</h1>
         <div class="whyusa3">

              <div class="whyusa3text" style="height:50px; margin-top:0px; font-size:18px; font-weight: bold; color:#000; background-color:#fff;">
                 A 3-stage learning model to turn you into a master developer
              </div>
             
            <div class="whyusa3img">

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

              
                   <!-- Jssor Slider Begin -->
                   <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
                   <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 500px;">
                   <!-- Slides Container -->
                   <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 500px; overflow: hidden;">
                   <div><img u="image" src="images\whyus1.png"/></div>
                   <div><img u="image" src="images\whyus2.png" /></div>
                   <div><img u="image" src="images\whyus3.png"/></div>
                   
               </div>
               <script>
                 jssor_slider1_starter('slider1_container');
               </script>
            </div>
         
            <!-- slider ends here-->
         </div>
              <div class="whyusa3text">
                 <p>Learn</p>
                 <p>Experience seamless learning with problem solving modules, leaderboard and awards.</p>
              </div>
              <div class="whyusa3text">
                <p>Excel</p>
                <p>Track your skill level and make meaningful progress for you to grow</p>
              </div>
              <div class="whyusa3text">
                <p>Standout</p>
                <p>Standout to recruiters, showcase ratings, get feedback and interview insights.</p>
              </div>
         </div>
       
         <div class="company">
            <p style="font-size:30px; color:#009; font-weight:bold;"> Top organizations that trust us with their openings</p>

         <marquee>
            <div class="compmarq">
                    <img src="images\c1.webp" width="100" height="100" alt="company logo" />
            </div>

            <div class="compmarq">
                   <img src="images\c2.webp" width="120" height="80" alt="company logo" />
            </div>

             <div class="compmarq">
                  <img src="images\c11.gif" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
                  <img src="images\c10.gif" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
               <img src="images\c9.gif" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
                  <img src="images\c8.gif" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
               <img src="images\c7.png" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
               <img src="images\c6.webp" width="120" height="80" alt="company logo" >
             </div>

             <div class="compmarq">
                  <img src="images\c5.webp" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
                   <img src="images\c4.webp" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
                   <img src="images\c3.webp" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
                   <img src="images\c12.gif" width="120" height="80" alt="company logo" />
             </div>

             <div class="compmarq">
                 <img src="images\c13.webp" width="120" height="80" alt="company logo" />
            </div>

            <div class="compmarq">
                 <img src="images\c14.gif" width="120" height="80" alt="company logo" />
            </div>

            <div class="compmarq">
                 <img src="images\c15.gif" width="120" height="80" alt="company logo" />
            </div>

            <div class="compmarq">
                 <img src="images\c16.gif" width="120" height="80" alt="company logo" />
            </div>

         </marquee>
      </div>

      <div class="faqouter">
          <p style="font-size:30px; color:#red; font-weight:bold;"> Frequently Asked Questions About Our IT Courses</p>
          <div class="faqimg">
             <img src="images\FAQ.png" width="100%" height="100%" alt="faq image">
          </div>
          <div class="faqtext" style="margin-top:50px">
            <p>How do I arrange a visit to the center?</p>
            <p>Once the enquiry has been generated about our IT Courses, our career guides will get in touch with & arrange a counselling session about your topic on interest.</p>
          </div>
          <div class="faqtext">
            <p>Can I take lectures in hybrid?</p>
            <p>Yes, we are currently working on the platform to provide live as well as recorded lectures which will soon be launched and enrolled students can switch between both online and offline modes.</p>
          </div>
          <br>
          <div class="faqtext" style="margin-top:40px;">
              <p>Can I pay my total course fee in EMI’s?</p>
              <p>Yes, students can avail of No Cost EMI’s (No Interest EMI’s) at DMatics, for some selected courses for which they’re supposed to pay the initial 25% of the fees as the first down payment and the remaining fees in 12 Months</p>
          </div>
          <div class="faqtext" style="width:600px; margin-right:59px">
              <p>When can I expect to receive placement calls and how long ?</p>
              <p>At our IT Training Institute, we are equipped with a strong Placement Cell Team who make sure that our students are placed well. One can start receiving placement alerts in their student portal right after getting enrolled in the course.</p>
          </div>
          <div class="faqimg" style="width:1200px; margin-top:200px;">
             <img src="images\faq2.png" width="100%" height="100%" alt="faq">
          </div>
      </div>

    </div>
      
        
      <div class="features">
         <h1>Learning focused on your goals</h1>
         <div class="featureKey">
            <div class="featuretext">
               <h3 style="font-size:30px;">Hands-on training</h3>
               <p>Upskill effectively with AI-powered coding exercises, practice tests, skills assessments, labs, and workspaces.</p>
            </div>
            <div class="featureimg">
                 <img src="images\1.png" width="100%" height="100%" alt="icon">
            </div>
         </div>

         <div class="featureKey">
            <div class="featuretext">
               <h3 style="font-size:30px;">Certification prep</h3>
               <p>Prep for industry-recognized certifications by solving real-world challenges and earn badges along the way</p>
            </div>
            <div class="featureimg">
            <img src="images\2.png" width="100%" height="100%" alt="icon">
            </div>
         </div>

         <div class="featureKey">
            <div class="featuretext">
               <h3 style="font-size:30px;">Insights and analytics</h3>
               <p>Track your goals and performance by participating in various hackathons, quizzes etc. with advanced insights to help drive effective learning.</p>
            </div>
            <div class="featureimg">
               <img src="images\3.png" width="100%" height="100%" alt="icon">
            </div>
         </div>
      </div>

      <div class="upskillouter">
       <div class="upskill"></div>
       <div class="upskilltext">
         <h2 style="font-size:25px;">Upskill Now For A Better Career</h2>
         <p>Unleash your true potential by upskilling in the in-demand technologies of the digital era.  Check out the upcoming batches and offers.</p>
           <a href="courses.php"><div class="upskillbutton"> EXPLORE COURSES</div></a>
       </div>
    </div>

    <div class="newsbar">
           <marquee direction="left" loop="" onmouseover="this.stop()" onmouseout="this.start()">  
            <?php 
               while($newsrow=mysqli_fetch_assoc($resultnews))
               {
            ?>   
                 <a href="news.php?nid=<?php echo $newsrow['id'];?>">   
                    <div class="newsdiv"> <?php echo $newsrow['title'];?></div>
                  </a>
              <?php
               }
              ?>   
           </marquee>
    </div>
   
         <div class="slider" style="height:470px;"> 
             <video  width="100%" height="130%" autoplay loop muted>
                <source src="images\dmatics.mp4" type="video/mp4">
             </video>
         </div>  

          <div class="founder">
              <div class="founderimg">
                 <img src="images\founder.jpg" width="100%" height="100%" alt="founder image">
              </div>
              <div class="foundertext">
                 <h2 style="font-size:50px;">Founder’s Message</h2>
                 <p>Our Mission is clear. We are building to train over 10 Crores Career Aspirants living in under-resourced demographics of Bharat. We are tirelessly working to empower Career Seekers with Professional & Practical Tech skills to help you compete globally for your dream career opportunities. </p>
                 <p>At Dmatics, our mission is to deliver cutting-edge software solutions, ensure seamless website performance, and equip IT students with the skills and knowledge required to excel in the competitive job market. Dmatics provides cost effective solutions for Large and Medium Enterprises</p>
              </div>
          </div>
            
            <div class="mainbody"> 
             <?php
             include("mainleft.php");
             ?>
              <div class="mainright">
                 <h1> <?php echo $row['title']?> </h1>
                <?php echo $row['description']?>
            
            </div> 
            </div>       
            <?php
              include("footer.php");
            ?>
    </body>
</html>