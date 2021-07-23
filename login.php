<?php include ('server.php') ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Login |</title>

  </head>
  <body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./img/img1.png" class="img-fluid"  alt="image">
            </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-3">Sign In</h3>
              
          <form action="login.php" method="post">
              <div class="form-group mb-3">
                  <label for="username">Username</label>
                  <input type="text" class="form-control " placeholder="Enter your username" name="username">
              </div>
              <div class="form-group mb-3">
                <label for="passsword">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

        	  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
      </select>
      
            <div class="form-group form-check">
                <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label" for="checkbox">Remember Me</label>
            </div>
            <button class="btn btn-class mt-5" name="loginbtn">Login</button>
          </form>
          <div class="text-left mt-4">New user? Register now <a href="./signup.php"> Signup here</a></div>

         </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>