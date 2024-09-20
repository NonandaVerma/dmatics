<?php 
include("config/connection.php");
$msg="";

if(isset($_POST['submit']))
{ 
  $Uname=$_POST['uname'];
  $Upass=$_POST['upass'];

  $sql="select* from user where uname='$Uname' and upass='$Upass'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);

  $tot=mysqli_num_rows($result);

    if($tot==1)
    { session_start();
    
    $_SESSION['Admin']=$row['id'];
    echo "<script> window.location='home.php'</script>";
    }
    else
    { $msg="Invalid username or password";}
}
?>

<html>
  <head> 
  
    <style>
      *{ font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         color:#fff;}

      body{ background-image:url("images/loginbackground.png");
            background-size:100%;
          }

     .logobar{ width:100px;
              height:100px;
              margin-top:10px;
              margin-right:30px;
              float:right;
             }      

      .logobox{ width:50px;
                height:40px;
                margin-top:20px;
                margin-left:20px;
                float:left;
              }      
              
      .logoname{ width:100px;
                 height:20px;
                 text-align: center; 
                 margin-top:10px;
                 color:#fff; 
                 font-size: 13px; 
                 float:left; 
              }        

     .main{  width: 440px;
            height:400px;
            background-color:#ffffff1d;
            backdrop-filter: blur(8px);
            background-size:100%;
            border-radius:10px;
            border: solid 1.5px #ffffff4f;
            margin:100px auto;
         }


     .row{ width: 320px;
          height:35px;
          margin:25px 40px 0 70px;
          float:left;
        }

     .input { width: 280px;
             height:35px;
             background-color:#ffffff1d;
             backdrop-filter: blur(8px);
             color:#fff;
             font-size:15px;
             padding-left:20px;
             box-sizing: border-box;   
             border-radius:30px;
             border: solid 1.5px #ffffff4f;
            }
            ::-ms-input-placeholder { color: #fff; }
            ::placeholder { color: #fff; }

     .btndiv{ width: 320px;
              height:40px;
              margin:25px 40px 0 70px;
              float:left;
            }

     .btn{ width: 120px;
           height:35px;
           border-radius:30px;
           border: solid 1.5px #ffffff4f;
           font-size:17px;
           background-color:#fff;
           color:#000;
           margin-left:80px;
         }

     .checkpass{ width:20px;
                 height:20px;
                 margin-right:12px;
                 margin-top:5px;
                 float:right;
               }

      .invalidmsg{ width:200px;
                   height:20px;
                   font-size:12px;
                   margin-top:5px;
                   margin-left:110px;
                   text-align: center;
                   float:left;
                }         

   </style>

  
     <script type="text/javascript">
         function test()
          {
	
	          var str=document.getElementById('userpass').value;
	
	          if(str.length>1 && str.length<3)
	          {
	             document.getElementById('res').style.color="red";	
	             document.getElementById('res').innerHTML="Low";
	          }
	          if(str.length>3 && str.length<5)
      	    {
		           document.getElementById('res').style.color="orange";
	            document.getElementById('res').innerHTML="Medium";
      	    }
       	    if(str.length>5 && str.length<8)
      	    {
	             	document.getElementById('res').style.color="green";
	              document.getElementById('res').innerHTML="High";
	          }

	          var userpass=document.getElementById('userpass').value;
	          var reentpass=document.getElementById('reentpass').value;
	
	
		     if(reentpass==userpass)
		      {
		      	 if(reentpass=="" && userpass=="")
			           document.getElementById('res2').innerHTML="";
			       else
		            document.getElementById('res2').innerHTML="<img src='images/tick.png' height='30' width='30'>";
		      }
	
	       else
	        {
		        document.getElementById('res2').innerHTML="";
	        }
         }


       function test2(str)
       {
	        if(str=="on")
	           document.getElementById('upass').type="text";
	        if(str=="off")
	           document.getElementById('upass').type="password";
       }

    </script>
  </head>

   <body> 

    <div class="logobar">
        <div class="logobox">
            <img src="images\logo.png" width="100%" height="100%" alt="logo">
        </div>
        <div class="logoname">DMatics</div>
    </div>

   <div class="main"> 
      <form method="post">

          <div class="row" style="height:40px; font-size:35px; margin-top:40px; margin-left:45px;
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align:center; color:#fff;">
              <b>Admin Login</b>
          </div>

          <div class="row" style="margin-top:35px;"> 
             <input type="text" name="uname" class="input" placeholder="User Name" >
          </div>
 
          <div class="row">
               <input type="password" name="upass" class="input" placeholder="Password" id="userpass" onkeyup="test();">
              <div class="checkpass" id="res">
                 <img src="images\viewpasseye.png" height="20" width="20" onmousedown="test2('on');" onmouseup="test2('off');"/>
              </div>
          </div>
 
          <div class="row">
              <input type="password" name="repass" class="input" placeholder="Confirm Password"  id="reentpass"  onkeyup="test();">
              <div class="checkpass" id="res2"></div>
          </div>
 
          <div class="btndiv" >
             <input type="submit" name="submit" value="Login" class="btn">
          </div>

          <div class="invalidmsg">
             <?php echo $msg; ?>
          </div>
 
      </form>
 
   </div>
 
  </body>

</html>