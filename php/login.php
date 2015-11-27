<html>
<head>
<title>Login Panel</title>
</head>

<body>
<?php include 'connect.php' ; ?>
<?php include 'functions.php' ; ?>
<?php include 'title_bar.php' ; ?>

<h3>Login Here : </h3>

<form method='post'>
<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	if(empty($username) or empty($password)){
		echo "<p>Fields empty !</p>";

	}
	else{
		$check_login = mysql_query("SELECT id FROM users WHERE username='$username' AND password='$password'");
		if(mysql_num_rows($check_login) == 1){
			$run = mysql_fetch_array($check_login);
			$user_id = $run['id'];
			$type = $run['type'];
			if($type == 'd'){
				echo "<p> Your account has been deactivated by the site admin</p>";

			}
			else{
				$_SESSION['user_id'] = $user_id;
				header("location: index.php");
			}
		}
		else{
			echo "<p> Username and/or password incorrect !";
		}
	}
}
?>
Username : <br/>
<input type="text" name="username"/>
<br/><br/>
Password : <br/>
<input type="password" name="password"/>
<br/><br/>
<input type="submit" name="submit" value="Login"/>

</form>
</body>

</html>