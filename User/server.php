<?php
	

	header("Content-Type: text/event-stream");
	header("Cache-Control: no-cache");
	header("Connection: keep-alive");

	$servername="localhost";
	$username="root";
	$key="";
	$dbname="ACL";	
	$conn = new mysqli($servername, $username, $key, $dbname);

	$team = $_COOKIE['team'];
	while(true)
	{
		$sql="SELECT btnFlag,slot FROM teamList WHERE id = '7'";
		$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		$flagEnableButton = $row["btnFlag"];
		$slot = $row["slot"];
		$nextSlot = $slot + 1;
		
		$sql="SELECT currentBid FROM bids WHERE id = '$slot'";
		$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		$curr = $row["currentBid"];

		$sql = "SELECT * FROM teamlist WHERE id = '$team'";
		$row = mysqli_fetch_array(mysqli_query($conn, $sql));
		$cr = $row['curr'];
  		$rem = $row['rem'];
  		$flagPremium = $row['preFlag'];
  		$premium = $row['premium'];
  		$flagEmpty = $row['btnFlag'];

		$sql="SELECT requirement FROM bids WHERE id = '$nextSlot'";
	  	$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  		$reqdFunds = $row['requirement'];

  		if($flagPremium == 0)
  		{
  			$newCurr = $curr + 1000;
  			$newRem = $rem - ($newCurr - $cr);
  			if ($newRem < $reqdFunds )
  			{
  				$sql="UPDATE teamList SET preFlag = 1 WHERE id='$team'";
				mysqli_query($conn, $sql);
  			}

  		}
  		else
  		{
  			//USE bthFlag of every team here
  			$newCurr = $curr + 2000;
  			$newPremium = $premium - ($newCurr - $cr);
  			if($newPremium < 0)
  			{
  				$sql="UPDATE teamList SET btnFlag = 1 WHERE id='$team'";
  				mysqli_query($conn, $sql);
  			}
  		}

  		$sql = "SELECT btnFlag, preFlag FROM teamlist WHERE id = '$team'";
		$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  		$flagEmpty = $row['btnFlag'];
  		$flagPremium = $row['preFlag'];

		if($flagEnableButton == 1)
		{
			sendMessage($flagEnableButton, $flagPremium, $flagEmpty, $curr);
			sleep(0.05);
		}
		else
		{
			sendMessage($flagEnableButton, $flagPremium, $flagEmpty, $curr);
			break;
		}
	}

	function sendMessage($fEB, $fP, $fE, $m)
	{
		echo "data: $fEB:$fP:$fE:$m \n\n";
		ob_flush();
		flush();		
	}
?>