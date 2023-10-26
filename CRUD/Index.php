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
      
    <div class = "container my-4">
    <form action="http://localhost/crud/customerList.php" method="post">
    <h2>Login</h2>
            <div class="mb-2">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp">
              <div id="email" name="email" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-2">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="pass">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            <!-- <div class="mb-2 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <div>
               <button type="submit" href="http://localhost/crud/customerList.php" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>