<! DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registration Form</title>
	</head>
	<body>
		<?php 
			$username = 'root';
			$password = 'My$e1u@l';
			$servername = $_SERVER['SERVER_NAME'];
			$dbname = 'internproject';
			
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			if($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
			else{
				
			}
		?>
	</body>
</html>
	