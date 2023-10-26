

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
        <h2>USER APP</h2>
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
      
      <div class=" container my-4  wrapper  my-3 position-relative middle" >
        <h2 class=" my-3">Customer Details</h2>
        
        <form  class="row g-3 row mb-3 my-5" id ="form" onsubmit="callvalue()" action="code.php" method="POST">
      
            <div class=" col-md-6 input__group col-md-6">
                <label for="first_name" class="form-label">First_name:</label>
                <input type="text" id="firstname" name="first_name" required ">
            </div>
            <div class="input__group col-md-6">
                <label for="last_name" class="form-label" >Last_name:</label>
                <input type="text" id="lastname" name="last_name" required>
            </div>
            <div class="input__group col-md-6">
                <label for="Address" class="form-label">Address:</label>
                <input type="text" id="Address" name="Address" required>
            </div>
            <div class="input__group col-md-6">
                <label for="city" class="form-label">City:</label>
                <input type="text" id="city" name="City" required >
            </div>
            <div class="input__group col-md-6">
                <label for="state" class="form-label">State</label>
                <input type="text" id="state" name="State" required >
            </div>
            <div class="input__group col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" required >
            </div>
            <div class="input__group col-md-6">
                <label for="phone" class="form-label">Phone:</label>
                <input type="number" id="phone" name="phone" required >
            </div>
            <div class="input__group col-md-12">
                <button typer="submit" name="register_btn" class="btn btn-primary ">submit</button></a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>