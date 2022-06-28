<?php

$con_bombeo= mysqli_connect("localhost", "root", "");
$db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");

$_POST[('studID')]= $_GET[('studID')];
$_POST[('lastName')]= $_GET[('lastName')];
$_POST[('firstName')]= $_GET[('firstName')];
$_POST[('MI')]= $_GET[('MI')];
$_POST[('course')]= $_GET[('course')];
$_POST[('yearlevel')]= $_GET[('yearlevel')];

$query = mysqli_query($con_bombeo,"INSERT INTO proj_table (studID,lastName,firstName,MI,course,yearlevel)
 VALUES ('$_POST[studID]','$_POST[lastName]','$_POST[firstName]','$_POST[MI]','$_POST[course]','$_POST[yearlevel]')") or die(mysql_error());
if(!$query){
    echo "Alert! Student not added.";
}
else{
    echo "Student successfully added!";
}

echo "<a href='/'><input type='button' value='Back'/></a>";

?>



