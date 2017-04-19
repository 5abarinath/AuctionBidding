

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.error {color: #FF0000;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
body 
{
    background-image: url("images/gradient3.jpg");
    
    text-align:center;
    font-family:georgia
    margin: 20px;
}
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
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-variant: small-caps;
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
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-variant: small-caps;
}

.btn:active {
	position:relative;
	top:1px;
}

h1
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
text-shadow: 0.5px 0.5px gray;
}
h3
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
text-shadow: 0.5px 0.5px gray;
}
h2
{
color: white;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
text-shadow: 0.5px 0.5px gray;
}
h6
{
color: red;
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-variant: small-caps;
text-shadow: 0.5px 0.5px gray;

}

</style>
</head>
<body>
	<div class="container">
    <div class="row" style="margin: 20px">
    	<div class="col-sm-2">
    		<img src="images/acl_logo.jpg" class="img-rounded" alt="ACL LOGO" width="100" height="100">
    	</div>
    	<div class="col-sm-8">
  			<h1><u>Welcome to the ACL Auction!</u></h1>
		</div>
	</div>
	</div>
  <br>
  <?php
  define("minBid", 100000);
  define("maxBid", 106000);
  echo "<h2>You may make your first bid.<br><br>
  <br>*The amount must be between <u>".minBid."</u> and <u>".maxBid."</u>
  <br>*The amount must be a <u>multiple of 1000</u><br>
  <br>The amount that you enter will be treated as your base bid.
  <br>Normal bidding will continue after this.<br>
  <br>Enter your bid
  </h2>";



  ?>


  <form method="post" action="setPrice.php">
    <h2>Amount: </h2><input type="number" name="amt"  required>
    <br><br>  <input type="submit" name="submit" value="Set Bid" class="btn">
  </form>
  


</body>
</html>