<?php 
  class Database {
    private mysqli $connection;

    public function __construct($username,$password,$host,$database){
      $this->connection = new mysqli($host,$username,$password,$database);
    
      if ($this->connection->connect_error) {
        die("Connection Failed:" . $this->connection->connect_error);
      } 
    }

    public function getConnection(): mysqli {
        return $this->connection;      
    }
  }

  $server_name="localhost";
  $username="root";
  $password="";
  $database_name="test";

  $db = new Database($username, $password, $server_name, $database_name);