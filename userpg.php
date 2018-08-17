<?php
  session_start();
  if(!$_SESSION['logged'])
  {
      header("Location:home.html");
      exit;
  }
  echo"Login successful";
  echo "<br>";
  echo "Welcome ".$_SESSION['username'];
  header("Location:afterlogin.php");
  //session_destroy();
  ?>