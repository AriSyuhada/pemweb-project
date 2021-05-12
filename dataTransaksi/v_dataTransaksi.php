<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="icon" href="../img/A.ico">

    <title>ATURAJA</title>

  </head>
  <body class="inibody">
    <section class="daftarbukukas">
      <div>
        <div class="container pt-3 text-center justify-content-center" id="daftardata">
          <h2 >DAFTAR TRANSAKSI HARIAN</h2>        
        </div>

        <section>
              <div class="container pt-3 text-center justify-content-center">
                <div class="dropdown">
                <button class="dropbtn" id="button">THEMES</button>
                    <div class="dropdown-content">
                      <a href="#"><input type="color" id="colorpickerbutton" name="color" onChange="changeColor(this.value)"></a>
                      <a href="#"><input type="button" id="colorset" style="background-color: #808080;" name="color" onclick="changeColor(this.style.backgroundColor)"></a>
                      <a href="#"><input type="button" id="colorset" style="background-color: #cecece;" name="color" onclick="changeColor(this.style.backgroundColor)"></a>
                      <a href="#"><input type="button" id="colorset" onclick="setRandomColor()"></a>
                    </div>
                </div>
              </div>
            </section>

        <div class="container pt-3 text-center justify-content-center" id='daftartable'>
          <table class="daftar">
            <tbody>
              <tr>
                <td><b>ID TRANSAKSI</td>
                <td><b>JUMLAH TRANSAKSI (Rp.)</td>
                <td><b>INFO TRANSAKSI</td>
                <td><b>KELOLA DATA</td>
              </tr>
            </tbody>
          <?php

          $total = 0;

          if ($_GET['db']=='mongoDB') {
            foreach ($data as $doc) {
              $total += $doc->jumlahTransaksi;
              echo "<tr>",
              "<td>$doc->transactID</td>",
              "<td>$doc->jumlahTransaksi</td>",
              "<td>$doc->infoTransaksi</td>",
              "<td><button class='addbutton' onclick='document.location=\"edit_dataTransaksi.php?db=mongoDB&id=".$doc->transactID."&jumlah=".$doc->jumlahTransaksi."&infoTransaksi=".$doc->infoTransaksi."&booksID=".$doc->booksID."\"' id='button1'>EDIT</button>",
              "<button class='addbutton' onclick='document.location=\"delete_dataTransaksi.php?db=mongoDB&id=".$doc->transactID."&booksID=".$doc->booksID."\"' id='button2'>DELETE</button></td>",
              "</td>",
              "</tr>";
            }
            echo "</table>";
            echo "<br>";
          }
          else if ($_GET['db']=='mySQL') {
            foreach ($data[0] as $data) {
              $total += $data['jumlahTransaksi'];
              echo "<tr>",
              "<td>$data[transactID]</td>",
              "<td>$data[jumlahTransaksi]</td>",
              "<td>$data[infoTransaksi]</td>",
              "<td><button class='addbutton' onclick='document.location=\"edit_dataTransaksi.php?db=mySQL&id=".$data['transactID']."&jumlah=".$data['jumlahTransaksi']."&infoTransaksi=".$data['infoTransaksi']."&booksID=".$data['booksID']."\"' id='button1'>EDIT</button>",
              "<button class='addbutton' onclick='document.location=\"delete_dataTransaksi.php?db=mySQL&id=".$data['transactID']."&booksID=".$data['booksID']."\"' id='button2'>DELETE</button></td>",
              "</td>",
              "</tr>";
            }
            echo "</table>";
            echo "<br>";
          }
          // echo "Total transaksi yang anda lakukan hari ini adalah Rp. " . $total;
          ?>
        </div>
          <div class="container pt-3 justify-content-center" id="kalkulasi">
              <p>Total transaksi yang anda lakukan hari ini adalah <b> Rp. <?php echo $total ?> </b></p>
          </div>
      </div>
    </section>

    <section>
          <div class="container justify-content-center pt-3">
            <div class="row text-center">
              <div class="col-md-6 text-center">
                <div class="buttonsatu">
                  <form method="post" action="add_dataTransaksi.php?db=<?php echo $_GET['db']?>&booksID=<?php echo $booksID?>">
                    <input type="submit" name="add-button" id="add-button" value="ADD DATA"/>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="buttondua">
                  <form method="post" action="../bukukas/bukukas.php?db=<?php echo $_GET['db']?>">
                    <input type="submit" name="back-button" id="back-button" value="BACK">
                  </form>
                  </div>
              </div>
            </div>              
          </div>
        </section>

            <section>
              <style>
                table, td, th, tr {
                  border-collapse: collapse;
                  border: none;
                  margin-bottom: 100px;
                  table-layout: auto;
                }
                table {
                  column-rule: 4px double;
                }
                #daftardata {
                  margin-top: 100px;
                  background-color: white;
                  border-radius: 15px;
                }
                #daftartable{
                  margin-top: 20px;
                  background-color: white;
                  border-radius: 15px;
                  color: black;
                  margin-bottom: 20px;
                }
                #kalkulasi{
                  margin-top: 20px;
                  background-color: white;
                  border-radius: 15px;
                  color: black;
                  margin-bottom: 20px;
                }
                .buttonsatu  input{
                  margin-bottom: 20px;
                  border-radius: 10px;
                  padding : 10px;
                  border: none;
                  width : 100px;
                  background-color: #0d6efd;
                  color: white;
                }
                .buttondua input{
                  margin-bottom: 20px;
                  border-radius: 10px;
                  padding : 10px;
                  border: none;
                  width : 100px;
                  background-color: #0d6efd;
                  color: white;
                }
                .addbutton {
                  background-color: #0d6efd;
                  border: none;
                  color: white;
                  border-radius: 5px;
                  width: 70px;
                  margin-left: 5px;
                  margin-right: 5px;
                }
                th, td {
                  padding: 5px 15px 10px 15px;
                }
                .dropbtn {
                  background-color: #0d6efd;
                  color: white;
                  padding: 5px;
                  font-size: 16px;
                  border: none;
                  border-radius: 10px;
                  margin-left: 10px;
                  margin-right: 10px;

                }

                .dropdown {
                  position: relative;
                  display: inline-block;
                }

                .dropdown-content {
                  display: none;
                  position: absolute;
                  background-color: white;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                  z-index: 1;
                }

                .dropdown-content a {
                  color: black;
                  padding: 12px 16px;
                  text-decoration: none;
                  display: block;
                }
                .dropdown-content a:hover {background-color: #ddd;}
                .dropdown:hover .dropdown-content {display: block;}
                .dropdown:hover .dropbtn {background-color: black;}

                @media only screen and (max-width: 600px) {
                  tbody, th, td {
                    padding: 5px;
                    font-size: 10px;
                  }
                  .addbutton {
                  margin-top: 5px;
                  margin-bottom: 5px;
                  width: 80px;
                  }
                  .buttonsatu  input{
                  width: 70px;
                  font-size: 10px;
                  }
                  .buttondua input{
                  width: 70px;
                  font-size: 10px;
                  }
                  .dropbtn {
                  background-color: #0d6efd;
                  width: 70px;
                  font-size: 10px;
                  }
                }
                
              </style>
            </section>

            

            <!--TEMPLATE-->
            <script type="text/JavaScript" src="../js/bootstrap.min.js"></script>
</body>

</html>