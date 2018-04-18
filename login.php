<?php
session_start();
include('connect.php');
$name= $_POST['name'];
$pwd= $_POST['pwd'];
$query="select * from login where id=\"$name\" and password=\"$pwd\"";
$result=mysqli_query($dbh,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row)
{
	$_SESSION['sec']=$row['section'];
	header("location:election.html");
}
else
{
	echo "username or password wrong";
}
?>
