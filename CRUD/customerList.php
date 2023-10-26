
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>User App</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
          <h2>User App</h2>

          <!-- <a class="navbar-brand" href="#" type="bold" >User App</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-underline">
              <li class="nav-item">
                <a class="nav-link active mb-0 my-4 position-relative top-0 start-50 translate-right mt-3 " type="bold" aria-current="Home" href="http://localhost/crud/Index.php">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="Login" href="http://localhost/crud/Login.php">Login</a>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Customer
                </a>
                <ul class="dropdown-menu"> -->
                  <!-- <li><a class="dropdown-item" href="http://localhost/crud/customerList.php">Customer List</a></li>
                  <li><hr class="dropdown-divider"></li> -->
                  <!-- <li><a class="dropdown-item" href="http://localhost/crud/Form.php">Form</a></li> -->
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container my-4">
  
    <table class="table table-success table-striped">
    <div class="d-grid gap-5 d-md-flex justify-content-md-end">
<a href="Form.php" class="btn btn-primary btn-lg me-md-4 my-4">Register</a>
</div>
  <thead>
    
    <tr>
      <th scope="col">id</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php

//Connect to the Database
        $servername = "localhost";
        $usarname = "root";
        $password = "";
        $database = "customer list";

        $con = mysqli_connect($servername, $usarname, $password, $database);

        $register = "SELECT * FROM `customer list`";
        $register_run = mysqli_query($con, $register); 

        // if(mysqli_num_rows($register_run) > 0) {
        //   while($row = mysqli_fetch_array($register_run)) {
        //     echo $row["First_Name"]."".$row["Last_Name"];
        //   }
        // }
        // else{
        //   echo "No Records Found";
        // }

//Check if the connection is Succeded

        // if($con){
        //   echo "Connection is Successful";
        // }
        // else{
        //   echo "Connection is not Successful";
        // }
$sql = "SELECT * FROM `customer list`";
$result = mysqli_query($con, $sql);

if(!$result){
  echo "Successull";
}
else{

while($row = mysqli_fetch_assoc($result)){
  ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['First_Name']; ?></td>
    <td><?php echo $row['Last_Name']; ?></td>
    <td><?php echo $row['Address']; ?></td>
    <td><?php echo $row['City']; ?></td>
    <td><?php echo $row['State']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['Phone']; ?></td>
    
    <td>
      <a href="edit.php?id=<?php echo $row['id']; ?>" name="Update_btn" class="btn btn-primary btn-sm me-md-1">Edit</a>
    </td>
    <td>
      <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm " name="register_delete_btn" type="submit" >Delete</a>
    </td>
  </tr>
  <?php
}
}

?>
</tbody>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>