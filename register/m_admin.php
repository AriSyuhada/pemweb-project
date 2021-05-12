<?php

class m_admin{

    // private $mysqli;
    public $hasil;

    public function __construct(){
        // require "../connectMVC.php";
        require "../connectMVC_mongoDB.php";
    }

    public function getData($username){
        // require "../connectMVC.php";
        require "../connectMVC_mongoDB.php";
        // $rs = $mysqli->query("SELECT username FROM login_credentials WHERE username = '$username'");
        $collection = $db->credentials;
        $this->hasil = $collection->findOne(['username' => $username]);
        // $rows = array();
        
        // while ($row = $rs->fetch_assoc()) {
        //     $rows[] = $row;
        // }
        
        // $this->hasil = $doc;
        return $this->hasil;
    }

    public function setData($username, $password){
        // require "../connectMVC.php";
        require "../connectMVC_mongoDB.php";
        // $rs = $mysqli->query("INSERT INTO login_credentials VALUES ('$username', '$password')");
        $collection = $db->credentials;
        $insertOneResult = $collection->insertOne([
            'username' => $username,
            'password' => $password,
        ]);
    }
}