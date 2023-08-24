<!DOCTYPE html>
<html>

<head>
	
	<title>Login Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "user_info");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO newlogin VALUES ('$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>LOGIN SUCESSFULL.</h3>";
			// echo "<h3>data stored in a database successfully."
			// 	. " Please browse your localhost php my admin"
			// 	. " to view the updated data</h3>";

			//echo nl2br("\n$user_name \n $pass_word");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
