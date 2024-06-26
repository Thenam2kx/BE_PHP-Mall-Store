<?php
  class Database {
    protected $host = 'localhost';
    protected $dbname = 'Mall-Store';
    protected $username = 'root';
    protected $password = '';
    public $conn;

    public function __construct() {
      try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $err) {
        echo "Connection Fail: ".$err->getMessage();
      }
    }
  }
?>