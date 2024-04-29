<!DOCTYPE html>
<html>

<head>
	<title>Update</title>
	<link rel="stylesheet" href="index.css">
</head>

<body>
<div class="container">
	<center>
		<?php
		require_once 'studentdataconfig.php';

		try {
    			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    			//echo "Connected to $dbname at $host successfully.";
    			$idname = $_REQUEST['name'];
			//$email = $_REQUEST['email'];
			
			
			
			$sql = 'select * from student.data where id='.$idname;
			$q = $pdo->query($sql);
			$r = $q->fetch();
			$name = $r['name'];
			$email= $r['email'];/*
			echo $name," ",$email;
			echo "hello";*/
			?>
			<h1>Updating Form data in Student Database</h1>
		<form action="update2.php" method="post">
		<div class="row">
			<div class="col-25">
      				<label for="idname">Id:</label>
    			</div>
    			<div class="col-75">
    				<?php
    				echo '<input type="number" id="idname" name="idname" value='.$idname.' readonly="readonly">';
    				?>
    			</div>
		</div>
		<div class="row">
			<div class="col-25">
      				<label for="name">Name:</label>
    			</div>
    			<div class="col-75">
      				<?php
      				echo '<input type="text" id="name" name="name" value='.$name.">";
      				?>
    			</div>
		</div>
			
		<div class="row">
			<div class="col-25">
      				<label for="email">Email:</label>
    			</div>
    			<div class="col-75">
      				<?php
      				echo '<input type="text" id="email" name="email" value='.$email.">";
      				?>
    			</div>
		</div>

			<input type="submit" value="Submit">
		</form>
			
			
			
			<?php
			}
    		catch (PDOException $pe) {
    			die("Could not connect to the database $dbname :" . $pe->getMessage());
    		}
    		?>
	</center>
	</div>
</body>

</html>
