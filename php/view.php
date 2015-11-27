<?php
//Set database access credentials
$name = 'mysqldemo';
$user = 'root';
$password = 'ets062109**';
$host = 'localhost';

//Set table name
$tname = 'demoone';

/*Open the connection to our database use the info from the config file.*/
$link = mysql_connect($host, $user, $password);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$sql = "SELECT * FROM users";

$results = mysql_query($sql);
		
if (!$results) {
	die('Invalid query: ' . mysql_error());
}

echo '<h3>Users Table</h3>';

while($result = mysql_fetch_array( $results )){
	echo '<div style="border: 1px solid #e4e4e4; padding: 15px; margin-bottom: 10px;">';
	echo '<p>Name: ' . $result['name'] . '</p>';
	echo '<p>Email: ' . $result['email'] . '</p>';
	echo '<p>Bio: ' . $result['bio'] . '</p>';
	echo '<p>Interest: ' . $result['interest'] . '</p>';
	echo '</div>';
}

$sql = "SELECT * FROM users2 WHERE interest = 'css' ORDER BY name DESC";

$results = mysql_query($sql);
		
if (!$results) {
	die('Invalid query: ' . mysql_error());
}

echo '<h3>Users2 Table</h3>';

while($result = mysql_fetch_array( $results )){
	echo '<div style="border: 1px solid #e4e4e4; padding: 15px; margin-bottom: 10px;">';
	echo '<p>Name: ' . $result['name'] . '</p>';
	echo '<p>Email: ' . $result['email'] . '</p>';
	echo '<p>Bio: ' . $result['bio'] . '</p>';
	echo '<p>Interest: ' . $result['interest'] . '</p>';
	echo '</div>';
}
?>