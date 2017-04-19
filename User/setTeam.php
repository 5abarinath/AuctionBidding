<?php 

  $name = $_POST["name"];

  if($name == "one")
    setcookie('team', 1);
  else if($name == "two")
    setcookie('team', 2);
  else if($name == "three")
    setcookie('team', 3);
  else if($name == "four")
    setcookie('team', 4);
  else if($name == "five")
    setcookie('team', 5);
  else if($name == "six")
    setcookie('team', 6);
  else
  {
    header("Location: Login.html");
    exit;
  }

  header("Location: firstPage.php")
 // exit;
  
?>