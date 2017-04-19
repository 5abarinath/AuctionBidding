<?php
	
  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";
  
  $conn = new mysqli($servername, $username, $key, $dbname);	

  $sql = "UPDATE teamList SET btnFlag = 0 WHERE id = 7";
  mysqli_query($conn, $sql);

  header("Location: selection.php");
  exit;

?>