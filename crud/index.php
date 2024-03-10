<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM kiran ORDER BY id DESC");
?>

<html>

<head>
 <title>Homepage</title>
 <link rel="stylesheet" href="bootstrap.min.css">
 <style>
 table {
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
   rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
   rgba(0, 0, 0, 0.2) 0px -3px 0px inset;

 }
 </style>
</head>

<body>
 <h2
  style="text-align:center; color:blue; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-shadow:2px 1px black;">
  Employees</h2>
 <!--  Table declare-->
 <table class=" table table table-bordered table-striped border border-4 border-primary-subtle container-fluid"
  style="width:90vw; margin:0 auto;">
  <!-- <tr bgcolor='#DDDDDD'>-->
  <tr class="table-primary fw-semibold fs-3 ">
   <td>
    <center>ID</center>
   <td>
    <center>First_Name</center>
   </td>
   <td>
    <center>Last_Name</center>
   </td>
   <td>
    <center>Email</center>
   </td>
   <td>
    <center>Age</center>
   </td>
   <td>
    <center>Gender</center>
   </td>
   <td>
    <center>Joining Date</center>
   </td>
   <td>
    <center>Role</center>
   </td>
   <td>
    <center>Action</center>
   </td>

   </td>
  </tr>
  <?php 
		
		
		// Fetch the next row of a result set as an associative array
    echo "<button class='btn btn-primary rounded-3 '><a href=\"add.php\"
    class='list-group-item list-group-item-action active fw-semibold'>Add Employee</a></button>";
 while ($res=mysqli_fetch_array($result)) {
  echo "<tr class='table-striped  fw-semibold fs-5 ' style='text-align:center;'>";
	 echo "<td>".$res['id']."</td>";
  echo "<td>".$res['name']."</td>";
  echo "<td>".$res['lname']."</td>";
  echo "<td>".$res['email']."</td>";
  echo "<td>".$res['age']."</td>";
  echo "<td>".$res['gender']."</td>";
  echo "<td>".$res['jdate']."</td>";
  echo "<td>".$res['role']."</td>";
  
  echo "<td><button class='btn btn-danger rounded-3 text-light'><a href=\"edit.php?id=$res[id]\" class=' fw-semibold list-group-item list-group-item-action active fs-5'>Update</a></button> 
<button class='btn btn-info rounded-3'><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class=' fw-semibold list-group-item list-group-item-action active fs-5 '>Delete</a></button></td>";
 }

 ?>
 </table>
 <script src="bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- Kiran Kumar Behera -->