<?php 

if($_POST){

	$fname=$_POST['fname'];

	$email=$_POST['email'];

include("db.php");

	$q="insert into users values ('$fname','$email')";
	mysql_query($q);
	mysql_close();
	echo "data successfully inserted";
}

 ?>


<html>
<head>
	<title>registration form</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="" method="post">
	<input type="text" name="fname" id="input1" placeholder="Enter First name" class="form-control"/>
	<input type="text" name="email" id="input3" placeholder="Enter Email Address" class="form-control"/>
	<input type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">
	</form>
</body>
</html>