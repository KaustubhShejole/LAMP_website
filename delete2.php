<!DOCTYPE html>
<html>

<head>
	<title>Delete</title>
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
			
			echo "Your Id:".$idname."Your Name: " ,$name,"\nYour Email: ",$email,'is now deleted';
			// Performing insert query execution
			// here our table name is college
			$sql = 'DELETE from student.data where id ='.$idname;
			echo $sql;
			$q = $pdo->query($sql);
			echo '<div>';
			echo '<button class="button" style="vertical-align:middle"><span><a href="/view.php">View Data</a></span></button>';
			echo '<button class="button" style="vertical-align:middle"><span><a href="/">Index Page</a></span></button>';
			echo '</div>';
			
    		}
    		catch (PDOException $pe) {
    			die("Could not connect to the database $dbname :" . $pe->getMessage());
    		}
		?>
	</center>
</body>

</html>

