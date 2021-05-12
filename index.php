<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="icon" href="img/A.ico">
    
    <title>ATURAJA</title>
    
    </head>
        <body class="inibody">

            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id = "nav">
                <div class="container">
                  <a class="navbar-brand" href="#"><img src="img/A(1).png" alt="aturaja logo" width="30"></a>
                  <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    MENU
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="./img/user.png" alt="" width="20">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarScrollingDropdown">
                          <!-- <li><a class="dropdown-item" href="./register/register.php">SIGN UP</a></li> -->

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

                          <!-- <li><a class="dropdown-item" href="./login/login.php">LOGIN</a></li> -->
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            

              <section>
                <div class="container justify-content-center text-center pt-3">
                  <div class="jumbotron" id="jumbo">
                    <div class="jumbo-content">
                      <h1 id="h1">ATUR AJA</h1>
                      <h5>ATUR KEUANGAN ANDA BERSAMA KAMI</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolor voluptate quod quis optio! Alias dolorem, accusamus enim quibusdam praesentium beatae cumque aspernatur culpa impedit recusandae nulla est debitis hic?</p>
                      <button onclick="document.location='./bukuKas/bukuKas.php?db=mySQL'" id="but">BUKU KAS</button>      
                    </div>        
                  </div>
                </div>
              </section>

              <section>
                <div class="container justify-content-center pt-3">
                  <div class="sharela" id="share">
                    <div class="sharelaisi">
                      <h1 id="h12">SHARE THIS SITE</h1>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, tempore excepturi.</p>
                    </div>
                    <a href="https://facebook.com/"><img src="img/share/facebook.png" alt=""></a>
                    <a href="https://instagram.com/"><img src="img/share/instagram.png" alt=""></a>
                    <a href="https://twitter.com/"><img src="img/share/twitter.png" alt=""></a>
                  </div>
                </div>
              </section>

              <section>
                <div class="container justify-content-center pt-3">
                    <div class="playme" id="play">
                      <h1 id="h13">PLAY WITH ME</h1>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, tempore excepturi.</p>
                      <div class="row text-center">
                        <div class="col-md-3">
                          <p>PICK COLOR</p>
                          <input type="color" id="colorpickerbutton" name="color" onChange="changeColor(this.value)">
                        </div>
                        <div class="col-md-3">
                          <p>SET COLOR 1</p>
                          <input type="button" id="colorset" style="background-color: #808080;" name="color" onclick="changeColor(this.style.backgroundColor)">
                        </div>
                        <div class="col-md-3">
                          <p>SET COLOR 2</p>
                          <input type="button" id="colorset" style="background-color: #cecece;" name="color" onclick="changeColor(this.style.backgroundColor)">
                        </div>
                        <div class="col-md-3">
                          <p>SET RANDOM COLOR</p>
                          <input type="button" id="colorset" onclick="setRandomColor()">
                        </div>
                    </div>
                  </div>
                </div>
              </section>

              <section>
              <footer class="page-footer" id = "footer">
                <div class="footer-copyright text-center py-2">Copyright 2021 © ATURAJA </div>
              </footer>
              </section>
              
              <!-- 
              <section class="jumbotron">
              <div class="container-fluid bg-dark text-light justify-content-center p-5">
                  <div class="container bg-dark p-5">
                      <div>
                      <h1>ATUR KEUANGAN ANDA BERSAMA KAMI</h1>
                      </div>
        
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni, eveniet ipsam sit quibusdam, odio facere saepe alias assumenda voluptates quasi exercitationem? Odit dignissimos voluptatum ratione, repellat sunt voluptates soluta?</p>
                      
                      <div class="bukubutton justify-content-center">
                      <button onclick="document.location='./bukuKas/bukuKas.php'">BUKU KAS</button>
                      </div>
                  </div>
              </div>
              </section>
             
            
            <section class="header">
              <div class="container pt-3" id ="head">
                <div class="row justify-content-center">
                      <h2>ATUR KEUANGAN ANDA BERSAMA KAMI</h2>
                      <div class="bukubutton justify-content-center">
                      <button onclick="document.location='./bukuKas/bukuKas.php'">BUKU KAS</button>
                      </div>
                  </div>
              </div>
            </section>

            
            <section class="about">
                <div class="container pt-3 text-center justify-content-center" id ="abo">
                  <div class="about-text">
                        <h2>ABOUT US</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laudantium officia vel repudiandae provident. Dignissimos voluptate sequi, saepe, dolore, nihil minima sed repudiandae ipsa unde aspernatur quidem. Accusamus, sunt fugit!</p>
                  </div>
                </div>
            </section>
            -->

    <script type="text/JavaScript" src="./js/bootstrap.min.js"></script>
    <script>
      function changeColor(newColor) {
        document.getElementById("nav").style.backgroundColor = newColor;
        document.getElementById("jumbo").style.backgroundColor = newColor;
        document.getElementById("share").style.backgroundColor = newColor;
        document.getElementById("play").style.backgroundColor = newColor;
        document.getElementById("footer").style.backgroundColor = newColor;
        document.getElementById("h1").style.color = getRandomColor();
        document.getElementById("h12").style.color = document.getElementById("h1").style.color;
        document.getElementById("h13").style.color = document.getElementById("h1").style.color;
        document.getElementById("but").style.backgroundColor = document.getElementById("h1").style.color;
        document.getElementById("but").style.color = newColor;
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
        document.getElementById("footer").style.backgroundColor = document.getElementById("nav").style.backgroundColor;
        document.getElementById("jumbo").style.backgroundColor = getRandomColor();
        document.getElementById("share").style.backgroundColor = document.getElementById("jumbo").style.backgroundColor;
        document.getElementById("play").style.backgroundColor = document.getElementById("jumbo").style.backgroundColor;
        document.getElementById("but").style.color = document.getElementById("jumbo").style.backgroundColor;
        document.getElementById("h1").style.color = getRandomColor();
        document.getElementById("h12").style.color = document.getElementById("h1").style.color;
        document.getElementById("h13").style.color = document.getElementById("h1").style.color;
      }
    </script>
    </body>
</html>