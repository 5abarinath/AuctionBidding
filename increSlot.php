<?php

  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";
  
  $conn = new mysqli($servername, $username, $key, $dbname);

  $p1 = $_POST["player1"];
  $p2 = $_POST["player2"];
  $p3 = $_POST["player3"];
  $p4 = $_POST["player4"];
  $p5 = $_POST["player5"];
  $p6 = $_POST["player6"];

  $sql = "SELECT slot FROM teamList WHERE id = 7";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $slot = $row['slot'];



  $sql = "SELECT curr FROM teamList WHERE name = '$p1'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $bid1 = $row['curr'];

  $sql = "SELECT curr FROM teamList WHERE name = '$p2'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $bid2 = $row['curr'];

  $sql = "SELECT curr FROM teamList WHERE name = '$p3'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $bid3 = $row['curr'];

  $sql = "SELECT curr FROM teamList WHERE name = '$p4'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $bid4 = $row['curr'];

  $sql = "SELECT curr FROM teamList WHERE name = '$p5'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $bid5 = $row['curr'];

  $sql = "SELECT curr FROM teamList WHERE name = '$p6'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $bid6 = $row['curr'];



  
  
  $id = 6 * ($slot - 1) + 1;
  $sql = "UPDATE playerList SET team = '$p1', amt = '$bid1' WHERE id = '$id'";
  mysqli_query($conn, $sql);

  $id = 6 * ($slot - 1) + 2;
  $sql = "UPDATE playerList SET team = '$p2', amt = '$bid2' WHERE id = '$id'";
  mysqli_query($conn, $sql);

  $id = 6 * ($slot - 1) + 3;
  $sql = "UPDATE playerList SET team = '$p3', amt = '$bid3' WHERE id = '$id'";
  mysqli_query($conn, $sql);

  $id = 6 * ($slot - 1) + 4;
  $sql = "UPDATE playerList SET team = '$p4', amt = '$bid4' WHERE id = '$id'";
  mysqli_query($conn, $sql);

  $id = 6 * ($slot - 1) + 5;
  $sql = "UPDATE playerList SET team = '$p5', amt = '$bid5' WHERE id = '$id'";
  mysqli_query($conn, $sql);

  $id = 6 * ($slot - 1) + 6;
  $sql = "UPDATE playerList SET team = '$p6', amt = '$bid6' WHERE id = '$id'";
  mysqli_query($conn, $sql);
  
  $sql="SELECT id FROM teamList ORDER BY curr DESC";
	$r = mysqli_query($conn, $sql);
	$teamId = array();
	$i = 0;
	while(($row = mysqli_fetch_array($r)) && $i < 6)
	{
		$teamId[$i] = $row['id'];
		$i = $i + 1;
	}

  $slot = $slot + 1;                                            //slot++
  $sql = "SELECT baseBid FROM bids WHERE id = '$slot'";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $base = $row['baseBid'];
  $i=0;
  while($i < 6)
  {
    $nextSlotBid = $base + $i * 1000;
    $tempTeamId = $teamId[$i];
    $sql = "UPDATE teamList SET curr = '$nextSlotBid' WHERE id = '$tempTeamId'" ;
    mysqli_query($conn, $sql);
    $i = $i + 1;
  }
  
  
  $i = 1;
  while($i <= 6)
  {
    $sql = "UPDATE teamList SET btnFlag = 0, preFlag = 0 WHERE id = '$i'";
    mysqli_query($conn, $sql);
    $i = $i + 1;
  }

  
  $sql = "UPDATE teamList SET slot = '$slot' WHERE id = 7";
  mysqli_query($conn, $sql);

  header("Location: startSlot.php");
  exit;

?>