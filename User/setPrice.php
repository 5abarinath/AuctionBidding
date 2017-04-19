<?php 

  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";  
  $conn = new mysqli($servername, $username, $key, $dbname);

  $sql="SELECT slot FROM teamList WHERE id = '7'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $slot = $row["slot"];
  $team = $_COOKIE["team"];



  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if ($_POST["amt"]%1000!=0 || ($_POST["amt"]<100000)||($_POST["amt"]>106000))
    {
      header("Location: firstPage.php");
      exit;
    }
    else
    {
      $bid = $_POST["amt"];
      $sql = "SELECT rem FROM teamList WHERE id='$team'";
      $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
      $rem = $row["rem"];
      $rem = $rem - $bid;
      $sql = "UPDATE teamList SET curr = '$bid' WHERE id = '$team'";
      mysqli_query($conn, $sql); 
      $sql = "UPDATE teamList SET rem = '$rem' WHERE id = '$team'";
      mysqli_query($conn, $sql); 
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  header("Location: bidding.php");
  exit;
?>