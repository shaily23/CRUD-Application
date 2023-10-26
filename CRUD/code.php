
<?php
//Connect to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer list";

$con = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['register_btn'])){
  
  $fname = $_POST['first_name'];
  $lname = $_POST["last_name"];
  $address = $_POST["Address"];
  $city = $_POST["City"];
  $state = $_POST["State"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  


$query = "INSERT INTO `customer list`(First_Name, Last_Name, Address, City, State, Email, Phone) VALUES( '$fname', '$lname', '$address', '$city', '$state', '$email', $phone)";   
$query_run = mysqli_query($con, $query);


if($query_run){
  echo "Registered Successfully";
  header("Location: customerList.php");
}
else{
  echo "Registration Failed";
}
}
?>

<!-- <?php
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $reg_query = "DELETE FROM 'customer list' WHERE 'id' = $id ";
  $reg_query_run = mysqli_query($con, $reg_query);

  if($reg_query_run){
    echo "Deleted";
    header("Location: customerList.php");
  }
  else{
    echo "Not Deleted";
    header("Location: customerList.php");
  }
}

?> -->