<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
<style>
	body{
		margin: 0;
  		padding: 0;
  		background: linear-gradient(120deg,#2980b9, #95F985);
  		height: 100vh;
	}
</style>
</head>
<body>
<br>
<pq style = "padding:31%; font-size:50px; color:white;"> ☰ UPDATE </pq>
 	<?php 
    $con_bombeo= mysqli_connect("localhost", "root", "");
    $db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");
    ?>
	 	<center>
        	<form action="update">	
			<table>
				<tr>
            		<br>
					<td><input type ="text" name="studID" placeholder="Student ID"></td>
            		<td><input type ="text" name="lastName" placeholder="Last Name"></td>
					<td><input type ="text" name="firstName" placeholder="First Name"></td>
            		</tr><tr>
					<td><input type ="text" name="MI" placeholder="Middle Initial"></td>
					<td><input type ="text" name="course" placeholder="Course"></td>
					<td><input type ="text" name="yearlevel" placeholder="Year Level"></td>
					</tr><tr>
					<td colspan="4">
					<input type ="submit" name="update" value="Update"/>
					</td>
				</tr>
			</table>
			</form>
		
		

 
<?php
$con_bombeo= mysqli_connect("localhost", "root", "");
$db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");

if(isset($_POST["update"]))
{
    $_GET['studID'] = 'studID';
        $query = mysqli_query($con_bombeo,"UPDATE proj_table SET studID = '$_POST[studID]' , lastName= '$_POST[lastName]',
        firstName= '$_POST[firstName]' , MI = '$_POST[MI]' , course = '$_POST[course]' , yearlevel= '$_POST[yearlevel]' 
        WHERE studID =".$_GET['id']."");

if(!$query){
	echo "DATABASE IS NOT UPDATED.";
}
else{
	echo"DATABASE IS UPDATED!";
    
}

echo "<a href='http://127.0.0.1:8000/UserHome'><input type='button' value='Back'/></a>";
}
?>
<center>
</body>
</html>



