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
			$password = '';
			$hostname = $_SERVER['SERVER_NAME'];
			$dbname = 'internproject';
			
			$conn = mysqli_connect($hostname, $username, $password, $dbname);
			
			if($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
			
		?>
		<form method = 'post' action = '<?php echo $_SERVER["PHP_SELF"]; ?>'>
			<legend style = 'font-size: 3vw;'>Registration Form</legend>
			<p style = 'font-size: 2vw;'>Applicant Details</p>
			
			<label for='name'>Name </label><br>
				<input type='text' name='fname' placeholder='First'/>
				<input type='text' name='lname' placeholder='Last'/><br><br>
			
			<label for='phone'>Phone</label><br>
				<input type='number' name='phone' placeholder='+91'/><br><br>
			
			<label for='email'>Email</label><br>
				<input type='email' name='email' placeholder='example@example.com'/><br><br>
			
			<label for='address'>Address Details</label><br>
				<input type='text' name='address1' placeholder='Address line 1'/>
				<input type='text' name='address2' placeholder='Address line 2'/><br><br>
				<input type='text' name='street' placeholder='Street'/>
				<input type='text' name='city' placeholder='City'/><br><br>
			
				<select id='country' name='country' placeholder='country'>
					<option value='india'>India</option>
					<option value='china'>China</option>
					<option value='pakistan'>Pakistan</option>
				</select><br><br>
				
			<label for='gender'>Gender</label><br>
				<input type='radio' name='gender' value='male'>Male
				<input type='radio' name='gender' value='female'>Female
				<input type='radio' name='gender' value='other'>Other
			<br><br>
			<input type='submit' value='Submit'/>
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$street = $_POST['street'];
			$city = $_POST['city'];
			$country = $_POST['country'];
			$gender = $_POST['gender'];
			
			if(empty($fname)){
				echo 'enter details';
			}
			else{
		
				$sql = "INSERT INTO `reg_form` (`SI.no`, `fname`, `lname`, `phone`, `email`, `address1`, `address2`, `street`, `city`, `country`, `gender`) VALUES (NULL, '$fname', '$lname', '$phone', '$email', '$address1', '$address2', '$street', '$city', '$country', '$gender');";
				
				$result = mysqli_query($conn, $sql);
				
				if($result){
					?><script>alert('Form submitted successfully')</script><?php
				}
				else{
					?><p style='color: red;'>Failed to submit form<p><?php
				}
			}
		}
		?>
	</body>
</html>
	