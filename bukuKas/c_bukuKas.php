<?php

include_once("m_bukuKas.php");

class c_bukuKas {
    
    public $model;

    public function __construct() {
        $this->model = new m_bukuKas();
    }

    public function add($db, $booksID, $tanggal, $info) {
        $this->model->addBook($db, $booksID, $tanggal, $info);
        header('Location: bukuKas.php?db='.$db);
    }

    public function delete($db, $booksID){
        $this->model->deleteBukuKas($db, $booksID);
        header('Location: bukuKas.php?db='.$db);
    }
   
    public function edit($db, $booksID, $tanggal, $info) {
        $this->model->editBukuKas($db, $booksID, $tanggal, $info);
        header('Location: bukuKas.php?db='.$db);
    }

    public function invokeWithDB($db) {
        $data = $this->model->getSemuaBukuKas($db);
        include 'v_bukuKas.php';
    }

    public function invoke() {
        $data = $this->model->getSemuaBukuKas('mySQL');
        include 'v_bukuKas.php';
    }
} 