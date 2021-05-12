<?php
  if (isset($_GET['error'])) {
    echo '<script>alert("Your username has been taken")</script>';
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
        <!--NAVIGATION-->
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
        
        <!--SIGNUP-->
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5" id="signup">
                <div class="card-body">
                  <h5 class="card-title text-center">SIGN UP</h5>
                  <form class="form-signin" id="loginform" action="register_admin.php" method="post">

                      <div class="form-label-group">
                        <input type="text" id="username" class="form-control text-center" placeholder="UserName" name="username" required>
                        <label for="username">Username</label>
                      </div>

                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control text-center" placeholder="Password" name="password" required>
                        <label for="inputPassword">Password</label>
                      </div>

                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control text-center" placeholder="Confirm Password" name="confirm_password" required>
                        <label for="inputPassword">Confirm Password</label>
                      </div>

                      <div class="form-label-group">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                            </div>
                      </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="button">SIGN UP</button>

                    <div class="form-label-group">
                    <hr class="my-4">
                    <p>Already have an account? <a href="../login/login.php" class="text-primary m-l-5"><b>Log In</b></a></p>
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
          document.getElementById("signup").style.backgroundColor = newColor;
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
          document.getElementById("signup").style.backgroundColor = getRandomColor();
          document.getElementById("button").style.backgroundColor = getRandomColor();
        }
      </script>
  
    </body>
</html>


  