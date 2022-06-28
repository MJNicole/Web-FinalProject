<?php

$con_bombeo= mysqli_connect("localhost", "root", "");
$db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");

$query = mysqli_query($con_bombeo,"Update proj_table SET status='delete' WHERE studID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='http://127.0.0.1:8000/UserHome'><input type='button' value='Back'/></a>";
?>