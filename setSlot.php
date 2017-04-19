<?php
	$servername="localhost";
	$username="root";
	$key="";
	$dbname="ACL";
	$conn = new mysqli($servername, $username, $key, $dbname);

	$change = $_POST["lul"];
	setcookie('slot' , $change);

?>

<html>
<body>

	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
		<input type="text" name="lul">
		<input type="submit">
	</form>

</body>
</html>