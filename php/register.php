<html>
<head>
<title>Register - Admin Panel</title>
</head>

<body>
<?php include 'connect.php' ; ?>
<?php include 'functions.php' ; ?>
<?php include 'title_bar.php' ; ?>

<h3>Register Here : </h3>

<form method='post'>
<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	if(empty($username) or empty($password)){
		echo "<p>Fields empty !</p>";

	}
	else{
		mysql_query("INSERT INTO users VALUES(' ', '$username', '$password', '2', 'a')");
		echo "<p>Successfully Registered</p>";
	}
}
?>
Username : <br/>
<input type="text" name="username"/>
<br/><br/>
Password : <br/>
<input type="password" name="password"/>
<br/><br/>
<input type="submit" name="submit" value="Register"/>

</form>
</body>

</html>