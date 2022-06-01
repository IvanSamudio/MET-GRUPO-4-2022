<?php

class MailModel{

  private $db;
  
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=turnofacil;charset=utf8', 'root', '');
  }

  

  

}