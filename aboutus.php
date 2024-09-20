<?php 
include("admin/config/connection.php") ;

$query="select* from aboutus where id=1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);


?>

<html>
    <head>
         <title>Dmatics-About Us</title>  
         <link href="CSS/style.css" rel="stylesheet">  
         <script type="text/javascript" src="js/jssor.slider.min.js"></script>  
         
    </head>         
    <body>
         <div class="outerBlock" align="center">

           <?php
              include("header.php");

            ?>  
             

    <div class="aboutusintro">
        <a href="courses.php"> 
           <div class="abtusbuttons">Explore Courses</div>
        </a>
        <a href="contactus.php">
            <div class="abtusbuttons" style="margin-right:30px; width: 160px;">Contact us</div>
        </a>  
          <div class="abtustext">
            <h1 style="font-size:55px;">Crafting Careers, Empowering Learners</h1>
            <p>At Dmatics, we collaborate with top industry maestros to develop transformative, cohort-based learning programs, empowering a global community of aspirants to become job-ready.</p>
          </div>
    </div>

    <div class="whoweare">
        <h2>Who We Are ??</h2>
        <p>Welcome to Dmatics, the premier online platform dedicated to transforming IT students into industry-ready professionals. At Dmatics, we understand the dynamic nature of the technology sector and the growing demand for skilled, practical knowledge. Our mission is to bridge the gap between academic learning and real-world application by providing top-tier training and hands-on experience with live projects.</p>
        <p>Dmatics, a dynamic and innovative company specializing in software development, website maintenance, and IT training.</p>
        <p>Join Dmatics today and take the first step towards a successful and fulfilling career in the IT industry.</p>

      </div>

    <div class="journey">
      <h2>How did it all started ?</h2>
      <p>The journey of our Dmatics began with a simple yet powerful vision: to upskill the youth in the IT industry, equipping them with the knowledge and tools necessary to thrive in an ever-evolving digital world. This vision was conceived in a small, humble room, where a passionate team of IT professionals recognized the pressing need for quality education and practical training in technology</p>
    
      <div class="jourimg1">
        <p>Today, we are proud to be a family of over 3000 students, each one a testament to our commitment to excellence in IT education. Our current base is a state-of-the-art facility, equipped with the latest technology and resources. We offer a diverse range of courses, from coding and software development to cybersecurity and data analytics. Our alumni network is strong, with graduates working in top tech companies around the world.</p>
      </div>
      <div class="jourimg2">
         <h3> The first step</h3>
         <p>In the beginning, our resources were limited. With just a handful of dedicated instructors and a modest setup, we embarked on a mission to make a difference. Our initial classes were intimate, allowing us to build strong connections with our first group of students. We focused on creating a curriculum that was not only comprehensive but also adaptable to the rapidly changing tech landscape. Our emphasis on hands-on learning, real-world applications, and continuous feedback became the cornerstone of our educational approach.</p>
      </div>
      <div class="jourimg3">
           <h3> The Milestone</h3>
            <p>Word of our effective training and supportive learning environment began to spread. As our first batch of students graduated and found success in their respective IT careers, the demand for our courses grew. We moved from our small room to a larger space, expanding our facilities to accommodate more students and advanced equipment. Our team of instructors grew, each bringing their unique expertise and industry experience to the table.</p>
      </div>
    
    </div>

    <div class="journeydesc">
          <p>Our journey from a simple idea in a small room to a thriving institute is a story of perseverance, passion, and a relentless pursuit of our vision. We remain dedicated to our mission of empowering the youth with the skills they need to succeed in the IT industry, continually evolving and growing alongside the technology we teach.</p>
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

     <div class="slider" style="border:0px;"> 
          <!-- Jssor Slider Begin -->
           <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
           <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1250px; height: 600px;">
              <!-- Slides Container -->
              <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1250px; height: 600px; overflow: hidden;">
              <div><img u="image" src="images\slideraboutus1.jpg"/></div>
              <div><img u="image" src="images\slideraboutus2.jpg" /></div>
              <div><img u="image" src="images\slideraboutus3.jpg"/></div>
              <div><img u="image" src="images\slideraboutus4.jpg"/></div>
              <div><img u="image" src="images\slideraboutus5.jpg"/></div>
              <div><img u="image" src="images\slideraboutus6.jpg"/></div>
              <div><img u="image" src="images\slideraboutus7.jpg"/></div>
           </div>
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
      </div>
    </div> 

   <!-- slider ends here-->

            
    <div class="whatwedo">
              
          <div class="whattext">
               <h2>What do we do?</h2>

                  <h4>Job-Ready Mentorship Programs</h4>
                  <p>Dmatics Mentorship Programs are designed and developed for Gen-Z career aspirants with absolute focus on job-readiness. The programs aim to equip the learners with industry-ready, hands-on skills and facilitate a confident career kick-off.</p>

                  <h4>Project & Scenario based Learning</h4>
                  <p>Dmatics ensures that Aspirants are exposed to real-world Projects & scenario-based problems. Our programs are designed to build problem-solving skills.</p>

                  <h4>Together till Last Mile</h4>
                  <p>We believe our job is incomplete until our Aspirants land their dream job role. To enable the same a dedicated Pre-Placement Program is rolled to sharpen essential skills needed to crack the interviews and grab top job opportunities</p>
                    
          </div>
          <div class="whatimg">
            <img src="images\whatwedo.jpg" width="100%" height="100%" alt="coding" style="border-radius:20px;">
          </div>    
  </div>

     <div class="roadmapout">
       <h3>Here’s How Our IT Courses Will Help You Get Your Dream Job</h3>

         <div class="roadmap">
            <div class="roadmapicon">
               <img src="images\r1.png" width="100%" height="100%" alt="icon" style="border-radius:50% 50%">
            </div>
            <div class="roadmaptext">
               <h3>Career Advice</h3>
               <p>A dedicated career expert will guide you by putting light on which course to select based on your interests and qualifications. At DMatics, we provide our students with an interesting syllabus for our IT Courses.</p>
            </div>
         </div>

         <div class="roadmap" style="height:350px; margin-top:220px">
            <div class="roadmapicon">
              <img src="images\r2.png" width="80%" height="80%" alt="icon" style="border-radius:50% 50%; margin-top:10px;">
            </div>
            <div class="roadmaptext" style="height:200px;">
               <h3>Enrollment</h3>
               <p>Once you enroll in the course, a dedicated Relationships Manager will be provided to support you throughout the course completion period.</p>
            </div>
         </div>

         <div class="roadmap" style="height:350px;">
            <div class="roadmapicon">
               <img src="images\r3.png" width="80%" height="80%" alt="icon" style="border-radius:50% 50%; margin-top:10px;">
            </div>
            <div class="roadmaptext" style="height:200px;">
               <h3>Follow 3A</h3>
               <p>3A (Attendance, Assignment & Assessment) is a learning model designed by us where student have to score minimum 90%.</p>
            </div>
         </div>


         <div class="roadmap" style="margin-top:200px">
            <div class="roadmapicon">
                <img src="images\r4.png" width="100%" height="100%" alt="icon" style="border-radius:50% 50%">
            </div>
            <div class="roadmaptext">
               <h3>Projects</h3>
               <p>Being one of the most desired IT Training Institutes, we provide our students with 30+ Industry oriented projects and case studies to make our students Industry-ready professionals.</p>
            </div>
         </div>

         <div class="roadmap" style="height:310px;">
           <div class="roadmapicon">
              <img src="images\r5.png" width="70%" height="70%" alt="icon" style="border-radius:50% 50%; margin:15px;">
           </div>
           <div class="roadmaptext" style="height:160px;">
               <h3>Interviews</h3>
               <p>A total of 150+ mocks are planned for each student to prepare them for technical interviews.</p>
            </div>
         </div>

         <div class="roadmap" style=" height:360px; margin-top:200px">
            <div class="roadmapicon">
              <img src="images\r6.png" width="80%" height="80%" alt="icon" style="border-radius:50% 50%; margin-top:10px;">
            </div>
            <div class="roadmaptext" style="height:210px;">
               <h3>Job</h3>
               <p>DMatics being a trustworthy Software Training Institute, starts working on the interviews for the students’ placements soon after their course completion.</p>
            </div>
         </div>

     </div>

            <div class="offeringout">
               <h1>OUR OFFERINGS</h1>
               <a href="courses.php">
               <div class="offer2">
                  <div class="offericon">
                     <img src="images\o1.png" width="100%" height="100%" alt="icon" style="border-radius:10px;">
                  </div>
                  <div class="offerhead">Job Bootcamp for professionals  </div>
                
                  <div class="offercontent">
                     <div class="offercontup">
                        <div class="offerimg">
                            <img src="images\of1.png" width="60%" height="50%" alt="course icon" style="margin-top:20px;">
                        </div>
                        <div class="offertext">Full Stack Web development</div> 
                     </div>
                     <div class="offerconttag">
                          <div class="offconttagtext">140+ Hrs. content</div>
                          <div class="offconttagtext">300+ problems</div>
                          <div class="offconttagtext">2K+ learners</div>
                     </div>
                  </div>

                  <div class="offercontent" style="margin-left:50px;">
                    <div class="offercontup">
                         <div class="offerimg">
                           <img src="images\of2.webp" width="70%" height="70%" alt="course icon" style="margin-top:10px;">
                         </div>
                         <div class="offertext">Data Analytics</div> 
                        
                    </div>
                    <div class="offerconttag">
                          <div class="offconttagtext">80+ Hrs. content</div>
                          <div class="offconttagtext">350+ problems</div>
                          <div class="offconttagtext">1000+ learners</div>
                    </div>
                  </div>
               </div>


               <div class="offer2" style="margin-top:100px;">
                  <div class="offericon">
                    <img src="images\o2.png" width="100%" height="100%" alt="icon" style="border-radius:10px;">
                  </div>
                  <div class="offerhead"> TechVarsity for college students </div>
                  
                  <div class="offercontent">
                     <div class="offercontup">
                        <div class="offerimg">
                           <img src="images\of3.png" width="80%" height="80%" alt="course icon" style="margin-top:10px;">
                        </div>
                        <div class="offertext">DMatics TechVarsity</div> 
                        <div class="offertext" style="margin-top:10px; font-size:15px;">Complete CS Education to transform you into a 10X developer.</div> 
                     </div>
                     <div class="offerconttag">
                          <div class="offconttagtext">MERN STACK</div>
                          <div class="offconttagtext">AI & ML</div>
                          <div class="offconttagtext">DSA</div>
                     </div>
                  </div>

                  <div class="offercontent" style="margin-left:50px;">
                    <div class="offercontup">
                        <div class="offerimg">
                           <img src="images\of4.jpg" width="80%" height="80%" alt="course icon" style="margin-top:8px;">
                        </div>
                        <div class="offertext">Foundation of Programming</div> 
                        <div class="offertext" style="margin-top:10px; font-size:15px;">Complete concepts of programming alongwith networking, cybersecurity etc.</div> 
                    </div>
                    <div class="offerconttag">
                          <div class="offconttagtext">Concepts of C</div>
                          <div class="offconttagtext">Database & Algorithm</div>
                          <div class="offconttagtext">Software Engineering</div>
                    </div>
                  </div>
               </div>
               </a>


               <div class="offer2" style="margin-top:100px; height:800px;">
                  <div class="offericon">
                    <img src="images\o3.png" width="100%" height="100%" alt="icon" style="border-radius:10px;">
                  </div>

                  <div class="offerhead">Stories from people like you</div>
                 
                  <div class="offercontent" style="height:300px;">
                    <div class="offercontup" style="height:220px;">
                        <div class="offerimg">
                            <img src="images\of5.jpg" width="100%" height="100%" alt="course icon" style="border:solid 2px #fff;">
                        </div>
                        <div class="offertext">Jai Gehlot  -Amazon</div> 
                        <div class="offertext" style="margin-top:10px; font-size:13px;">From optometrist to IT pro, thanks to DMatics. Their lessons help me excel in projects & transformed my journey from non tech to tech guy !!</div> 
                    </div>
                    <div class="offerconttag">
                       <div class="offconttagtext">Opted for-</div>
                       <div class="offconttagtext" style="width:250px;">Fullstack web development course</div>
                    </div>
                  </div>

                  <div class="offercontent" style="height:300px; margin-left:50px;">
                  <div class="offercontup" style="height:220px;">
                        <div class="offerimg">
                            <img src="images\of8.png" width="100%" height="100%" alt="course icon">
                        </div>
                        <div class="offertext">Onkar Singh -Anand Rathi</div> 
                        <div class="offertext" style="margin-top:10px; font-size:13px;">Chose DMatics for structured, high-quality learning due to lack of support & structure. Top-notch mentors, quick TAs & a supportive community. Best decision ever.</div> 
                    </div>
                    <div class="offerconttag">
                       <div class="offconttagtext" >Opted for-</div>
                       <div class="offconttagtext" style="width:250px;">AI & ML Programme</div>
                    </div>
                  </div>

                  <div class="offercontent" style="height:300px;">
                    <div class="offercontup" style="height:220px;">
                        <div class="offerimg">
                            <img src="images\of7.svg" width="100%" height="100%" alt="course icon">
                        </div>
                        <div class="offertext">Durgesh  -MasterCard</div> 
                        <div class="offertext" style="margin-top:10px; font-size:13px;">DMatics exceeded my college experience. After the course, I transitioned from a consultant to an SDE-1. Exceptional faculty definitely.</div> 
                    </div>
                    <div class="offerconttag">
                       <div class="offconttagtext">Opted for-</div>
                       <div class="offconttagtext" style="width:250px;">Membership by DMatics</div>
                    </div>
                  </div>

                  <div class="offercontent" style="height:300px; margin-left:50px;">
                  <div class="offercontup" style="height:220px;">
                        <div class="offerimg">
                            <img src="images\of6.svg" width="100%" height="100%" alt="course icon">
                        </div>
                        <div class="offertext">Annu Kumar -TCS</div> 
                        <div class="offertext" style="margin-top:10px; font-size:13px;">A friend recommended DMatics' JAVA course in my first year. It was amazing. The basics I learned still benefit me. The faculty brilliantly simplified complex concepts.</div> 
                    </div>
                    <div class="offerconttag">
                       <div class="offconttagtext" >Opted for-</div>
                       <div class="offconttagtext" style="width:250px;">Java & Advanced JAVA</div>
                    </div>
                  </div>
               </div>


               <div class="offer2" style="margin-top:100px; height:700px;">
                  <div class="offericon">
                    <img src="images\o4.png" width="100%" height="100%" alt="icon" style="border-radius:10px;">
                  </div>
                  <div class="offerhead">Always available when you get stuck</div>

                  <div class="offercontent" style=" width: 1000px; height:570px; background-color:#e5edff;">
                       <div class="offerscroll">Resolve doubts any time through chat, voice notes or calling.</div>
                       <div class="offerscroll">Dedicated Teaching Assistants to resolve your doubts quickly</div>
                       <div class="offerscroll">5/5 rating for 90% doubt resolutions</div>
                  </div>
               </div>


               <div class="offer2" style="margin-top:100px; height:550px;">
                  <div class="offericon">
                    <img src="images\o5.png" width="100%" height="100%" alt="icon" style="border-radius:10px;">
                  </div>
                  <div class="offerhead">1:1 Mentorship sessions</div>
   
                  <div class="offercontent" style="width:320px; height:400px;">
                      <div class="offercontup" style="width:320px; height:150px; background-color:#fff ">
                        <img src="images\of9.webp" width="100%" height="100%" alt="image" style="border-radius:20px 20px 0px 0px;"> 
                      </div>
                      <div class="offerconttag" style="width:320px; height:250px; background-color:#e5edff;">
                          <div class="offconttagtext" style="width:280px; height:50px; font-size:18px; font-weight:500;">Mock interview</div>
                          <div class="offconttagtext" style="width:280px;height:50px;">Nail coding assessments and technical challenges</div>
                          <div class="offconttagtext" style="width:280px; height:50px;">Gain insights into problem-solving and algorithmic thinking</div>
                      </div>
                  </div>
                  
                  <div class="offercontent" style="width:320px; height:400px; margin-left:20px;">
                      <div class="offercontup" style="width:320px; height:150px; background-color:#fff ">
                      <img src="images\of10.webp" width="100%" height="100%" alt="image" style="border-radius:20px 20px 0px 0px;">
                    </div>
                      <div class="offerconttag" style="width:320px; height:250px; background-color:#e5edff;">
                          <div class="offconttagtext" style="width:280px; height:50px; font-size:18px; font-weight:500;">Profile review</div>
                          <div class="offconttagtext" style="width:280px; height:50px; ">Get your profile & resume reviewed by industry leaders</div>
                          <div class="offconttagtext" style="width:280px; height:50px; ">Focus on different aspects of your job search</div>
                      </div>
                  </div>

                  <div class="offercontent" style="width:320px; height:400px; margin-left:20px;">
                      <div class="offercontup" style="width:320px; height:150px; background-color:#fff ">
                      <img src="images\of11.webp" width="100%" height="115%" alt="image" style="border-radius:20px 20px 0px 0px;">
                    </div>
                      <div class="offerconttag" style="width:320px; height:250px; background-color:#e5edff;">
                          <div class="offconttagtext" style="width:280px; height:50px; font-size:18px;  font-weight:500;">Project guidance</div>
                          <div class="offconttagtext" style="width:280px; height:50px;">Career counselling with industry experts</div>
                          <div class="offconttagtext" style="width:280px; height:50px; ">Get assistance on how to build real time projects</div>
                      </div>
                  </div>
               </div>

            </div>
            
            <div class="impactout">
                <div class="impact">
                   <img src="images\impact.png" width="100%" height="100%" alt="impact image" style="border-radius:30px;">
                </div>
            </div>

        <div class="mainbody"> 
              <?php
                include("mainleft.php");
              ?>  
              <div class="mainright">
                
              <h1>
                <?php echo $row['title']?>
              </h1>
        
              <?php echo $row['description']?>

               <?php 
               
                $query="select* from whywe where visible=1";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result);

                while($row=mysqli_fetch_assoc($result))
                   {
                  ?> 
                    <li> <?php echo $row['title']?> </li>

                  <?php
                     }
                  ?>  
 
              </div> 
            </div>       
            <?php
             include("footer.php");
            ?> 

          </div>
    </body>
</html>