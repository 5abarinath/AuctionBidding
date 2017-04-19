<?php
	
  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";
  
  $conn = new mysqli($servername, $username, $key, $dbname);	

  $sql = "UPDATE teamList SET btnFlag = 1 WHERE id = 7";
  mysqli_query($conn, $sql);

  header("Location: bidding.php");
  exit;

?>