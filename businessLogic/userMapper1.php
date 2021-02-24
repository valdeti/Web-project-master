<?php
require_once "databaseConfig.php";

class UserMapper1 extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    // public function getUserByID($idprodukti)
    // {
    //     $this->query = "select * from produktet where idprodukti=:id";
    //     $statement = $this->conn->prepare($this->query);
    //     $statement->bindParam(":id", $Idprodukti);
    //     $statement->execute();
    //     $result = $statement->fetch(PDO::FETCH_ASSOC);
    //     return $result;
    // }
 

    

    public function getAllProducts()
    {
        $this->query = "select * from produktet";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

  

}