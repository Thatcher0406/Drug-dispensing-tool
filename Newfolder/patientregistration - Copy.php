<!DOCTYPE html>
<html>
	<head>
		<title>Patient Information Page</title>
		<meta charset="UTF=8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<form action="connection.php"method="POST">
			<label for="firstname">First Name:</label><br>
			<input type="text"id="firstname"name="firstname"><br>

			<label for="lastname">Last Name:</label><br>
			<input type="text"id="lastname"name="lastname"><br>

			<label for="emailaddress">Email Address:</label><br>
			<input type="email"id="emailaddress"name="emailaddress"size="50"><br>

			<label for="Password">Password:</label><br>
			<input type="text"id="Password"name="Password"><br>

			<label for="Age">Age:</label><br>
			<input type="number"id="Age"name="Age" size="10"><br>

			<label for="Gender">Gender:<br>Male</label>
			<input type="radio"id="male"name="Gender"value="Male"><br>

			<label for="Gender">Female</label>
			<input type="radio"id="female"name="Gender"value="Female"><br>

			<label for="Gender">Prefer not to say</label>
			<input type="radio"id="prefernottosay"name="Gender"value="Non-Disclosed"><br>


			<label for="Illness">Illness:</label><br>
			<input type="text"id="Illness"name="Illness"><br>

			<label for="SSN">Social Security Number(SSN):</label><br>
			<input type="number"id="SSN"name="SSN"><br>

			<label for="primary_physician">Primary Physician:</label><br>
			<input type="text"id="primary_physician"name="primary_physician"><br>
			<label for="phone">Phone Number:</label><br>
			<input type="number"id="phone"name="phone"><br>
			<label for="address">Address:</label><br>
			<input type="text"id="address"name="address"><br>
			<label for="address">Extra Information:</label><br>
			<input type="text"id="extrainformation"name="extrainformation"><br>
			<input type="reset">
			<input type="submit" value = "Submit">
		</form>
	</body>
</html>

