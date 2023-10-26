<?php include("code.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <h2>User App</h2>
          <a class="navbar-brand" href="#" type="bold" ></a>
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
                  <!-- <li><a class="dropdown-item" href="http://localhost/crud/customerList.php">Customer List</a></li> -->
                  
                  <!-- <li><a class="dropdown-item" href="http://localhost/crud/Form.php">Form</a></li> -->
                </ul>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      
      <div class="container my-4 wrapper  my-3 position-relative middle" >
        <h2>Customer Details</h2>
        <?php
      //Connect to the Database
      $servername = "localhost";
      $usarname = "root";
      $password = "";
      $database = "customer list";
      
      $con = mysqli_connect($servername, $usarname, $password, $database);
      
      // if(!$con){
      //   echo "Connection Failed";
      // }
      // else{
      //   echo "Connected";
      // }

      if(isset($_GET['id'])){
        $id = $_GET['id'];
      
      
        $sql = "SELECT `First_Name`, `Last_Name`, `Address`, `City`, `State`, `Email`, `Phone` FROM `customer list` WHERE id = '$id' ";
        $sql_run = mysqli_query($con, $sql);
      
      
      if(!$sql_run){
        echo "failed";

        }
      else{
        $row = mysqli_fetch_assoc($sql_run);
        
        }
      }
        ?>

        <?php

        if(isset( $_POST['Update_btn'])){
          if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
          
          }
          
          $fname = $_POST['first_name'];
          $lname = $_POST['last_name'];
          $address = $_POST['Address'];
          $city = $_POST['City'];
          $state = $_POST['State'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];

          $query = "UPDATE `customer list` SET `First_Name`= '$fname',`Last_Name`= '$lname',`Address`= '$address',`City`= '$city',`State`= '$state',`Email`= '$email',`Phone`= '$phone' WHERE id=$idnew ";   
          $query_run = mysqli_query($con, $query);


          if(!$query_run){
            echo 'Updation Failed';
            
            
          }
          else{
            header('Location: customerList.php?');
          }
  
        }
        
        ?>
    
        <form class="row g-3 row mb-3 my-5 " action="edit.php?id_new=<?php echo $id; ?>" method="POST">
      
            <div class=" input__group col-md-6">
                <label for="first_name">First_name:</label>
                <input type="text" id="firstname" name="first_name" value="<?php echo $row['First_Name']; ?>">
            </div>
            <div class="input__group col-md-6">
                <label for="last_name">Last_name:</label>
                <input type="text" id="lastname" name="last_name" value="<?php echo $row['Last_Name']; ?>">
            </div>
            <div class="input__group col-md-6 ">
                <label for="Address">Address:</label>
                <input type="text" id="Address" name="Address" value="<?php echo $row['Address']; ?>">
            </div>
            <div class="input__group col-md-6">
                <label for="city">City:</label>
                <input type="text" id="city" name="City" value="<?php echo $row['City']; ?>">
            </div>
            <div class="input__group col-md-6">
                <label for="state">State</label>
                <input type="text" id="state" name="State" value="<?php echo $row['State']; ?>">
            </div>
            <div class="input__group col-md-6">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>">
            </div>
            <div class="input__group col-md-6">
                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone" value="<?php echo $row['Phone']; ?>">
            </div>
            <div class="input__group col-md-12">
            
            <button type="submit" name="Update_btn" value="UPDATE" class="btn btn-success ">Update</button></a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>