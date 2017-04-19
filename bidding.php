<html>
<head>
<title>Bidding Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.btn {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow: 2px 2px gray;
}
.btn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}

.btn:active {
	position:relative;
	top:1px;
}

body 
{
    background-image: url("images/gradient.jpg");
}

h1
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
text-shadow: 2px 2px gray;
}
h3
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
text-shadow: 2px 2px gray;
}
h2
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
text-shadow: 2px 2px gray;
}
.justify
{
	text-align: justify;
}
.whitebg
{
	background: #F0FFF0;
	border-radius: 25px;
}
.btn-circle 
{
  width: 150px;
  height: 150px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.42;
  border-radius: 75px;
}

.whitebg
{
  background: #F0FFF0;
  border-radius: 25px;
}
</style>

<script type="text/javascript">
  
  window.onload = function init(){
    if(window.EventSource)
    {
        var obj = new EventSource("server.php");
        obj.addEventListener("message", function(e){
            update(e.data);
        }, false);
    }
  }

  function update(data)
  {
    var a = data.split(":");
    document.getElementById("t1").innerHTML = a[0];
    document.getElementById("b1").innerHTML = a[1];
    document.getElementById("t2").innerHTML = a[2];
    document.getElementById("b2").innerHTML = a[3];
    document.getElementById("t3").innerHTML = a[4];
    document.getElementById("b3").innerHTML = a[5];
    document.getElementById("t4").innerHTML = a[6];
    document.getElementById("b4").innerHTML = a[7];
    document.getElementById("t5").innerHTML = a[8];
    document.getElementById("b5").innerHTML = a[9];
    document.getElementById("t6").innerHTML = a[10];
    document.getElementById("b6").innerHTML = a[11];

    if(a[12] == 1)
      document.getElementById("b1").style.color = "red";
    else
      document.getElementById("b1").style.color = "black";
    
    if(a[13] == 1)
      document.getElementById("b2").style.color = "red";
    else
      document.getElementById("b2").style.color = "black";
    
    if(a[14] == 1)
      document.getElementById("b3").style.color = "red";
    else
      document.getElementById("b3").style.color = "black";
    
    if(a[15] == 1)
      document.getElementById("b4").style.color = "red";
    else
      document.getElementById("b4").style.color = "black";
    
    if(a[16] == 1)
      document.getElementById("b5").style.color = "red";
    else
      document.getElementById("b5").style.color = "black";
    
    if(a[17] == 1)
      document.getElementById("b6").style.color = "red";
    else
      document.getElementById("b6").style.color = "black";
  }

  function end()
  {
      window.location.href = "endSlot.php";
  }

</script>

</head>

<?php
  $servername = "localhost";
  $username = "root";
  $key = "";

  $conn = new mysqli($servername, $username, $key);
  $db = "CREATE DATABASE IF NOT EXISTS ACL";
  mysqli_query($conn, $db);
 
  /*$sql = "UPDATE teamList SET btnFlag = 1 WHERE id = 7";
  mysqli_query($conn, $sql);*/

  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  } 

  $conn->select_db('ACL');



  class player
  {
    public $name;
    public $image;
    public $role;
  }

  $sql = "SELECT slot FROM teamList WHERE id = 7";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  $slot = $row['slot'];

  $id = 6 * ($slot - 1) + 1;

  $obj1 = new player();
  $sql="SELECT * FROM playerList WHERE id = '$id'";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $obj1->name = $row['name'];
  $obj1->image = $row['image'];
  $obj1->role = $row['role'];

  $id = 6 * ($slot - 1) + 2;
  $obj2 = new player();
  $sql="SELECT * FROM playerList WHERE id='$id'";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $obj2->name = $row['name'];
  $obj2->image = $row['image'];
  $obj2->role = $row['role'];

  $id = 6 * ($slot - 1) + 3;
  $obj3 = new player();
  $sql="SELECT * FROM playerList WHERE id='$id'";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $obj3->name = $row['name'];
  $obj3->image = $row['image'];
  $obj3->role = $row['role'];

  $id = 6 * ($slot - 1) + 4;  
  $obj4 = new player();
  $sql="SELECT * FROM playerList WHERE id='$id'";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $obj4->name = $row['name'];
  $obj4->image = $row['image'];
  $obj4->role = $row['role'];

  $id = 6 * ($slot - 1) + 5;
  $obj5 = new player();
  $sql="SELECT * FROM playerList WHERE id='$id'";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $obj5->name = $row['name'];
  $obj5->image = $row['image'];
  $obj5->role = $row['role'];

  $id = 6 * ($slot - 1) + 6;
  $obj6 = new player();
  $sql="SELECT * FROM playerList WHERE id='$id'";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $obj6->name = $row['name'];
  $obj6->image = $row['image'];
  $obj6->role = $row['role'];


  $sql="SELECT name, curr FROM teamList ORDER BY curr DESC";
  $r = mysqli_query($conn, $sql);
  $name = array();
  $bid = array();
  $i = 0;
  while(($row = mysqli_fetch_array($r)) && $i < 6)
  {
    $name[$i] = $row['name'];
    $bid[$i] = $row['curr'];
    /*if($i == 0)
    {
      $sql = "UPDATE bids SET currentBid = {$bid[$i]} WHERE id = '$slot'" ;
      mysqli_query($conn, $sql);
    }*/
    $i = $i + 1;
  }

