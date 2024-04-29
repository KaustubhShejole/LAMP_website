<!DOCTYPE html>
<html lang="en">
<head>
	<title>InsertDataIntoStudentDatabase</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
	<center>
		<h1>Storing Form data in Student Database</h1>
		<form action="insert.php" method="post">
		<div class="row">
			<div class="col-25">
      				<label for="name">Name:</label>
    			</div>
    			<div class="col-75">
      				<input type="text" id="name" name="name" placeholder="Your name..">
    			</div>
		</div>
			
		<div class="row">
			<div class="col-25">
      				<label for="email">Email:</label>
    			</div>
    			<div class="col-75">
      				<input type="text" id="email" name="email" placeholder="Your email..">
    			</div>
		</div>

			<input type="submit" value="Submit">
		</form>
	</center>
</div>
</body>
</html>

