<?php 
include("config/connection.php");
include("config/session.php");

//paging variables--------
$startrecord=0;       //Starting position
$endrecord=5;         // no of records max to show on a page


// No of record
$next=$_GET['page']+1;
$prev=$_GET['page']-1;
$startrecord=$_GET['page']* $endrecord;

//multiple delete-----

if($_GET['delid']!="")
{
  $del=$_GET['delid'];
  echo $delsql="delete from courses where id=$del";
  mysqli_query($conn,$delsql);
}

if(isset($_POST['delete']))
{
  $tot=count($_POST['delid']);
  echo $tot;
  $a=0;
  while($a<$tot)
  {
   $d=$_POST['delid'][$a];
   $delsql="delete from courses where id=$d";
   mysqli_query($conn,$delsql);
   $a++;
  }
}


$query="select* from courses order by title ASC limit $startrecord, $endrecord"; //to fetch 5 records on a page 
$result=mysqli_query($conn,$query);

?>

<html>
 <head> 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/func.js"></script>
 </head>
 <body>  
   <div class="bar"></div>

   <!-- Navbar -->
   <?php include ("mleft.php") ?>

   <!-- Admin bar-->   
   <?php include ("header.php") ?>

   <!-- main start -->
   <div class="main">
     <div class="pagetitle"> View Courses</div>

       <div class="mright2">
          <form method="post">
            <div class="viewrow bold">
               <div class="viewcol" style="width:80px;"> <input type="submit" name="delete" value="Delete" class="del"></div>    
               <div class="viewcol w120"> Title</div> 
               <div class="viewcol ">Duration</div>
               <div class="viewcol " style="width:80px;">Fees</div>
               <div class="viewcol " style="width:220px;">Description</div>   
               <div class="viewcol " style="width:87px;">Visible</div>
               <div class="viewcol ">Action</div>
            </div>

            <?php
                while($row=mysqli_fetch_assoc($result))
                 {
            ?> 
            <div class="viewrow ">
        
                 <div class="viewcol2"  style="width:80px;"> <input type="checkbox" name="delid[]" value="<?php echo $row ['id'];?>"> </div>   
                 <div class="viewcol2 w120">  <?php echo $row['title']?>  </div> 
                 <div class="viewcol2">    <?php echo $row['duration']?> </div>
                 <div class="viewcol2" style="width:80px;">    <?php echo $row['fees']?> </div>
                 <div class="viewcol2 " style="width:220px;"> <?php echo $row['description']?> </div>
                 <div class="viewcol2" style="width:87px;">   <?php 
                                        if($row['visible']==0)
                                          echo  "hide";
                                        else
                                          echo "show";
                                      ?> </div>
                 <div class="viewcol2 ">
                  <a href="addcourses.php?updid=<?php echo $row['id']?>">
                   <div class="actionedit"> <b class="fa fa-pencil"></b> </div></a>
                  <a href="viewcourses.php?delid=<?php echo $row['id']?>"> 
                   <div class="actiondelete"  onClick=" return del()"><b class="fa fa-trash-o"></b></div>
                 </div></a>
             
            </div> 
           
            <?php
              }
            ?>  

           <div class="paging">
             <?php 
               if($_GET['page']==0) 
				       {
	      	       echo '<a href="viewcourses.php?page=0" style="padding-left:20px;">First</a>
                       <a href="viewcourses.php?page=<?php echo $prev;?>" style="padding-left:20px;">Prev</a>';
				       }
		        	else
  			       {
              ?>
      
               <a href="viewcourses.php?page=0">First</a>
               <a href="viewcourses.php?page=<?php echo $prev;?>">Prev</a>
      
             <?php 
               } 
             ?>
        			
			      <?php
		          	$sel_pag="select * from courses" ;
			          $exe_pag=mysqli_query($conn,$sel_pag);
	
                $tot_rec=mysqli_num_rows($exe_pag);
			 
		          	$final_tot=ceil($tot_rec/$endrecord); //ceil function is used to round off the no. so that total records become 5.
		
                for($aa=0; $aa<$final_tot; $aa++)
			         {
			      ?>
			          <a href="viewcourses.php?page=<?php echo $aa;?>" style="padding-left:15px;"><?php echo $aa+1;?></a>
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
			          <a href="viewcourses.php?page=<?php echo $next;?>" style="padding-left:20px; box-sizing:border-box;">Next</a>
		            <a href="viewcourses.php?page=<?php echo $final_tot-1;?>" style="padding-left:20px; box-sizing:border-box;">Last</a>	
           <?php 
            } 
  
           ?>
		
        </div>

          </form>
       </div>

   </div>
 
 </body>
</html>