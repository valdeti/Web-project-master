<?php

class DatabasePDOConfiguration
{
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbName = "projekti";
    private $password = "";

    protected function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }

    private function createConnection()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
 # konfigurimi i databazes se produkteve
class DatabasePDOConfiguration2
{
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbName = "produktetdb";
    private $password = "";

    protected function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }

    private function createConnection()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}