<?php 
include("config/connection.php");
include("config/session.php");
$msg="";


if(isset($_POST['submit']))
{
   $oldpass=$_POST['op'];
   $newpass=$_POST['np'];
   $confirmpass=$_POST['cp'];
   $admin=$_SESSION['Admin'];

   $sql="select* from user where id=$admin";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);

     if($row['upass']!=$oldpass)
      { 
         $msg="old password is incorrect";
      }

     else
      {
        if($newpass != $confirmpass)
        { 
            $msg="Confirm password is incorrect";
         }
        else
        {
          echo $sqlupd="update user set upass='$newpass' where id=$admin";
          mysqli_query($conn,$sqlupd);
          $msg="Password changed successfully";
        }  
     }
}
?>

<html>
 <head> 
    <link href="css/style.css" rel="stylesheet">
 </head>
 <body>  
   <div class="bar"></div>

   <!-- Navbar -->
   <?php include ("mleft.php") ?>

    <!-- Admin bar-->   
    <?php include ("header.php") ?>

     <!-- main start -->
     <div class="main">

         <div class="pagetitle"> Change Password </div>

         <div class="mright">
           <form method="post">

              <div class="row">   
                 <input type="password" name="op" placeholder="Old Password" class="input">
              </div>

              <div class="row">   
                   <input type="password" name="np" placeholder="New Password" class="input">
              </div>

              <div class="row">   
                 <input type="password" name="cp" placeholder="Confirm Password" class="input">
               </div>
               
              <div class="row"  style="background-color:#d9f0fb;">   
                 <input type="submit" name="submit" value="Update" class="btn"> <?php echo $msg; ?>
               </div>
           </form>
         </div>

     </div>
 
 </body>
</html>