<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style4.css">

    <title>ATURAJA</title>
    
    </head>
        <body class="inibody">

            <!--NAVIGATION-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id = "nav">
                <div class="container">
                  <a class="navbar-brand" href="../index.php"><img src="../img/A(1).png" alt="aturaja logo" width="30"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    MENU
                  </button>
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
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" style="background-color: #735456;" name="color" onclick="changeColor(this.style.backgroundColor)"></a></li>
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" style="background-color: #6f7ba2;" name="color" onclick="changeColor(this.style.backgroundColor)"></a></li>
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" style="background-color: #e8d8d6;" name="color" onclick="changeColor(this.style.backgroundColor)"></a></li>
                          <li class="toptext text-center">Random Color</li>
                          <li><a class="dropdown-item" href="#"><input type="button" id="colorset" onclick="setRandomColor()"></button></a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="../img/user.png" alt="" width="20">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarScrollingDropdown">
                        <!-- <li><a class="dropdown-item" href="./register/register.php">SIGN UP</a></li> -->

                        <?php
                              if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                                  echo '<li><a class="dropdown-item" href="../login/logout.php">LOGOUT</a></li>';
                                  // echo '<br><h3>Hello, ' . $_SESSION['username'] . '</h3>';
                              }
                              else {
                                  echo '<li><a class="dropdown-item" href="../login/login.php">LOG IN</a></li>';
                                  echo '<li><a class="dropdown-item" href="../register/register.php">SIGN UP</a></li>';
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
                <div class="tambahdata">
                    <div class="addbook">
                        <div class="container pt-3 text-center justify-content-center" id="test1">
                            <h3>EDIT TRANSACTION</h3>
                        </div>
                        </div>

                <div class="formpart">
                    <div class="container pt-3 text-center justify-content-center" id="form">
                    <div class="form-label-group">
                        <form action="dataTransaksi.php?db=<?php echo $_GET['db']; ?>&edit=1&booksID=<?php echo $_GET['booksID']; ?>" method="post">
                            <h5>ID TRANSAKSI: <?php echo $_GET['id']; ?></h5>
                            <br>
                            <h5>JUMLAH TRANSAKSI:</h5>
                            <input type="text" id="jumlahtransaksi" class="form-control text-center" placeholder="transact" name="jumlah" value="<?php echo $_GET['jumlah'] ?>" required>
                            <p id="note">Beri tanda "-" untuk menandakan sebagai pengeluaran.</p>
                            <br>
                            <h5>KETERANGAN TRANSAKSI:</h5>
                            <input type="text" id="informasi" class="form-control text-center" placeholder="information" name="infoTransaksi" value="<?php echo $_GET['infoTransaksi'] ?>" required>
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                            <input type="hidden" name="edit" value=1>
                            <br>
                            <button class="addbutton" id="button">SAVE EDIT</button>
                            <button onclick="location.href='dataTransaksi.php?db=<?php echo $_GET['db']; ?>&booksID=<?php echo $_GET['booksID']; ?>'" class="addbutton" id="button1">BACK</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

        <script type="text/JavaScript" src="../js/bootstrap.min.js"></script>
        <script>
        function changeColor(newColor) {
            document.getElementById("nav").style.backgroundColor = newColor;
            document.getElementById("test1").style.backgroundColor = newColor;
            document.getElementById("form").style.backgroundColor = newColor;
            document.getElementById("button").style.backgroundColor = newColor;
            document.getElementById("button1").style.backgroundColor = newColor;
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
            document.getElementById("test1").style.backgroundColor = getRandomColor();
            document.getElementById("form").style.backgroundColor = document.getElementById("test1").style.backgroundColor;
            document.getElementById("button").style.backgroundColor = getRandomColor();
            document.getElementById("button1").style.backgroundColor = document.getElementById("button").style.backgroundColor;
        }
        </script>

</body>
</html>