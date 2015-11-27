<html lang="en">
<head>
  <title>List candidates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <centre><ul class="nav nav-pills">
  <li role="presentation"><a href="select.php">Age Group</a></li>
  <li role="presentation"><a href="category.php">Category</a></li>
</ul></centre>
</head>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$sql = "SELECT id, name, email, contact, age, category FROM candidates";
$result = $conn->query($sql);

?>

<body>

<div class="container">
  <h2>List of Candidates</h2>          
  <hr><br><br>


<?php

$categ = array(
	1 => 'Rink I',
	2 => 'Rink II',
	3 => 'Rink III',
	4 => 'Road I',
	5 => 'Rink IV',
	6 => 'Rink V',
	7 => 'Rink VI',
	8 => 'Relay',
	9 => 'P.T.P.',
	10 => 'Elem.',
	11 => 'Road II',
	12 => 'Elem.',
	13 => 'Marathon'
	 );
$agegroup = array(
	8 => '8 to 10',
	10 => '10 to 12',
	12 => '12 to 16',
	16 => 'Above 16'
	);
$agedisplay = array(
	1 => '8 to 10',
	2 => '10 to 12',
	3 => '12 to 16',
	4 => 'Above 16'	
	);
if ($result->num_rows > 0) {
$temp = 1;
while($temp < 5){

	echo "<table class=\"table table-striped\"><thead><tr><th>ID</th><th>Name</th><th>Age Group</th><th>Category</th><th>Email</th><th>contact</th></tr></thead>";
	$sql = "SELECT id, name, email, contact, age, category FROM candidates";

	$result = $conn->query($sql);

	echo "<h4 style = \"color:blue\">Age Group :".$agedisplay[$temp]."</h4>";
	echo "<hr>";

    while($row = $result->fetch_assoc()) {
    	switch ($row["age"]) {
    		case '8':
    			$age = 1;

    			break;
  
      		case '10':
    			$age = 2;
    			break;

      		case '12':
    			$age = 3;
    			break;

    		case '16':
    			$age = 4;
    			break;

    		default:
    			$age = 1;
    			break;
    	}
        if($temp == $age){
    			echo "<tbody><tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$agegroup[$row["age"]]."</td><td> ".$categ[$row["category"]]."</td><td> ".$row["email"]."</td><td> ".$row["contact"]."</td></tr></tbody>";
    		}
    	
    }
    $temp = $temp + 1;
   echo "</table>";
   echo "<br><hr>";

}
    
} else {
    echo "0 results";
}
$conn->close();
?>

</div>
</body>
</html>