?>

<body>
  <div class="container">
    <div class="row">
    	<div class="col-sm-2">
    		<img src="images/acl_logo.jpg" class="img-rounded" alt="ACL LOGO" width="100" height="100">
    	</div>
    	<div class="col-sm-10">
    		<center><h1>ACE CRICKET LEAGUE</h1></center>
    	</div>
    	<center><h3>SLOT/CATEGORY <?php echo $slot;?></h3></center>
      <br>
    </div>

    <div class="row" style="color:white;">
        <div class="col-md-2"> 
          <img src="<?php echo $obj1->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj1->name; ?> <br> <?php echo $obj1->role; ?></h4></p>
        </div>
        
        <div class="col-md-2"> 
          <img src="<?php echo $obj2->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj2->name; ?> <br> <?php echo $obj2->role; ?></h4></p>
        </div>
        
        <div class="col-md-2"> 
          <img src="<?php echo $obj3->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj3->name; ?> <br> <?php echo $obj3->role; ?></h4></p>
        </div>
        
        <div class="col-md-2"> 
          <img src="<?php echo $obj4->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj4->name; ?> <br> <?php echo $obj4->role; ?></h4></p>
        </div>
        
        <div class="col-md-2"> 
          <img src="<?php echo $obj5->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj5->name; ?> <br> <?php echo $obj5->role; ?></h4></p>
        </div>
        
        <div class="col-md-2"> 
          <img src="<?php echo $obj6->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj6->name; ?> <br> <?php echo $obj6->role; ?></h4></p>
        </div>
    </div>

    <div class="row">
    <div class="container">
      <div class="col-md-5 whitebg">
        <table class="table">
          <thead>
            <tr> <b>
              <th>TEAM </th> 
              <th>CURRENT BID</th></b>
            </tr> 
          </thead>
          <tbody>
            <tr class="warning">
              <th><div id="t1"><?php echo $name[0]?></div> </th> 
              <th><div id="b1" style="color:black;"><?php echo $bid[0]?></div></th></b>
            </tr>
            <tr class="success">
              <th><div id="t2"><?php echo $name[1]?></div> </th> 
              <th><div id="b2" style="color:black;"><?php echo $bid[1]?></div></th></b>
            </tr>         
            <tr class="warning">
              <th><div id="t3"><?php echo $name[2]?></div> </th> 
              <th><div id="b3" style="color:black;"><?php echo $bid[2]?></div></th></b>
            </tr>
            <tr class="success">
              <th><div id="t4"><?php echo $name[3]?></div> </th> 
              <th><div id="b4" style="color:black;"><?php echo $bid[3]?></div></th></b>
            </tr>
            <tr class="warning">
              <th><div id="t5"><?php echo $name[4]?></div> </th> 
              <th><div id="b5" style="color:black;"><?php echo $bid[4]?></div></th></b>
            </tr>
            <tr class="success">
              <th><div id="t6"><?php echo $name[5]?></div> </th> 
              <th><div id="b6" style="color:black;"><?php echo $bid[5]?></div></th></b>
            </tr>                                                
          </tbody> 
        </table>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-4">
        <br><br><br>
        <button type="submit" class="btn btn-danger btn-circle" onClick= "end();"><center><h3>END SLOT</h3></center></button>
      </div>
    </div>
  </div>                                                                           
    
  </div>
</body>
</html>
