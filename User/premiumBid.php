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
  $inc =  $row['premium'];

  $newCurr = $curr + $inc;
  $sql = "UPDATE bids SET currentBid = '$newCurr' WHERE id = '$slot'";
  mysqli_query($conn, $sql);

  $sql="SELECT * FROM teamList WHERE id = '$team'";
  $row = mysqli_fetch_array(mysqli_query($conn, $sql));
  $cr = $row['curr'];
  $premium = $row['premium'];

  $change = $newCurr - $cr;
  $newPremium = $premium - $change;
  $sql = "UPDATE teamList SET curr = '$newCurr' WHERE id = '$team'";
  mysqli_query($conn, $sql);
  $sql = "UPDATE teamList SET premium = '$newPremium' WHERE id = '$team'";
  mysqli_query($conn, $sql);
  
  echo $newCurr.":".$newPremium;

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