<?php  

if (isset($_POST["signup"])) {
	if ($_POST['pwd'] == $_POST['re-pwd']) {

		#sql server data
		$db_host = "localhost";
		$db_user = "";# db username
		$db_pwd = "";# db password
		$db_name = "";# db name

		#connect to database
		$db = mysqli_connect($db_host,$db_user,$db_pwd,$db_name);

		#collect the info
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$email = $_POST['email'];
		$pwd = md5($_POST['pwd']);

		# sql stuff
		$sql = "INSERT INTO `users` (`id`, `firstname`, `last_name`, `email`, `password`) VALUES (NULL, '$firstname','$lastname','$email','$pwd')";

		#query the data
		$check = mysqli_query($db,$sql);
		if ($check) {
		 	echo "Good";
		 }else{
		 	echo "Bad";
		 }

	}
	
}

?>

<!--username
pwd
name
lastname
birtday
phone num
CREATE TABLE `Learn`.`test` ( `id` INT NOT NULL AUTO_INCREMENT , `kk` INT NOT NULL , `mm` INT NOT NULL , `ww` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
+++++++++++++++-->
<!DOCTYPE html>
<html>
<head>
	<title>Join Us NOW</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kill">
		<h2>Join us now</h2>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			<div>
				<input type="text" name="first_name" placeholder="First name">
				<input type="text" name="last_name" placeholder="Last name">
			</div>
			<div>
				<input type="email" name="email" placeholder="Email">
			</div>
			<div>
				<input type="password" name="pwd" placeholder="Password">
			</div>
			<div>
				<input type="password" name="re-pwd" placeholder="Re-type password">
			</div>
			<div>
				<input type="submit" name="signup" value="Join Us">
			</div>
		</form>
	</div>
</body>
</html>