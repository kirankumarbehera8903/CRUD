<?php
// Include the database connection file
require_once( 'dbConnection.php' );

// Get id from URL parameter
$id = $_GET[ 'id' ];

// Select data associated with this particular id
$result = mysqli_query( $mysqli, "SELECT * FROM kiran WHERE id = $id" );

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc( $result );

$id = $resultData[ 'id' ];
$name = $resultData[ 'name' ];
$lname = $resultData[ 'lname' ];
$email = $resultData[ 'email' ];
$age = $resultData[ 'age' ];
$gender = $resultData[ 'gender' ];
$jdate = $resultData[ 'jdate' ];
$role = $resultData[ 'role' ];

?>
<html>

<head>
 <title>Update Data</title>
 <link rel='stylesheet' href='bootstrap.min.css'>
</head>

<body>
 <h2 class="fs-2 fw-bold "
  style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align:center; position:absolute; margin-top:30px;margin-left:42pc;">
  Update Data</h2>
 <p>
  <a href='index.php' class="btn btn-outline-dark fs-3 fw-semibold">Go Back</a>
 </p>

 <form name='edit' method='post' action='editAction.php'
  class='form-control container-lg table table-bordered border-2 border-dark rounded-4'
  style='width:40pc;   box-shadow:20px 20px 50px 5px rgba(0, 0, 0, 0.3);'>
  <table border='0' class='table fs-4 fw-semibold' style='font-family:monospace;'>
   <tr>
    <td>First Name</td>
    <td><input type='text' name='name' value="<?php echo $name; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fw-semibold fs-4'></td>
   </tr>
   <tr>
    <td>Last Name</td>
    <td><input type='text' name='lname' value="<?php echo $lname; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fs-4 fw-semibold'></td>
   </tr>
   <tr>
    <td>Email</td>
    <td><input type='text' name='email' value="<?php echo $email; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fs-4 fw-semibold'></td>
   </tr>
   <tr>
    <td>Age</td>
    <td><input type='text' name='age' value="<?php echo $age; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fs-4 fw-semibold'></td>
   </tr>
   <tr>
    <td>Gender</td>
    <td><input type='text' name='gender' value="<?php echo $gender; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fs-4 fw-semibold'></td>
   </tr>
   <tr>
    <td>Joining Date</td>
    <td><input type='text' name='jdate' value="<?php echo $jdate; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fs-4 fw-semibold'></td>
   </tr>
   <tr>
    <td>Role</td>
    <td><input type='text' name='role' value="<?php echo $role; ?>"
      class='form-control table-bordered border-3 border-dark-subtle fw-semibold fs-4'></td>
   </tr>
   <tr>
    <td><input type='hidden' name='id' value=<?php echo $id;
?>></td>
    <td><input type='submit' name='update' value='Update' class='btn btn-warning btn-lg fs-3 fw-semibold'>
    </td>
   </tr>
  </table>
 </form>

 <script src='bootstrap.bundle.min.js'>

 </script>
</body>

</html>