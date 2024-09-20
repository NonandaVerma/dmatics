<?php 

error_reporting(0);

$host='localhost:3306';
$username='root';
$pass='';
$dbname='dmatics';
$conn= mysqli_connect($host,$username,$pass,$dbname);

  if($conn)
  { echo "connected";}
  else{ die('connection failed'.mysqli_connect_error());}

?>