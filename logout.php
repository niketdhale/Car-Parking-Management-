<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		body{
			text-align: center;
			background-image: url("images/12.jpeg");
			background-size:cover;
		}
	</style>
</head>
<body>
	<?php session_start(); 
			echo $_SESSION['email'];
			echo $_SESSION['place'];
	?>
		<h1>Thank You For Using Our Servies</h1>

		<h2>You Have Sucessfully Logged Out<?php close();

		echo $_SESSION['place']; ?></h2>
		<h2>To visit Home <a href="index.html">Click Here</a></h2>
		<h2>Sign In Again <a href="login.html">Click Here</a></h2>
		<h2>Sign Up <a href="signup.html">Click Here</a></h2>
</body>
</html>

<?php
	function close(){
	unset($_SESSION['email']);
	#session_destroy();
	}
?>