<?php
  $username=$_POST['uname'];
  $email=$_POST['em'];
  $pass=$_POST['pwd'];
  $con=new mysqli("localhost","root","","mydb1");
  if($con->connect_error)
  {
      echo "Db not connected";
  }
  else
  {
      echo "Db connected";
  }
  session_start();
  $_SESSION['username']=$username;
  $sql= "INSERT INTO userrecord (Name,Email,Password) VALUES('$username','$email','$pass')";
   if($con->query($sql) === TRUE)
   {
       echo "Record created";
       header("Location:afterlogin.php");
   }
   else
        echo "Error creating record";
   $con->close();
  ?>