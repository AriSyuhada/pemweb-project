<?php

include_once("m_admin.php");

class c_admin{

    public $model;

    public function __construct(){
        $this->model = new m_admin();
    }
    
    public function getData($username){
        $credentials = $this->model->getData($username);
        return $credentials;
    }

    public function setData($username, $password){
        $this->model->setData($username, $password);
        header("Location: ../login/login.php?register=1");
    }
}