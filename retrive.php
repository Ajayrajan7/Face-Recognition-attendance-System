<?php
  $email=$_POST['em'];
  $pass=$_POST['pwd'];
  $con=new mysqli("localhost","root","","mydb1");
  if($con->connect_error)
  {
      echo "Db not connected";
  }
  else
  {
  $sql=mysqli_query($con,"SELECT * FROM userrecord WHERE Email='$email'AND Password='$pass' LIMIT 1"); 
  $result=mysqli_num_rows($sql);
 if($result==1)
  {
      $row=mysqli_fetch_array($sql);
      session_start();
      $_SESSION['username']=$row['Name'];
      $_SESSION['email']=$row['Email'];
      $_SESSION['logged']=TRUE;
      header("Location:userpg.php");
      exit;

  }
  else
  {
    echo "error"; 
      exit;
  }
}
$con->close();

?>