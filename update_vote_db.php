<?php
include('connect.php');
if(isset($_GET['sel_candidate']) && !empty($_GET['sel_candidate'])){
$name=$_GET['sel_candidate'];
}
echo $name;
$query="update cr set votes=votes+1 where name = \"$name\"";
mysqli_query($dbh,$query) or die('error in name');
echo ' votes are updated<br />';

?>

