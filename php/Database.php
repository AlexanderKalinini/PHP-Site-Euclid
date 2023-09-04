<?php
class Database
{

  protected string $servername = "db";
  protected string $dbName = "euclid";
  protected string $username = "root";
  protected string $password = "root";
  protected PDO $connection;

  public function __construct()
  {
    try {
      $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);
      // set the PDO error mode to exception
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  protected function query(string $query, array $fields)
  {
    $conn = $this->connection->prepare($query,);
    $conn->execute($fields);
    return $query;
  }


  public function insert(array $fields,): int
  {
    $names = [];
    $masks = [];
    $masks2 = '';
    foreach ($fields as $field => $val) {
      $names[] = $field;
      $masks[] = ":$field";
    }

    $namesStr = implode(', ', $names);
    $masksStr = implode(', ', $masks);

    $query = "INSERT INTO users ($namesStr) VALUES ($masksStr)";

    $this->query($query, $fields);
    return $this->connection->lastInsertId();
  }
}
