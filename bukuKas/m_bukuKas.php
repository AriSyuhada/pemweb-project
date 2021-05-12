<?php

class m_bukuKas {

   public $booksID;
   public $tanggal;
   public $info;
   public $hasil = array();

    public function __construct() {
        require "../connectMVC.php";
        require "../connectMVC_mongoDB.php";
    }   

    public function addBook($selected_db, $booksID, $tanggal, $info) {
      if ($selected_db == 'mySQL') {
         require "../connectMVC.php";
         $rs = $mysqli->query("INSERT INTO bukukas VALUES ('$booksID', '$tanggal', '$info')");
      }
      else if ($selected_db == "mongoDB") {
         require "../connectMVC_mongoDB.php";
         $collection = $db->bukukas;
         if (is_null($this->getBukuKas($booksID))) {
            $insertOneResult = $collection->insertOne([
               'booksID' => $booksID,
               'tanggal' => $tanggal,
               'info' => $info,
            ]);
         }
      }
    }

    public function editBukuKas($selected_db, $booksID, $tanggal, $info) {
      if ($selected_db == 'mySQL') {
         require "../connectMVC.php";
         $rs = $mysqli->query("UPDATE bukukas SET tanggal = '$tanggal', info = '$info' WHERE booksID = '$booksID'");
      }
      else if ($selected_db == "mongoDB") {
         require "../connectMVC_mongoDB.php";
         $collection = $db->bukukas;
         $collection->updateOne(
            ['booksID' => $booksID],
            ['$set' => ['tanggal' => $tanggal, 'info' => $info,]]
         );
      }
    }
  
    public function deleteBukuKas($selected_db, $booksID){
      if ($selected_db == 'mySQL') {
         require "../connectMVC.php";
         $rs = $mysqli->query("DELETE FROM bukukas WHERE booksID = '$booksID'");
      }
      else if ($selected_db == "mongoDB") {
         require "../connectMVC_mongoDB.php";
         $collection = $db->bukukas;
         $collection->deleteOne(
            ['booksID' => $booksID]
         );
      }
    }

    public function getSemuaBukuKas($selected_db) {
      if ($selected_db == 'mySQL') {
         require "../connectMVC.php";
         $rs = $mysqli->query("SELECT * FROM bukukas");
         $rows = array();
 
         while ($row = $rs->fetch_assoc()) {
             $rows[] = $row;
         }
 
         $this->hasil[] = $rows;
 
         return $this->hasil;
      }
      else if ($selected_db == "mongoDB") {
         require "../connectMVC_mongoDB.php";
         $collection = $db->bukukas;
         $this->hasil = $collection->find([]);
         return $this->hasil;
      }
    }

    public function getBukuKas($booksID) {
         require "../connectMVC_mongoDB.php";
         $collection = $db->bukukas;
         $this->hasil = $collection->findOne(
            ['booksID' => $booksID]
         );
         return $this->hasil;
    }
   
   public function setBooksID($booksID) {
      $this->booksID = $booksID;
   }

   public function getBooksID() {
      echo "$this->booksID";
   }

   public function setTanggal($tanggal) {
      $this->tanggal = $tanggal;
   }

   public function getTanggal() {
      echo "$this->tanggal";
   }

   public function setInfo($info) {
      $this->info = $info;
   }

   public function getInfo() {
      echo "$this->info";
   }

}