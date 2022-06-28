<?php

$con_bombeo= mysqli_connect("localhost", "root", "");
$db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");
$_POST[('uname')]= $_GET[('uname')];
$_POST[('pwd')]= $_GET[('pwd')];
$query = mysqli_query($con_bombeo,"SELECT studID, lastName, user_level FROM proj_table WHERE studID='".$_POST['uname']."'") or die(mysqli_error());

if($query)
{
	while($row = mysqli_fetch_array($query))
	{		
		if($row['lastName'] == $_POST['pwd']  )
		{
		
		// echo $row['user_level'];
			if($row['user_level'] == "user")
			{
				echo "<br><br><br>Login Successfull!";
				header("Location:AdminHome");
			}
			else{
				header("Location:UserHome");
			}
		}
		else
		{
			echo "<br><br><br><a style = ' font-size:100px';>Password Or Username Incorrect!<br></a>";	
            echo " <a href='/' ><input type='button' value='Back'/><a2></a>";
		}
	}
}
$_POST[('uname')]= $_GET[('uname')];
$_POST[('pwd')]= $_GET[('pwd')];
$query = mysqli_query($con_bombeo,"SELECT studID, lastName, user_level FROM proj_table WHERE lastName='".$_POST['pwd']."'") or die(mysqli_error());
if($query)
{
	while($row = mysqli_fetch_array($query))
	{		
		if($row['studID'] == $_POST['uname']  )
		{
		
		// echo $row['user_level'];
			if($row['user_level'] == "user")
			{
                echo "<a href='UserHome'><input type='button' value='Proceed'/></a>";
			}
			else{
				header("Location:UserHome");
			}
		}
		else
		{
			echo "<br><br><br><a style = ' font-size:100px;'>Username / Password is Incorrect!<br></a>";	
            echo "<a href='./index'><input type='button' value=''/></a>";
		}
	}
}