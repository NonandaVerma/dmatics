<?php 
include("admin/config/connection.php") ;

$msg="";

if(isset($_POST['submit']))
{    

  $Name=$_POST['Name'];
  $mob=$_POST['contact'];
  $Email=$_POST['Email'];
  $Course=$_POST['course'];


  $query="insert into training(name, contact, email, course) values ('$Name', '$mob', '$Email', '$Course')";

    if( mysqli_query($conn, $query)) 
      { $msg="query successfully submitted";}
    else{ $msg="query fail" .mysqli_error($conn); }

}

//paging variables--------
$startrecord=0;       //Starting position
$endrecord=5;         // no of records max to show on a page


// No of record
$next=$_GET['page']+1;
$prev=$_GET['page']-1;
$startrecord=$_GET['page']* $endrecord;

$where="";
if(isset($_POST['search']))
{
   //A variable named "where" is made for searching the course in database using "like" keyword of sql
  $where=" where title like '%".$_POST['searchbox']."%' ";

}

$query2="select* from courses $where where visible='1' order by title ASC limit $startrecord, $endrecord";
$result=mysqli_query($conn,$query2);

?>

<html>
    <head>
         <title> Dmatics-Courses</title>  
         <link href="CSS/style.css" rel="stylesheet">  
         <script type="text/javascript" src="js/jssor.slider.min.js"></script>
         
         <script type="text/javascript">
              function val()
                   {
	                     if(document.getElementById('name').value=="")
	                        {
		                         alert("Please enter your full name");
		                         document.getElementById('name').focus();
	                            return false;
	                        }
	
	                     if(document.getElementById('contact').value=="")
	                       {
	                         	alert("please enter your phone number");
		                        document.getElementById('contact').focus();
	                          return false;
	                       }

                       if(document.getElementById('email').value=="")
	                      {
		                        alert("please enter your valid email address");
		                        document.getElementById('email').focus();
	                          return false;
	                      }

                      if(document.getElementById('course').value=="")
	                      {
		                      alert("You haven't selected the training course !!");
		                      document.getElementById('course').focus();
	                         return false;
	                       }

                    }
              function onfill()
                  {
	                   if(document.getElementById('name').value!="" && document.getElementById('contact').value!="" &&  document.getElementById('email').value!="" && document.getElementById('course').value!="")
	                      {
	                         alert("Thank you for your response. We will soon revert back to your queries.");

	                      }
                  }
          </script>

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

      < class="slider" style="border:0px;"> 
          <!-- Jssor Slider Begin -->
           <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
           <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1250px; height: 600px;">
              <!-- Slides Container -->
              <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1250px; height: 600px; overflow: hidden;">
              <div><img u="image" src="images\coursesSL1.png"/></div>
              <div><img u="image" src="images\coursesSL2.png" /></div>
              <div><img u="image" src="images\coursesSL3.png"/></div>
              <div><img u="image" src="images\coursesSL4.png"/></div>
              <div><img u="image" src="images\coursesSL5.png"/></div>
           </div>

            <script>
                jssor_slider1_starter('slider1_container');
            </script>
      </div>
      
      <div class="readmorebar">
         <a href="training.php"> 
            <div class="readmorebutt"> Read More</div>
         </a>   
      </div>

      <div class="coursesintro">
         <h1>Welcome to DMatics- Courses</h1>
         <div class="coursestext">
            <p>DMatics is a leading IT Training Institute in Jodhpur where we provide training on various technologies like HTML5, Css3, PHP MySQL, WordPress, Magento, Android, iphone, Cake PHP, SEO, SEM, SMO, Java etc. Most essential part of our training is that our student works on live project so that they get professional environment of learning</p>
         </div>
         <div class="cbenefitout">
            <div class="cbenefitbox">
                <div class="cbenefitimg">
                    <img src="images\cben1.avif" width="60%" height="80%" alt="course img" style="margin-top:30px;">
                </div>
                <div class="cbenefittext">
                    <h4>PROPER GUIDANCE</h4>
                    <p>To make your career excellent, all you need is proper guidance. DMatics gives you proper guidance about our courses for your better career.</p>
                </div>
            </div>
            <div class="cbenefitbox">
                <div class="cbenefitimg">
                    <img src="images\cben2.avif" width="60%" height="80%" alt="course img" style="margin-top:30px;">
                </div>
                <div class="cbenefittext">
                  <h4>INTERACTIVE COURSES</h4>
                  <p>Our Interactive courses are designed according to Student's stipulation for their excellent career which cover each and every aspect of the selected course.</p>
                </div>
            </div>
            <div class="cbenefitbox">
                <div class="cbenefitimg">
                   <img src="images\cben3.avif" width="60%" height="80%" alt="course img" style="margin-top:30px;">
                </div>
                <div class="cbenefittext">
                  <h4>EXPERIENCED FACULTY</h4>
                  <p>We have the team of highly qualified professionals. They have enough amount of experience in their own field.</p>
                </div>
            </div>
         </div>
      </div>

      <div class="bestcourses">
          <h1>Our Bestsellers</h1>
         
          <div class="bestbutt"> Job Guarantee </div>

          <div class="bestcbox">
              <div class="bestcimg">
                  <img src="images\j1.png" width="100%" height="100%" alt="course">
              </div>
              <div class="bestctext1" id="fullstack">
                #Trending<br><br>
                <b style="font-size:20px;">Full stack web development</b>
              </div>
              <div class="bestctext2">
                Duration:<br><br>
                <b>6-7 months</b>
              </div>
              <div class="bestctext2">
                Learners:<br><br>
                <b>150+ Active </b>          
              </div>
              <a href="#courses"><div class="bestctext3"> Learn more</div></a>
          </div>

          <div class="bestcbox" style="margin-left:40px;">
             <div class="bestcimg">
                  <img src="images\j2.jpg" width="100%" height="100%" alt="course">
              </div>
              <div class="bestctext1">
                 #Trending<br><br>
                <b style="font-size:20px;">Data Analytics</b>
              </div>
              <div class="bestctext2">
                 Duration:<br><br>
                 <b>8 months</b>
              </div>
              <div class="bestctext2">
                Learners:<br><br>
                <b>230+ Active </b>  
              </div>
              <a href="#courses"><div class="bestctext3"> Learn more</div></a>
          </div>

          <div class="bestout2">
             <div class="bestbutt"> Job Assurance </div>

             <div class="bestcbox" style="margin-left:35px;">
                <div class="bestcimg">
                  <img src="images\j3.jpg" width="100%" height="100%" alt="course">
                </div>
                <div class="bestctext1">
                   #Certified<br><br>
                   <b style="font-size:20px;">AWS Technology</b>
                </div>
                <div class="bestctext2">
                   Duration:<br><br>
                   <b>5 months</b>
                </div>
                <div class="bestctext2">
                  Learners:<br><br>
                  <b>180+ Active </b> 
                </div>
                <a href="#courses"><div class="bestctext3"> Learn more</div></a>
             </div>
             <div class="bestcbox" style="margin-left:20px;">
                <div class="bestcimg">
                  <img src="images\j4.jpg" width="100%" height="100%" alt="course">
                </div>
                <div class="bestctext1">
                   #Certified<br><br>
                   <b style="font-size:20px;">Cloud Computing</b>
                </div>
                <div class="bestctext2">
                  Duration:<br><br>
                  <b>4-5 months</b>
                </div>
                <div class="bestctext2">
                  Learners:<br><br>
                  <b>200+ Active </b> 
                </div>
                <a href="#courses"><div class="bestctext3"> Learn more</div></a>
             </div>
             <div class="bestcbox" style="margin-left:20px;">
                <div class="bestcimg">
                  <img src="images\j5.jpg" width="100%" height="100%" alt="course">
                </div>
                <div class="bestctext1">
                  #Certified<br><br>
                  <b style="font-size:20px;">Cyber-security</b>
                </div>
                <div class="bestctext2">
                  Duration:<br><br>
                  <b>6 months</b>
                </div>
                <div class="bestctext2">
                   Learners:<br><br>
                  <b>150+ Active </b> 
                </div>
                <a href="#courses"><div class="bestctext3"> Learn more</div></a>
             </div>
          </div>
      </div>

      <div class="jobsouter">
        <div class="jobsimg">
            <img src="images\skill.png" width="100%" height="100%">
        </div>
        <div class="jobstext">
             <h1>2000+ Organizations trust us with their Openings</h1>
             <p>Organizations across the globe trust our students and their brilliant technical skills in <blue>Full Stack Development, Data Science & Analytics with AI, AWS Cloud Technology</blue>  which results in them getting hired at excellent companies with impressive pay scales. DMatics is Jodhpur’s fastest-growing Software Training Institute, provide a range of IT Courses helping to shape the future of our students in every way possible. The Coding Courses provided by our Institute are highly valuable and worthy for the students.</p>
             <br>
             <h2><blue>5K+ </blue>Students already placed</h2>
             <h2><blue>300+ </blue>Hiring Companies</h2>
        </div>
      </div>

      <div class="jb">
        Industry-focused curriculum designed by industry experts to help students in<br> understanding real-world case studies with a practical approach.
      </div>


       <div class="training">
          <h1>Training Programs</h1>
           <div class="trainbox">
              <div class="tcourseout">

                  <div class="tcoursetag" style="background-color:#2499ef">
                      <div class="tclogo">
                          <img src="images\t1.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Java training</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#4cc8e4">
                      <div class="tclogo">
                          <img src="images\t2.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">C/C++ training</div>
                  </div> 

                  <div class="tcoursetag" style="background-color:#5fc5ba">
                      <div class="tclogo">
                          <img src="images\t3.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Angular training</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#6fc16d">
                      <div class="tclogo">
                          <img src="images\t4.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Android training</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#a0cc39">
                      <div class="tclogo">
                          <img src="images\t5.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Graphic designing</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#f7b61e">
                     <div class="tclogo">
                          <img src="images\t6.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Django framework</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#f5863e">
                      <div class="tclogo">
                          <img src="images\t7.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Digital Marketing</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#f05050">
                     <div class="tclogo">
                          <img src="images\t8.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Google Ads/PPC</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#ef4c81">
                     <div class="tclogo">
                          <img src="images\t9.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Website Designing</div>
                  </div>

                  <div class="tcoursetag" style="background-color:#bd68ab">
                     <div class="tclogo">
                          <img src="images\t10.png" width="100%" height="100%" alt="icon">
                      </div>
                      <div class="tctype">Web Development</div>
                  </div> 
              </div>

                 <div class="tcourseform">
                    <div class="tformintro">
                       Two months/Six months Industrial training/Internship in Jodhpur for B.Tech, MCA, M.Tech, B.E, Polytechnic students with live projects & 100% Job Assistance with top most companies.
                    </div>

                    <form method="post" onSubmit="onfill()">

                       <div class="tformrow" style="margin-top:60px;">
                          <input id="name" type="text" name="Name" placeholder="Name*" class="tinput">
                       </div>

                       <div class="tformrow">
                         <input id="email" type="email" name="Email" placeholder="Email ID*" class="tinput">
                       </div>

                       <div class="tformrow">
                         <input id="contact" type="text" name="contact" placeholder="Mobile Number*" class="tinput">
                       </div>

                       <div class="tformrow">
                         <select name="course" class="tinput" id="course">
                           <option>Select your Course</option>
                           <option>Java training</option>
                           <option>C/C++ Training</option>
                           <option>Android programming</option>
                           <option>Angular Training</option>
                           <option>Graphic Designing</option>
                           <option>Django Framework</option>
                           <option>Digital Marketing</option>
                           <option>Google Ads/PPC</option>
                           <option>Website Designing</option>
                           <option>Web Development</option>
                         </select> 
                       </div>

                       <div class="tformrow">
                         <input type="submit" name="submit" value="Get Enrolled Now" class="tsubmit" onClick="return val()" >
                       </div>
                      
                      
                    </form> 
                 </div>
            </div>
      </div>

            <div class="searchbar">
               <form method="post">  
                  <input type="text" name="searchbox" placeholder="Type your text to search" class="inpsearch" style="margin-left:580px;">
                  <input type="submit" name="search" value="Search" class="csbutton">
                </form> 
            </div>  
           

           <div class="mainbody"> 
            <?php
               include("mainleft.php");
              ?> 
             <a href="#paging">
                <div class="mainright" id="courses"><h1 style="font-size:45px;"> Courses available at <blue>D</blue><red>matics:</red></h1>
                 
                  <?php
                     while($row=mysqli_fetch_assoc($result))
                     {
                    ?> 
                    <a href="course.php?cid=<?php echo $row['id']?>">
                      <li class="listyle"> 
                         <?php echo $row['title']?> 
                      </li>
                    </a> 
                  <?php
                     }
                  ?>  
               
              </div></a>
            </div> 
            

           
               <div class="paging" id="paging">
               <?php 
                  if($_GET['page']==0) 
				          {
	      	          echo '<a href="courses.php?page=0" style="padding-left:20px;">First</a>
                          <a href="courses.php?page=<?php echo $prev;?>" style="padding-left:20px;">Prev</a>';
				          }
			            else
  		          	{
                ?>
      
                <a href="courses.php?page=0" style="padding-left:20px;">First</a>
                <a href="courses.php?page=<?php echo $prev;?>" style="padding-left:20px;">Prev</a>
      
               <?php 
                 } 
                ?>
        			
			          <?php
			             $sel_pag="select* from courses where visible=1";
			             $exe_pag=mysqli_query($conn,$sel_pag);
	
                   $tot_rec=mysqli_num_rows($exe_pag);

			 
			            $final_tot=ceil($tot_rec/$endrecord); //ceil function is used to round off the no. so that total records become 5.
		
                  for($aa=0; $aa<$final_tot; $aa++)
			              {
			          ?>
			          <a href="courses.php?page=<?php echo $aa;?>" style="padding-left:15px;"><?php echo $aa+1;?></a>
		            <?php
		             	}
			           ?>

                <?php 
	                if($_GET['page']==$final_tot-1)
	                {
	
                 ?> Next Last

	               <?php 
        	       }
	               else
	               {
	               ?>
			            <a href="courses.php?page=<?php echo $next;?>" style="padding-left:20px; box-sizing:border-box;">Next</a>
		              <a href="courses.php?page=<?php echo $final_tot-1;?>" style="padding-left:20px; box-sizing:border-box;">Last</a>	
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