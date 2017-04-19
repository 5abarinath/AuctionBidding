<html>
<head>
<title>Selection Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body 
{
    background-image: url("images/gradient.jpg");
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


</head>

<?php
  
  $servername="localhost";
  $username="root";
  $key="";
  $dbname="ACL";
  $conn = new mysqli($servername, $username, $key, $dbname);

  class player
  {
    public $name;
    public $image;
    public $role;
  }

                                                    //fetching player info
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

  
                                                            //fetching team names
  $sql="SELECT name FROM teamList WHERE id='1'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $team1 = $row['name']; 

  $sql="SELECT name FROM teamList WHERE id='2'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $team2 = $row['name'];

  $sql="SELECT name FROM teamList WHERE id='3'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $team3 = $row['name'];

  $sql="SELECT name FROM teamList WHERE id='4'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $team4 = $row['name'];

  $sql="SELECT name FROM teamList WHERE id='5'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $team5 = $row['name'];

  $sql="SELECT name FROM teamList WHERE id='6'";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $team6 = $row['name'];

  $sql="SELECT name, curr FROM teamList ORDER BY curr DESC";
  $r = mysqli_query($conn, $sql);
  $name = array();
  $bid = array();
  $i = 0;
  while(($row = mysqli_fetch_array($r)) && $i < 6)
  {
    $name[$i] = $row['name'];
    $bid[$i] = $row['curr'];
    $i = $i + 1;
  }
?>

<body>
  <div class="container">
    <div class="row" style="color:white;">
    	<center><h1>ACE CRICKET LEAGUE</h1></center>
      <br>
    	<center><h3>SLOT/CATEGORY <?php echo $slot; ?></h3></center>
      <br>
    </div>

    <div class="row" style="color:white;">
      <form action="increSlot.php" method="post">
      	<div class="col-md-2"> 
      		<img src="<?php echo $obj1->image; ?>" alt="Player Name" style="width:150px;height:150px">
      		<p><h4><?php echo $obj1->name; ?> <br> <?php echo $obj1->role; ?></h4></p>
            <div class="form-group">
              <label for="sel1">Select Team:</label>
              <select class="form-control" id="sel1" name="player1">
                <option><?php echo $team1; ?></option>
                <option><?php echo $team2; ?></option>
                <option><?php echo $team3; ?></option>
                <option><?php echo $team4; ?></option>
                <option><?php echo $team5; ?></option>
                <option><?php echo $team6; ?></option>
              </select>
            </div>
      	</div>
      	
        <div class="col-md-2"> 
      		<img src="<?php echo $obj2->image; ?>" alt="Player Name" style="width:150px;height:150px">
      		<p><h4><?php echo $obj2->name; ?> <br> <?php echo $obj1->role; ?></h4></p>
            <div class="form-group">
              <label for="sel2">Select Team:</label>
              <select class="form-control" id="sel2" name="player2">
                <option><?php echo $team1; ?></option>
                <option><?php echo $team2; ?></option>
                <option><?php echo $team3; ?></option>
                <option><?php echo $team4; ?></option>
                <option><?php echo $team5; ?></option>
                <option><?php echo $team6; ?></option>
              </select>
            </div>
      	</div>
      	
        <div class="col-md-2"> 
      		<img src="<?php echo $obj3->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj3->name; ?> <br> <?php echo $obj3->role; ?></h4></p>
            <div class="form-group">
              <label for="sel3">Select Team:</label>
              <select class="form-control" id="sel3" name="player3">
                <option><?php echo $team1; ?></option>
                <option><?php echo $team2; ?></option>
                <option><?php echo $team3; ?></option>
                <option><?php echo $team4; ?></option>
                <option><?php echo $team5; ?></option>
                <option><?php echo $team6; ?></option>
              </select>
            </div>
      	</div>
      	
        <div class="col-md-2"> 
      		<img src="<?php echo $obj4->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj4->name; ?> <br> <?php echo $obj4->role; ?></h4></p>
            <div class="form-group">
              <label for="sel4">Select Team:</label>
              <select class="form-control" id="sel4" name="player4">
                <option><?php echo $team1; ?></option>
                <option><?php echo $team2; ?></option>
                <option><?php echo $team3; ?></option>
                <option><?php echo $team4; ?></option>
                <option><?php echo $team5; ?></option>
                <option><?php echo $team6; ?></option>
              </select>
            </div>
      	</div>
      	
        <div class="col-md-2"> 
      		<img src="<?php echo $obj5->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj5->name; ?> <br> <?php echo $obj5->role; ?></h4></p>
            <div class="form-group">
              <label for="sel5">Select Team:</label>
              <select class="form-control" id="sel5" name="player5">
                <option><?php echo $team1; ?></option>
                <option><?php echo $team2; ?></option>
                <option><?php echo $team3; ?></option>
                <option><?php echo $team4; ?></option>
                <option><?php echo $team5; ?></option>
                <option><?php echo $team6; ?></option>
              </select>
            </div>
      	</div>
      	
        <div class="col-md-2"> 
      		<img src="<?php echo $obj6->image; ?>" alt="Player Name" style="width:150px;height:150px">
          <p><h4><?php echo $obj6->name; ?> <br> <?php echo $obj6->role; ?></h4></p>
            <div class="form-group">
              <label for="sel6">Select Team:</label>
              <select class="form-control" id="sel6" name="player6">
                <option><?php echo $team1; ?></option>
                <option><?php echo $team2; ?></option>
                <option><?php echo $team3; ?></option>
                <option><?php echo $team4; ?></option>
                <option><?php echo $team5; ?></option>
                <option><?php echo $team6; ?></option>
              </select>
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
              <button type="submit" class="btn btn-danger btn-lg" >SUBMIT</button>
            </div>
          </div>
        </div>  


      </form>
	  </div>
  </div>
</body>
</html>
