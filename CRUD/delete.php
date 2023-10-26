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
if(isset($_GET['id'])){
    $id = $_GET['id'];
  
    $reg_query = "DELETE FROM `customer list` WHERE id = $id ";
    $reg_query_run = mysqli_query($con, $reg_query);
  
    if(!$reg_query_run){
        die('QUERY FAILED'.mysqli_error($con));
    }
    else{
      header('Location: customerList.php?delete_msg=Record has been deleted Successfully');
    }
  }

?>