<!DOCTYPE html>
<html lang="en">
<head>

    <title>Register and Login Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php $con_bombeo= mysqli_connect("localhost", "root", "");
    $db_bombeo = mysqli_select_db($con_bombeo,"project_bombeo"); ?>	
	<div class= "center">
		<div class = "register">
        	<form action="register">	
		    	<tr>
                	<br>
                	<table>  
					<caption style="font-size:30px"> REGISTRATION FORM </caption>
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
        	<button class="btn_reg">Register</button>   
			    	</td>
		    	</tr>
		    	</table>
		</form>
    	</div>

  
    	<br><br>
			<form action="login">
				<table>
					<caption style="font-size:30px"> LOGIN </caption>
    				<tr><td>Username <input type="text" name="uname" placeholder="Student ID" required></td></tr>
					<tr><td>Password <input type="password" name="pwd" placeholder="Last Name"  required></td></tr>
    
					<tr>
						<td colspan="2">
							<input type="submit" name="btn_login" value="login">
						</td>
					</tr>
				</table>
			</form>
	
	</div>




</body>
</html>