<?php 
include("admin/config/connection.php");

$query="select* from contactus";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<html>
    <head>
         <title> Dmatics-Contact Us</title>  
         <link href="CSS/style.css" rel="stylesheet">       
    </head>         
    <body>
         <div class="outerBlock" align="center">
            
            <?php
              include("header.php");
              include("menubar.php");
             ?> 

            <div class="contactus">
                <a href="enquiry.php">
                      <div class="contactbuttons">Enquiry</div>
                </a>
                <a href="gallery.php">
                    <div class="contactbuttons" style="margin-right:30px;">Events</div>
                </a>
               
                <div class="abtustext" style="font-size:28px;">
                    <h1 >Get in touch</h1>
                    <p>We're all ears! Talk to us about your needs, and we'll provide the best possible solution.</p>
                </div>
            </div> 

            <div class="visit">
               <h2 style="font-size:40px;  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Visit our Campus</h2>
               <div class="visitcont">
                  <div class="campusimg">
                      <img src="images\campus.jpg" width="100%" height="100%" alt="campus" style="border-radius:25px;">
                  </div>

                  <div class="addressdet">
                      <h2 style="font-size:30px;">JODHPUR</h2>
                      <p>DMATICS
                      1,Banney Niwas, Kuchera - Sankhwas - Jodhpur Rd, near Hotel Marwar, High Court Colony, Ratanada, Jodhpur, Rajasthan 342001</p>

                      <a href="#mobileno">
                          <div class="demobutton">Book Free Class</div>
                      </a>
                      <a href="courses.php">
                          <div class="demobutton" style="margin-left:20px;">Explore Courses</div>
                      </a>

                      <div class="details">
                        <p>Note: To book your free demo class, kindly contact on the phone number given below:</p>
                        <a href="tel:9876543214" style="color:#000;">  <p>Mob No: 9876543214</p></a>
                      </div>

                  </div>

               </div>
            </div>

            <div class="slider"> 
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.702012931067!2d73.02599427399186!3d26.271332987361827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c44ac81813f%3A0x5ecf0f92b99d0556!2sDMATICS!5e0!3m2!1sen!2sin!4v1714561410063!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>   

            <div class="marqueeimg">
                <marquee direction="left" loop="" onmouseover="this.stop()" onmouseout="this.start()"> 
                    <div class="imgmarq">
                       <img src="images\cont1.jpg" width="100%" height="100%" alt="image" style="border-radius:20px;">
                    </div>
                    <div class="imgmarq">
                        <img src="images\cont2.jpg" width="100%" height="100%" alt="image" style="border-radius:20px;">
                    </div>
                    <div class="imgmarq">
                       <img src="images\cont3.jpg" width="100%" height="100%" alt="image" style="border-radius:20px;">
                    </div>
              
                </marquee>
              
              </div>

              <div class="curriculum">
                  <div class="curriculumtext">
                     <p>If you want to know about our detailed course curriculum, you can contact us from here.</p>
                    
                    <div class="currcont">
                        <div class="curricon">
                           <img src="images\mailicon.png" width="100%" height="100%">
                        </div>
                        <div class="currdet">
                           <p>We’re usually replying within 24 hours</p>
                          <a href="mailto:alfozensheikh@gmail.com">  <h4>alfozensheikh@gmail.com</h4> </a>  
                        </div>
                    </div>
                    <div class="currcont">
                      <div class="curricon">
                         <img src="images\calicon.png" width="100%" height="100%">
                      </div>
                      <div class="currdet">
                        <p>Talk to us and see how we can work together.</p>
                        <a href="tel:9876543214">  <h4>+91 9876543214</h4> </a>
                      </div>
                    </div>
                 
                    </div>
                  <div class="curriculumimg">
                     <img src="images\coursecurr.jpg" width="100%" height="100%">
                  </div>

              </div>
            
            <div class="mainbody"> 
              <?php
               include("mainleft.php");
              ?> 
              <div class="mainright">

                <div class="contactout">
                   <div class="contactimg">
                      <img src="images\profile.png" width="100%" height="100%" alt="icon" style="border-radius:15px 15px 0 0;">
                   </div>
                   <div class="contactop">Contact Person</div>
                   <div class="contactdet"><?php echo $row['Cperson']?></div>
                </div>

                <div class="contactout">
                   <div class="contactimg">
                     <img src="images\loca.png" width="100%" height="100%" alt="icon" style="border-radius:15px 15px 0 0;">
                   </div>
                   <div class="contactop">Address:</div>
                   <div class="contactdet"><?php echo $row['address']?></div>
                </div>

                <div class="contactout" id="mobileno">
                   <div class="contactimg">
                     <img src="images\mob2.png" width="100%" height="100%" alt="icon" style="border-radius:15px 15px 0 0;">
                   </div>
                   <div class="contactop">Mobile No.</div>
                    <div class="contactdet"><?php echo $row['personNo']?></div>
                </div>

                <div class="contactout">
                   <div class="contactimg">
                      <img src="images\mail2.png" width="100%" height="100%" alt="icon" style="border-radius:15px 15px 0 0;">
                   </div>
                   <div class="contactop">Email:</div>
                   <div class="contactdet"><?php echo $row['email']?></div>
                </div>

              </div> 
            </div>   
           

            <?php
              include("footer.php");
            ?>  

          </div>
    </body>
</html>