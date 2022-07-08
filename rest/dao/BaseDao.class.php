<?php
require_once __DIR__ . '/../Config.class.php';

class BaseDao{
  private $conn;
  private $table_name;

  public function __construct($table_name){
    $this->table_name = $table_name;
    $servername = Config::DB_HOST();
    $username = Config::DB_USERNAME();
    $password = Config::DB_PASSWORD();
    $scheme = Config::DB_SCHEME();
    $port = Config::DB_PORT();
    $this->conn = new PDO("mysql:host=$servername; dbname=$scheme; port=$port", $username, $password);

    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }


  public function get_all(){
    $stmt = $this->conn->prepare("SELECT * FROM ".$this->table_name);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>