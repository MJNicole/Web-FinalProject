<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <br><br><br>
    <pq style = "padding:10%; font-size:50px; color:white;">🏠 WELCOME STUDENT USER!
</pq>
<?php

?>	 
<?php
$con_bombeo= mysqli_connect("localhost", "root", "");
$db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");?>	

	<center>

    <a style ="font-size : 30px;text-align:center; color:white;">SCHOOL DATABASE RECORD</a>
        <?php 
    
    $con_bombeo= mysqli_connect("localhost", "root", "");
    $db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo");
    echo "<table border=4 cellspacing=2>
    <tr style='background-color:white;'>
            <th>Student ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Initial</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>User Level</th>
            <th>Status</th>
            <th>Action</th>
         </tr>";

$query1 = mysqli_query($con_bombeo, "SELECT * FROM proj_table WHERE status = 'Active'") or die(mysqli_error());
    while($row = mysqli_fetch_array($query1)){
        echo "<tr style='background-color:white;font-size:20px;text-align:center;'>
        <td>$row[studID]</td>
        <td>$row[lastName]</td>
        <td>$row[firstName]</td>
        <td>$row[MI]</td>
        <td>$row[course]</td>
        <td>$row[yearlevel]</td>
        <td>$row[user_level]</td>
        <td>$row[status]</td><br>
                <td align='center'><a style='background-color:red;;text-decoration:none;' href='delete/?id=$row[studID]'>Delete</a></td>
                <td align='center'><a style='background-color:#2980b9;;text-decoration:none;' href='update/?id=$row[studID]'>Update</a></td>
                </tr>";
    }
    echo "</table><br><br>"
?>
		<a href='./' style = "font-size:30px;text-decoration:none;padding:5px;color:white;background-color:#2691d9">LOGOUT</a>
		</ul>
        </table>
    
    </center>
	
    </body>
</html>