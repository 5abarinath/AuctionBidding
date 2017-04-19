<?php
		
  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";
   $conn = new mysqli($servername, $username, $key, $dbname);
   
  $team = $_COOKIE["team"];

  $sql="SELECT slot FROM teamList WHERE id = '7'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $slot = $row["slot"];
  $nextSlot = $slot + 1;
 
  $sql="SELECT * FROM bids WHERE id = '$slot'";
  $row = mysqli_fetch_array(mysqli_query($conn, $sql));
  $curr = $row['currentBid'];
  $inc =  $row['bidIncre'];
  $max = $row['maxBid'];
  $sql="SELECT requirement FROM bids WHERE id = '$nextSlot'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $reqdFunds = $row['requirement'];

  $newCurr = $curr + $inc;
  $sql = "UPDATE bids SET currentBid = '$newCurr' WHERE id = '$slot'";
  mysqli_query($conn, $sql);

  $sql="SELECT * FROM teamList WHERE id = '$team'";
  $row = mysqli_fetch_array(mysqli_query($conn, $sql));
  $cr = $row['curr'];
  $rem = $row['rem'];

  $change = $newCurr - $cr;
  $newRem = $rem - $change;
  $sql = "UPDATE teamList SET curr = '$newCurr' WHERE id = '$team'";
  mysqli_query($conn, $sql);
  $sql = "UPDATE teamList SET rem = '$newRem' WHERE id = '$team'";
  mysqli_query($conn, $sql);
  
  echo $newCurr.":".$newRem;

  /*if($newRem == $reqdFunds)
  {
    $sql = "UPDATE teamList SET preFlag = 1 WHERE id='$team'";
    mysqli_query($conn, $sql);
  }*/



  /*if($newRem < $reqdFunds || $newCurr > $max)
  {
    $sql = "UPDATE teamList SET preFlag = 1 WHERE id='$team'";
    mysqli_query($conn, $sql);
  }*/
?>