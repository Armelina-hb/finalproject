<?php
  class Professionals{
    private $connection;
    public function __construct(Database $db){
      $this->connection = $db->getConnection();
    }

    public function create($name, $address, $email, $salary){
        $sql = "INSERT INTO `professionals`(`name`, `address`, `email`, `salary`) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param('ssss', $name, $address, $email, $salary);
        return $stmt->execute();  
    }

    public function readAll() {
      $sql = "SELECT * FROM professionals";
      $stmt = $this->connection->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function readById($id) {
      $sql = "SELECT * FROM professionals WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('s', $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function update($name, $phone, $address, $email, $salary, $id) {
      $sql = "UPDATE `professionals` SET `name`= ?,`phone`= ?,`address`= ?,`email`= ?,`salary`= ? WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('ssssss', $name, $phone, $address, $email, $salary, $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }
    public function delete($id) {
      $sql = "DELETE FROM professionals WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('s', $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }
    public function query($search) {
      $sql = "SELECT * FROM professionals WHERE `Name` LIKE ?";
      $stmt = $this->connection->prepare($sql);
      $searchTerm = '%' . $search . '%';
      $stmt->bind_param('s', $searchTerm);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }
  }