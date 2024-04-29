<!DOCTYPE html>
<html>

<head>
	<title>View Records</title>
</head>

<body>
	<center>
		<?php
		require_once 'studentdataconfig.php';

		try {
    			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    			echo "Connected to $dbname at $host successfully.";
    			$sql = 'SELECT id,name,email from data';
    			$q = $pdo->query($sql);
    			echo "<table border=2px solid black><td>Id</td><td>Name</td><td>Email</td>";
    			while ($r = $q->fetch()) {
        			echo "<tr><td>",$r['id'],"</td>","<td>", $r['name'],"</td>","<td>",$r['email'],"</td>","</tr>";
    			}
    			echo "</table>";
    		} catch (PDOException $pe) {
    			die("Could not connect to the database $dbname :" . $pe->getMessage());
		}
		?>
	</center>
</body>

</html>
