<?php
include_once("c_bukuKas.php");

$controller = new c_bukuKas();

if (isset($_POST['add'])) {
    $booksID = $_POST['booksID'];
    $tanggal = $_POST['tanggal'];
    $info = $_POST['info'];
    $db = $_GET['db'];
    $controller->add($db, $booksID, $tanggal, $info);

} else if (isset($_POST['edit'])) {
    $booksID = $_POST['booksID'];
    $tanggal = $_POST['tanggal'];
    $info = $_POST['info'];
    $db = $_GET['db'];
    $controller->edit($db, $booksID, $tanggal, $info);

} else if (isset($_GET['delete'])) {
    $db = $_GET['db'];
    $booksID = $_GET['booksID'];
    $controller->delete($db, $booksID);

} else {
    $db = $_GET['db'];
    $controller->invokeWithDB($db);
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
    <link rel="stylesheet" type="text/css" href="../css/index_style.css">
    <script type="text/JavaScript" src="../js/bootstrap.min.js"></script>

    <title>ATURAJA</title>
    
    </head>
    <body>
    
    <!--NAVIGATION-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id = "nav">
                <div class="container">
                  <a class="navbar-brand" href="../index.php"><img src="../img/A(1).png" alt="aturaja logo" width="30"></a>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      
                      <li class="nav-item dropdown">
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarScrollingDropdown">
                          <?php
                              
                              if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                                  echo '<li><a class="dropdown-item" href="./login/logout.php">LOGOUT</a></li>';
                                  // echo '<br><h3>Hello, ' . $_SESSION['username'] . '</h3>';
                              }
                              else {
                                  echo '<li><a class="dropdown-item" href="./login/login.php">LOG IN</a></li>';
                                  echo '<li><a class="dropdown-item" href="./register/register.php">SIGN UP</a></li>';
                              }
                          ?>
 
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              
    
    <script>
      function changeColor(newColor) {
        document.getElementById("nav").style.backgroundColor = newColor;
        document.getElementById("daftartabelbuku").style.backgroundColor = newColor;
        document.getElementById("daftarbuku").style.backgroundColor = newColor;
        document.getElementById("button").style.backgroundColor = newColor;
        document.getElementById("button1").style.backgroundColor = newColor;
        document.getElementById("button2").style.backgroundColor = newColor;
        document.getElementById("button3").style.backgroundColor = newColor;
        document.getElementById("button4").style.backgroundColor = newColor;
        document.getElementById("add-button").style.backgroundColor = newColor;
        document.getElementById("back-button").style.backgroundColor = newColor;
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
        document.getElementById("daftartabelbuku").style.backgroundColor = getRandomColor();
        document.getElementById("daftarbuku").style.backgroundColor = document.getElementById("daftartabelbuku").style.backgroundColor;
        document.getElementById("button").style.backgroundColor = getRandomColor();
        document.getElementById("button1").style.backgroundColor = document.getElementById("button").style.backgroundColor;
        document.getElementById("button2").style.backgroundColor = document.getElementById("button").style.backgroundColor;
        document.getElementById("button3").style.backgroundColor = document.getElementById("button").style.backgroundColor;
        document.getElementById("button4").style.backgroundColor = document.getElementById("button").style.backgroundColor;
        document.getElementById("add-button").style.backgroundColor = document.getElementById("button").style.backgroundColor;
        document.getElementById("back-button").style.backgroundColor = document.getElementById("button").style.backgroundColor;
      }
    </script>
    </body>
</html>
        