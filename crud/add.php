<html>

<head>
 <title>Add Data</title>
 <link rel="stylesheet" href="bootstrap.min.css">

</head>

<body>
 <h2 class="fs-2 text-center  fw-bold text-danger " style="text-shadow:1px 1px black;">New Member</h2>
 <p>

 </p>

 <form action="addAction.php" method="post" class="form-control border-2  border-danger-subtle rounded-4" style="width:40pc; height:40pc;margin:0 auto;  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
   rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
   rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
  <!--name=" add" -->
  <table class=" table table table-light rounded-4  ">
   <tr>
    <td class=" fs-4 fw-semibold">ID</td>
    <td><input type="text" name="id" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">First Name</td>
    <td><input type="text" name="name" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">Last Name</td>
    <td><input type="text" name="lname" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">Email</td>
    <td><input type="text" name="email" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">Age</td>
    <td><input type="text" name="age" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">Gender</td>
    <td><input type="text" name="gender" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">Joining Date</td>
    <td><input type="text" name="jdate" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>
   <tr>
    <td class="fs-4 fw-semibold">Role</td>
    <td><input type="text" name="role" class="form-control form-control-lg border-3 border-dark-subtle"></td>
   </tr>

   <tr>
    <td><a href="index.php" class="text-decoration-none btn btn-info btn-lg fs-3 fw-semibold text-light">Go Back
     </a></td>
    <td><input type="submit" name="submit" value="Add" class="btn btn-success  btn-lg fs-3 fw-semibold
      btn-block " role=" button" style="width:14pc;">
    </td>
   </tr>
  </table>
 </form>
 <script src=" bootstrap.bundle.min.js"></script>

</body>

</html>