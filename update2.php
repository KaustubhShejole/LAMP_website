<!DOCTYPE html>
<html>

<head>
	<title>Update</title>
	<link rel="stylesheet" href="mystyle.css">
</head>

<body>
	<center>
		<?php
		require_once 'studentdataconfig.php';

		try {
    			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    			echo "Connected to $dbname at $host successfully.";
    			$idname = $_REQUEST['idname'];
    			$name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			
			echo "Your Id:".$idname."Your Name: " ,$name,"\nYour Email: ",$email;
			// Performing insert query execution
			$sql = 'UPDATE student.data SET name="'.$name.'",email="'.$email.'" where id ='.$idname;
			$q = $pdo->query($sql);
			echo "<h3>Data stored in a database successfully.</h3>";
			echo '<button class="button" style="vertical-align:middle"><span><a href="/view.php">View Data</a></span></button>';
			echo '<button class="button" style="vertical-align:middle"><span><a href="/">Index Page</a></span></button>';
			
    		}
    		catch (PDOException $pe) {
    			die("Could not connect to the database $dbname :" . $pe->getMessage());
    		}
		?>
	</center>
</body>

</html>

