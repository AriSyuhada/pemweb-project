<?php

include "../bukuKas/m_bukuKas.php";

class m_dataTransaksi extends m_bukuKas {

    private $transactID;
    private $jumlahTransaksi;
    private $infoTransaksi;
    public $hasil = array();

    public function __construct() {
        require "../connectMVC.php";
        require "../connectMVC_mongoDB.php";
    }

    public function setDataTransaksi($selected_db, $booksID, $transactID, $jumlahTransaksi, $infoTransaksi) {
        if ($selected_db == 'mySQL') {   
            require "../connectMVC.php";
            $rs = $mysqli->query("INSERT INTO datatransaksi VALUES ('$booksID', '$booksID/$transactID', '$jumlahTransaksi', '$infoTransaksi')");
        }
        else if($selected_db == 'mongoDB') {
            require "../connectMVC_mongoDB.php";
            $collection = $db->datatransaksi;
            if (is_null($this->getDataTransaksi($booksID, $transactID))) {
                $insertOneResult = $collection->insertOne([
                    'booksID' => $booksID,
                    'transactID' => $booksID.'/'.$transactID,
                    'jumlahTransaksi' => $jumlahTransaksi,
                    'infoTransaksi' => $infoTransaksi,
                ]);
            }
        }
    }

    public function editDataTransaksi($selected_db, $booksID, $transactID, $jumlahTransaksi, $infoTransaksi){
        if ($selected_db == 'mySQL') {
            require "../connectMVC.php";
            $rs = $mysqli->query("UPDATE datatransaksi SET jumlahTransaksi = '$jumlahTransaksi', infoTransaksi = '$infoTransaksi' WHERE transactID = '$transactID' AND booksID = '$booksID'");
        }
        else if($selected_db == 'mongoDB') {
            require "../connectMVC_mongoDB.php";
            $collection = $db->datatransaksi;
            $collection->updateOne(
                ['transactID' => $transactID, 'booksID' => $booksID],
                ['$set' => ['jumlahTransaksi' => $jumlahTransaksi, 'infoTransaksi' => $infoTransaksi]]
            );
            // $collection = $db->datatransaksi;
            // $collection->updateOne(
            //     ['transactID' => $booksID.'/'.$transactID],
            //     ['$set' => ['jumlahTransaksi' => $jumlahTransaksi, 'infoTransaksi' => $infoTransaksi,]]
            // );
        }
    }
    
    public function deleteDataTransaksi($selected_db, $booksID, $transactID){
        if ($selected_db == 'mySQL') {    
            require "../connectMVC.php";
            $rs = $mysqli->query("DELETE FROM datatransaksi WHERE transactID = '$transactID' AND booksID = '$booksID'");
        }
        else if($selected_db == 'mongoDB') {
            require "../connectMVC_mongoDB.php";
            $collection = $db->datatransaksi;
            $collection->deleteOne(
                ['transactID' => $transactID, 'booksID' => $booksID]
            );
        }
    }

    public function getSemuaDataTransaksi($selected_db, $booksID) {
        if ($selected_db == 'mySQL') {    
            require "../connectMVC.php";
            $rs = $mysqli->query("SELECT * FROM datatransaksi WHERE booksID = '$booksID'");
            $rows = array();
    
            while ($row = $rs->fetch_assoc()) {
                $rows[] = $row;
            }
    
            $this->hasil[] = $rows;
    
            return $this->hasil;
        }
        else if($selected_db == 'mongoDB') {
            require "../connectMVC_mongoDB.php";
            $collection = $db->datatransaksi;
            $this->hasil = $collection->find(
                ['booksID' => $booksID]
            );
            return $this->hasil;
        }
    }

    public function getDataTransaksi($booksID, $transactID) {
        require "../connectMVC_mongoDB.php";
        $collection = $db->bukukas;
        $this->hasil = $collection->findOne(
           ['transactID' => $booksID.'/'.$transactID]
        );
        return $this->hasil;
   }
    
    public function setTransactID($transactID) {
        $this->transactID = $transactID;
    }

    public function getTransactID() {
        echo "$this->transactID";
    }

    public function setJumlahTransaksi($jumlahTransaksi) {
        $this->jumlahTransaksi = $jumlahTransaksi;
    }

    public function getJumlahTransaksi() {
        echo "$this->jumlahTransaksi";
    }

    public function setInfoTransaksi($infoTransaksi) {
        $this->infoTransaksi = $infoTransaksi;
    }

    public function getInfoTransaksi() {
        echo "$this->infoTransaksi";
    }

}