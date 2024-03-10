<html>

<head>
 <title>Add Data</title>
 <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
 <?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$jdate = mysqli_real_escape_string($mysqli, $_POST['jdate']);
	$role = mysqli_real_escape_string($mysqli, $_POST['role']);
		
	// Check for empty fields
	if (empty($id) || empty($name) || empty($lname)|| empty($email)|| empty($age)|| empty($gender) || empty($jdate)|| empty($role)) {
		if (empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
		
		if (empty($name)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		
		if (empty($lname)) {
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
			if (empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	
			if (empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}	
			if (empty($jdate)) {
			echo "<font color='red'>Joining Date field is empty.</font><br/>";
		}	
			if (empty($role)) {
			echo "<font color='red'>Role field is empty.</font><br/>";
		}	
	
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO kiran (`id`, `name`, `lname`,`email`,`age`,`gender`,`jdate`,`role`) VALUES ('$id', '$name', '$lname','$email','$age','$gender','$jdate','$role')");
		
		// Display success message
		echo "<p class='alert alert-success fs-5 fw-semibold active text-lg-center text-success 'role='alert'>Member added successfully!</p>";
		echo "<a href='index.php' class='btn btn-primary fs-3 fw-semibold text-bg-warning'>View Result</a>";
	}
}
?>

 <script src="bootstrap.bundle.min.js"></script>
</body>

</html>