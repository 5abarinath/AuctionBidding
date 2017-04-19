<?php
	header("Content-Type: text/event-stream");
	header("Cache-Control: no-cache");
	header("Connection: keep-alive");

    $servername="localhost";
    $username="root";
    $key="";
    $dbname="ACL";	
	$conn = new mysqli($servername, $username, $key, $dbname);

	while(true)
	{
		$sql = "SELECT slot FROM teamList WHERE id = 7";
  		$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  		$slot = $row['slot'];

		$sql="SELECT name, curr, preFlag FROM teamList ORDER BY curr DESC";
		$r = mysqli_query($conn, $sql);
		$name = array();
		$bid = array();
		$premium = array();
		$i = 0;
		while(($row = mysqli_fetch_array($r)) && $i < 6)
		{
			$name[$i] = $row['name'];
			$bid[$i] = $row['curr'];
			$premium[$i] = $row['preFlag'];
			$i = $i + 1;
		}

		$sql="SELECT currentBid, maxBid FROM bids WHERE id='$slot'";
		$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		$curr = $row['currentBid'];
		$max = $row['maxBid'];

		if($curr == $max)
		{
			$i=1;
			while($i<=6)
			{
				$sql="UPDATE teamList SET preFlag = 1 WHERE id='$i'";
				mysqli_query($conn, $sql);
				$i =$i+1;
			}
		}

		sendMessage($name, $bid, $premium);
		sleep(0.05);
	}

	function sendMessage($n, $b, $p)
	{
		
		echo "data: $n[0]:$b[0]:$n[1]:$b[1]:$n[2]:$b[2]:$n[3]:$b[3]:$n[4]:$b[4]:$n[5]:$b[5]:$p[0]:$p[1]:$p[2]:$p[3]:$p[4]:$p[5]\n\n";
		ob_flush();
		flush();
	}
//:$n[1]:$b[1]:$n[2]:$b[2]:$n[3]:$b[3]:$n[4]:$b[4]:$n[5]:$b[5]
?>