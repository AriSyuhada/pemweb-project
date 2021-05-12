<?php
  if (isset($_GET['error'])) {
    echo '<script>alert("Incorrect login credentials!")</script>';
  }
  else if(isset($_GET['register'])) {
    echo '<script>alert("You have been registered, please login to continue.")</script>';
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link rel="icon" href="../img/A.ico">

    <title>ATURAJA</title>

    <body class="inibody">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id = "nav">
            <div class="container">
              <a class="navbar-brand" href="../index.php"><img src="../img/A(1).png" alt="aturaja logo" width="30"></a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      THEMES
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                          <li class="toptext text-center">Pick Color</li>
                          <li><a class="dropdown-item" href="#"><input type="color" id="colorpickerbutton" name="color" onChange="changeColor(this.value)"></a></li>
                          <li class="toptext text-center">Set Color</li>
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" style="background-color: #808080;" name="color" onclick="changeColor(this.style.backgroundColor)"></a></li>
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" style="background-color: #cecece;" name="color" onclick="changeColor(this.style.backgroundColor)"></a></li>
                          <li class="toptext text-center">Random Color</li>
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" onclick="setRandomColor()"></button></a></li>
                        </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5" id="login">
                <div class="card-body">
                  <h5 class="card-title text-center">LOG IN</h5>
                  <form class="form-signin" id="loginform" action="login_admin.php" method="post">
                    <div class="form-label-group">
                      <input type="text" id="username" class="form-control text-center" placeholder="Username" name="username" required>
                      <label for="username">Username</label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control text-center" placeholder="Password" name="password" required>
                      <label for="inputPassword">Password</label>
                    </div>
      
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="button">LOG IN</button>

                    <div class="form-label-group">
                    <hr class="my-4">
                    <p>Don't have an account? <a href="../register/register.php" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </body>

      <script type="text/JavaScript" src="../js/bootstrap.min.js"></script>
      <script>
        function changeColor(newColor) {
          document.getElementById("nav").style.backgroundColor = newColor;
          document.getElementById("login").style.backgroundColor = newColor;
        }
        
        function getRandomColor() {
          var letters = '0123456789ABCDEF';
          var color = '#';
          for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
          }
          return color;
        }
  
        function setRandomColor() {
          document.getElementById("nav").style.backgroundColor = getRandomColor();
          document.getElementById("login").style.backgroundColor = getRandomColor();
          document.getElementById("button").style.backgroundColor = getRandomColor();
        }
      </script>
  
    </body>
</html>


  