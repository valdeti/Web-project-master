<?php
class lidhDB02
{
    private $connection = null;

    // this function is called everytime this class is instantiated     
    public function __construct($dbhost, $dbname, $username, $password)
    {

        try {
            $this->connection = new PDO("mysql:host={$dbhost};dbname={$dbname};", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) . "<br/>";
            echo "Lidhja me BDH eshte ralizuar me SUKSES!!<br/>";
        } catch (Exception $e) {
            //throw new Exception($e->getMessage());  
            echo "Lidhja me BDH nuk eshte ralizuar! " . $e->getMessage();
        }
    }
    public function getConnectio()
    {
        return $this->connection;
    }
}
