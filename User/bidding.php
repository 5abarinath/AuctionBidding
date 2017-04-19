
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
h1
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
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




.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}


.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

h3
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
text-shadow: 2px 2px gray;
}

.modal-header {
    padding: 2px 16px;
    background: #0af5f5;
  background-image: -webkit-linear-gradient(top, #0af5f5, #044ee0);
  background-image: -moz-linear-gradient(top, #0af5f5, #044ee0);
  background-image: -ms-linear-gradient(top, #0af5f5, #044ee0);
  background-image: -o-linear-gradient(top, #0af5f5, #044ee0);
  background-image: linear-gradient(to bottom, #0af5f5, #044ee0);
    color: white;
    opacity : .75;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
   background: #0af5f5;
  background-image: -webkit-linear-gradient(top, #0af5f5, #044ee0);
  background-image: -moz-linear-gradient(top, #0af5f5, #044ee0);
  background-image: -ms-linear-gradient(top, #0af5f5, #044ee0);
  background-image: -o-linear-gradient(top, #0af5f5, #044ee0);
  background-image: linear-gradient(to bottom, #0af5f5, #044ee0);
    color: white;
    opacity : .75;
}

@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0}
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0}
    to {opacity: 1}
}


body 
{
    background-image: url("images/gradien.jpg");
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
}

h2
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
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
</style>

<script>
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
      var ar = data.split(":");
      var flag = ar[0];
      var val = ar[3];
      var premiumEnable = ar[1];
      var noMoreFunds = ar[2];
     // var temp = 0;
      if(flag == 1)     //If slot has been enabled
      {
       // temp=1;
        if(premiumEnable == 1)
        {
          if(noMoreFunds == 1)        //No more money to spend in current slot
          {
            document.getElementById("bidBtn").disabled = true;
            document.getElementById("premiumBtn").disabled = true;    
            document.getElementById("curr").innerHTML = val;
          }
          else
          { 
            document.getElementById("premiumBtn").disabled = false;  //For premium funds
            document.getElementById("bidBtn").disabled = true;
            document.getElementById("curr").innerHTML = val;
            document.getElementById("bidIncre").style.color = "red";
            document.getElementById("bidIncre").innerHTML = "2000";
          }
        }
        else
        {   //Normal bidding
            document.getElementById("bidBtn").disabled = false;
            document.getElementById("premiumBtn").disabled = true;
            document.getElementById("curr").innerHTML = val;
          
        }
      }
      else
      {                               //Slot has ended
        document.getElementById("bidBtn").disabled = true;
        document.getElementById("premiumBtn").disabled = true;
        document.getElementById("curr").innerHTML = val;
        /*if(temp == 1)
          document.getElementById("nextBtn").disabled = false;
        temp = 0;*/
      }
  }
  
  function refresh()
  {
    window.location.reload();
  }

  function next()
  {
    var obj = new XMLHttpRequest();
     obj.onreadystatechange = function() {
        if(this.readyState == 4)
        {
          var temp = this.responseText;
          var a = temp.split(":");
          var cr = a[0];
          var rem = a[1];
          document.getElementById("curr").innerHTML = cr;
          document.getElementById("cur").innerHTML = rem;
          document.getElementById("u").innerHTML = cr;
          document.getElementById("rem").innerHTML = rem;
        }
    }
    obj.open("GET", "increaseBid.php?", true);
    obj.send();
  }

  function premium()
  {
    var obj = new XMLHttpRequest();
     obj.onreadystatechange = function() {
        if(this.readyState == 4)
        {
          var temp = this.responseText;
          var a = temp.split(":");
          var cr = a[0];
          var rem = a[1];
          document.getElementById("curr").innerHTML = cr;
          document.getElementById("cur").innerHTML = rem;
          document.getElementById("u").innerHTML = cr;
          document.getElementById("premium").innerHTML = rem;
        }
    }
    obj.open("GET", "premiumBid.php?", true);
    obj.send();
  }
</script>
</head>

<?php
  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";

  $conn = new mysqli($servername, $username, $key,$dbname);

  $teamid = $_COOKIE['team'];

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

  $sql = "SELECT * FROM bids WHERE id='$slot' ";
  $row=mysqli_fetch_array(mysqli_query($conn,$sql));
  $base = $row["baseBid"];
  $max = $row["maxBid"];
  $current = $row["currentBid"];
  $incre = $row["bidIncre"];

  $sql = "SELECT curr, rem, premium FROM teamList WHERE id='$teamid' ";
  $row = mysqli_fetch_array(mysqli_query($conn,$sql));
  $currentteamBid = $row['curr'];
  $remainingFunds = $row['rem'];
  $remainingPremium = $row['premium'];
?>



<body>
<div class="container">
    <div class="row" style="padding-top: 20px;">
    <center>
    <div class="col-sm-2">
    <center>
    <img src="images/acl_logo.jpg" class="img-rounded" alt="ACL LOGO" width="100" height="100">
    </center>
    </div>
    <div class="col-sm-8">
    	<center><h1>ACE CRICKET LEAGUE</h1></center>
    	<center><h3>Bidding Page</h3></center>
    	<center><h3>SLOT/CATEGORY <?php echo $slot; ?></h3></center>
      <br>
    </div>
    </center>
    <div class="col-sm-2">
    <button id="myBtn" class="btn">Team Information</button>
    </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-2"> 
          <img src="<?php echo $obj1->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj1->name; ?> <br> <?php echo $obj1->role; ?></h4></p>
        </div>
        
        <div class="col-md-2"> 
          <img src="<?php echo $obj2->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj2->name; ?> <br> <?php echo $obj1->role; ?></h4></p>
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
			<div class="col-md-4 whitebg">
				<!--<br>
				<h4><p class="justify">Base Bid = <?php echo $base; ?><br>
				Maximum Bid =<br>
				Current Bid =<div id="curr"> <?php echo $current; ?></div><br>
				Your Bid =<div id="u"> </div><br>
				Bid Increment = <?php echo $incre; ?><br></p>
				<p class="justify"> <br><br><b>Remaining funds</b></p><br></h4>-->
        <br>
        <table class="table">
          <tbody>
            <tr class="warning">
              <td>Base Bid</td>
              <td><?php echo $base; ?></td>
            </tr>
            <tr class="success">
              <td>Maximum Bid</td>
              <td><?php echo $max; ?></td>
            </tr>            
            <tr class="warning">
              <td>Current Bid</td>
              <td><div id="curr"><?php echo $current; ?></div></td>
            </tr>
            <tr class="success">
              <td>Your Bid</td>
              <td><div id="u"><?php echo $currentteamBid; ?> </div></td>
            </tr>
            <tr class="warning">
              <td>Bid Increment</td>
              <td><div id="bidIncre" style="color:black;"><?php echo $incre; ?></div></td>
            </tr>   
            <tr class="success">
              <td><b>Remaining Funds</b></td>
              <td><div id="rem"><?php echo $remainingFunds; ?></div></td>
            </tr>
            <tr class="warning">
              <td><b>Remaining Premium Funds</b></td>
              <td><div id="premium"><?php echo $remainingPremium; ?></div></td>
            </tr>                                          
          </tbody> 
        </table>
			</div>
			<div class="col-md-4">
				<br><br><br>
				<center><button type="button" class="btn btn-danger btn-circle" id="bidBtn" disabled= "true" onClick="next();"><h3>BID</h3></button></center>
			</div>
			<div class="col-md-2">
				<br><br><br>
				<center><button type="button" class="btn btn-danger btn-circle" id="premiumBtn" disabled= "true" onClick="premium();"><h3>Use<br>Premium<br>points</h3></button></center>
			</div>
		</div>
	</div>
</div>
<!--
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-10">
    </div>
    <div class="col-md-2">                  COMBINE THIS BUTTON WITH BID BUTTON USING JS 
    <right><button class="btn" id="nextBtn" disabled="true" onClick="refresh();"><h3>Next Slot</h3></button></right>
    </div>
  </div>
</div>                  -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times</span>
      <h2>My Team</h2>
    </div>
    <div class="modal-body">
    	<div class="row" style="padding-top: 20px;" >
    		<div class="col-sm-2">
    			<center>
    				<img src="images/acl_logo.jpg" class="img-rounded" alt="ACL LOGO" width="100" height="100">
    			</center>
    		</div>
    		<div class="col-sm-10">
      			<p><h4>Current points available are : <div id="cur"></div></h4></p>
      			
      		</div>
      	</div>
      	<div class="row" style="padding-top: 50px; padding-left: 20px" >
      		<p><h4>The Current Players in my team are :</h4></p>
      		<div class="col-sm-2">
      			<center><p><h4>Player name</h4></p></center>
      		</div>
      		<div class="col-sm-2">
      			<center><p><h4>Player name</h4></p></center>
      		</div>
      		<div class="col-sm-2">
      			<center><p><h4>Player name</h4></p></center>
      		</div>
      		<div class="col-sm-2">
      			<center><p><h4>Player name</h4></p></center>
      		</div>
      		<div class="col-sm-2">
      			<center><p><h4>Player name</h4></p></center>
      		</div>
      		<div class="col-sm-2">
      			<center><p><h4>Player name</h4></p></center>
      		</div>
      		
      	</div>
        <div class="row" style="padding-top: 50px; padding-left: 20px" >
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          
        </div>
        <div class="row" style="padding-top: 50px; padding-left: 20px" >
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          <div class="col-sm-2">
            <center><p><h4>Player name</h4></p></center>
          </div>
          
        </div>
      </div>
    <div class="modal-footer">
      <h2>Current Premium Points left to spend : 0x0000</h2>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



</body>
</html>
