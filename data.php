<?php
session_start();
include('connect.php');

$query="select * from cr where section=".$_SESSION['sec'];
$result = mysqli_query($dbh,$query) or die("error connecting to database");
echo "connected to database of sec ".$_SESSION['sec']."<br />";

//$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
//echo $row['id']."  ".$row['name']."  ".$row['votes'].'<br />';
//print_r($row);
echo '<form id = "myform">';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" name="candidate" id="name1" value="'.$row['name'].'">'.$row['name'].'</input><br />';
}
echo '</form>';
?>
