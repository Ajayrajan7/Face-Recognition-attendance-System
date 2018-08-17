<html>
<head><title>Your page</title>
    <link rel="Stylesheet" type="text/css" href="dbtable.css">
</head>
<body>
    <h1>Your attendance record</h1>    
<table align="center" width="500" border="1px"  cellspacing="1">
    <tr>
    <th>Name</th>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
    </tr>
<?php
session_start();
if(isset($_SESSION['username']))
{
echo "Welcome ".$_SESSION['username'];
$us=$_SESSION['username'];
$con=new mysqli("localhost","root","","mydb1");
if($con->connect_error)
  echo "Failed";
else{
    $sql="SELECT Name,Mon,Tue,Wed,Thu,Fri FROM atrec WHERE Name='$us'";
    $record=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($record))
    {      
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Mon']."</td>";
            echo "<td>".$row['Tue']."</td>";
            echo "<td>".$row['Wed']."</td>";
            echo "<td>".$row['Thu']."</td>";
            echo "<td>".$row['Fri']."</td>";
            echo "</tr>";
     }
    }
$con->close();
}
else{
    header("Location:home.html");
}
?>
</table>
<div class=link>
<a href="logout.php">Logout</a><br><br><hr><br>
</div>
</body>
</html>