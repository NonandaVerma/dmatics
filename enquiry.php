<?php 
include("admin/config/connection.php");

$msg="";

if(isset($_POST['submit']))
{    

 $Name=$_POST['name'];
$Pnumber=$_POST['personNUMBER'];
 $Email=$_POST['email'];
 $Enquiry=$_POST['enquiry'];

 $query="insert into enquiry(name, personNUMBER, email, enquiry) values ('$Name', '$Pnumber', '$Email', '$Enquiry')";

if( mysqli_query($conn, $query)) 
{ $msg="query successfully submitted";}
else{ $msg="query fail" .mysqli_error($conn); }

}
?>

<html>
    <head>
         <title> Dmatics-Enquiry</title>  
         <link href="CSS/style.css" rel="stylesheet">  
    
         <script type="text/javascript">
function val()
{
	if(document.getElementById('fullname').value=="")
	{
		alert("Please enter your full name");
		document.getElementById('fullname').focus();
	return false;
	}
	
	if(document.getElementById('personnumber').value=="")
	{
		alert("please enter your phone number");
		document.getElementById('personnumber').focus();
	return false;
	}

  if(document.getElementById('emailid').value=="")
	{
		alert("please enter your valid email address");
		document.getElementById('emailid').focus();
	return false;
	}

  if(document.getElementById('Enq').value=="")
	{
		alert("Enquiry description is left empty !!");
		document.getElementById('Enq').focus();
	return false;
	}

}
function onfill()
{
	if(document.getElementById('fullname').value!="" && document.getElementById('personnumber').value!="" &&  document.getElementById('emailid').value!="" && document.getElementById('Enq').value!="")
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
                    
            <div class="slider"> 
              <img src="images\enq.png" width="100%" height="100%" alt="SliderImage">
            </div>   


            <div class="enqfeatures">
                 <div class="enqftheading">
                    <h2>Prefer to reach out directly ??</h2>
                    <p>If you have any questions or would like to get in touch with us, please use the following contact information</p>
                 </div>

                 <div class="enqtypbox" style="margin-left:40px;">
                    <div class="enqftimg">
                        <img src="images\ei1.png" width="100%" height="100%">
                    </div>
                    <div class="enqftname">Hire Students</div>
                    <div class="enqfticon">
                        <img src="images\et1.png" width="100%" height="100%">
                    </div>
                    <div class="enqftdetbox">
                      <div class="enqfthead">Muskan Gupta</div>
                      <a href="mailto:placements@dm.com">
                        <div class="enqic"> 
                           <img src="images\enq1.webp" width="100%" height="100%">
                        </div>
                      </a>
                      <a href="mailto:placements@dm.com"> <div class="enqicdet">placements@dm.com</div></a>
                      <a href="tel:+91-8657986359" >
                         <div class="enqic">
                            <img src="images\enq2.webp" width="100%" height="100%">
                         </div>
                      </a>
                      <a href="tel:+91-8657986359"><div class="enqicdet">+91-8657986359</div></a>
                    </div>
                 </div>


                 <div class="enqtypbox">
                    <div class="enqftimg">
                        <img src="images\ei2.png" width="100%" height="100%">
                    </div>
                    <div class="enqftname">Work at DMatics</div>
                    <div class="enqfticon">
                        <img src="images\et2.png" width="100%" height="100%">
                    </div>
                    <div class="enqftdetbox">
                      <div class="enqfthead">Rajeshree Shetty</div>
                      <a href="mailto:hr@dmatics.com">
                        <div class="enqic"> 
                          <img src="images\enq1.webp" width="100%" height="100%">
                        </div>
                      </a>
                      <a href="mailto:hr@dmatics.com"> <div class="enqicdet">hr@dmatics.com</div></a>
                      <a href="tel:+91-9372481657" >
                         <div class="enqic">
                              <img src="images\enq2.webp" width="100%" height="100%">
                         </div>
                      </a>
                      <a href="tel:+91-9372481657"><div class="enqicdet">+91-9372481657</div></a>
                    </div>
                 </div>

                 <div class="enqtypbox">
                    <div class="enqftimg">
                        <img src="images\ei3.png" width="100%" height="100%">
                    </div>
                    <div class="enqftname">Course Enquiry</div>
                    <div class="enqfticon">
                        <img src="images\et3.png" width="100%" height="100%">
                    </div>
                    <div class="enqftdetbox">
                      <div class="enqfthead">Preeti Mehta</div>
                      <a href="mailto:enquiry@dm.com">
                        <div class="enqic"> 
                          <img src="images\enq1.webp" width="100%" height="100%">
                        </div>
                      </a>
                      <a href="mailto:enquiry@dm.com"> <div class="enqicdet">enquiry@dm.com</div></a>
                      <a href="tel:+91 9205004404" >
                         <div class="enqic">
                               <img src="images\enq2.webp" width="100%" height="100%">
                         </div>
                      </a>
                      <a href="tel:+91 9205004404"><div class="enqicdet">+91 9205004404</div></a>
                    </div>
                 </div>

                 <div class="enqtypbox" >
                    <div class="enqftimg">
                        <img src="images\ei4.png" width="100%" height="100%">
                    </div>
                    <div class="enqftname">Corporate Training</div>
                    <div class="enqfticon">
                        <img src="images\et4.png" width="100%" height="100%">
                    </div>
                    <div class="enqftdetbox">
                      <div class="enqfthead">Lakhan Naik</div>
                      <a href="mailto:enquiry@dm.com">
                        <div class="enqic"> 
                           <img src="images\enq1.webp" width="100%" height="100%">
                        </div>
                      </a>
                      <a href="mailto:enquiry@dm.com"> <div class="enqicdet">enquiry@dm.com</div></a>
                      <a href="tel:+91-8657986359" >
                         <div class="enqic">
                             <img src="images\enq2.webp" width="100%" height="100%">
                         </div>
                      </a>
                      <a href="tel:+91-8657986359"><div class="enqicdet">+91-8657986359</div></a>
                    </div>
                 </div>

            </div>

            <div class="mainbody" style="margin-top:30px;"> 
            <?php
               include("mainleft.php");
              ?> 
              <div class="mainright" style=" text-align:center; padding-top:40px; box-sizing:border-box;">
                 <b style="font-size:30px;">Please enter your personal details:-</b>
                 <div class="enqbox" >
                   <form method="post" onSubmit="onfill()">
                       
                      <div class="enqrow">
                          <div class="labstyle">Name:</div>
                          <div class="enqinp">
                             <input type="text" name="name" placeholder="Enter your name" class="inpstyle" id="fullname">
                          </div>
                      </div>

                      <div class="enqrow">
                          <div class="labstyle">Person No.</div>
                          <div class="enqinp">
                             <input type="text" name="personNUMBER" placeholder="Enter your number" class="inpstyle"  id="personnumber">
                          </div>
                      </div>

                      <div class="enqrow">
                          <div class="labstyle">Email:</div>
                          <div class="enqinp">
                              <input type="email" name="email" placeholder="Enter your email" class="inpstyle" id="emailid">
                          </div>
                      </div>

                      <div class="enqrow" style="height:120px;">
                          <div class="labstyle" >Enquiry</div>
                          <div class="enqinp" style="height:100px;">
                              <textarea name="enquiry" placeholder="Enter your Enquiry description" style="height:100px;"  class="inpstyle"  id="Enq" required ></textarea>
                          </div>
                      </div>

                      <div class="enqrow" style="margin-top:30px;">
                          <div class="labstyle"></div>
                          <div class="enqinp" >
                          <input type="submit" name="submit" value="Submit" class="enqsubmit" onClick="return val()" >
                   
                           
                          </div>
                      </div>
                    </form>
                </div>
              </div> 
            </div>    
            
            <?php
              include("footer.php");
            ?> 
            
          </div>
    </body>
</html>