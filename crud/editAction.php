<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
 <script src="bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Include the database connection file
require_once( 'dbConnection.php' );

if ( isset( $_POST[ 'update' ] ) ) {
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string( $mysqli, $_POST[ 'id' ] );
    $name = mysqli_real_escape_string( $mysqli, $_POST[ 'name' ] );
    $lname = mysqli_real_escape_string( $mysqli, $_POST[ 'lname' ] );
    $email = mysqli_real_escape_string( $mysqli, $_POST[ 'email' ] );
    $age = mysqli_real_escape_string( $mysqli, $_POST[ 'age' ] );
    $gender = mysqli_real_escape_string( $mysqli, $_POST[ 'gender' ] );
    $jdate = mysqli_real_escape_string( $mysqli, $_POST[ 'jdate' ] );
    $role = mysqli_real_escape_string( $mysqli, $_POST[ 'role' ] );

    // Check for empty fields
    if ( empty( $id ) || empty( $name ) || empty( $lname )|| empty( $email )|| empty( $age )|| empty( $gender )|| empty( $jdate )|| empty( $role ) ) {
        if ( empty( $id ) ) {
            echo "<font color='red'>ID field is empty.</font><br/>";
        }

        if ( empty( $name ) ) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }

        if ( empty( $lname ) ) {
            echo "<font color='red'>Last Name field is empty.</font><br/>";
        } 
        if ( empty( $email ) ) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } 
        if ( empty( $age ) ) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        } 
        if ( empty( $gender ) ) {
            echo "<font color='red'>Gender field is empty.</font><br/>";
        } 
        if ( empty( $jdate ) ) {
            echo "<font color='red'>Joining Date field is empty.</font><br/>";
        } 
        if ( empty( $role ) ) {
            echo "<font color='red'>Role field is empty.</font><br/>";
        }
    } else {
        // Update the database table
        $result = mysqli_query( $mysqli, "UPDATE kiran SET `name` = '$name', `lname` = '$lname', `email` = '$email',`age` = '$age',`gender` = '$gender',`jdate` = '$jdate',`role` = '$role' WHERE `id` = $id" );

        // Display success message
        echo "<p  class='alert alert-success fs-4 fw-semibold text-dark text-center'>Data updated successfully!</p>";
        echo "<a href='index.php'class='btn btn-dark text-decoration-none fs-3 fw-semibold ' >View Result</a>";
    }
}