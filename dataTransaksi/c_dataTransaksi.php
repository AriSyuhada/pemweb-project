<?php

include_once("m_dataTransaksi.php");

class c_dataTransaksi {
    
    public $model;

    public function __construct() {
        $this->model = new m_dataTransaksi();
    }

    public function add($db, $booksID, $transactID, $jumlahTransaksi, $infoTransaksi) {
        $this->model->setDataTransaksi($db, $booksID, $transactID, $jumlahTransaksi, $infoTransaksi);
        header("location: dataTransaksi.php?db=$db&booksID=$booksID");
    }

    public function delete($db, $booksID, $transactID){
        $this->model->deleteDataTransaksi($db, $booksID, $transactID);
        header("location: dataTransaksi.php?db=$db&booksID=$booksID");
    }
   
    public function edit($db, $booksID, $transactID, $jumlahTransaksi, $infoTransaksi) {
        $this->model->editDataTransaksi($db, $booksID, $transactID, $jumlahTransaksi, $infoTransaksi);
        header("location: dataTransaksi.php?db=$db&booksID=$booksID");
    }

    public function invokeWithDB($db, $booksID) {
        $data = $this->model->getSemuaDataTransaksi($db, $booksID);
        include 'v_dataTransaksi.php';
    }

    public function invoke($booksID) {
        $data = $this->model->getSemuaDataTransaksi('mySQL', $booksID);
        include 'v_dataTransaksi.php';
    }
} 